<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 1 judul ujian -> N mapel, 1 riwayat per (siswa, ujian, mapel).
     * Riwayat lama (multi-mapel) dibiarkan subject_id = null (legacy).
     */
    public function up(): void
    {
        if (! Schema::hasColumn('exam_histories', 'subject_id')) {
            Schema::table('exam_histories', function (Blueprint $table) {
                $table->foreignId('subject_id')->nullable()->after('exam_id')
                    ->constrained('subjects')->nullOnDelete();
            });
        }

        // FK student_id butuh index leftmost; siapkan index biasa dulu
        // agar unique lama bisa di-drop tanpa error MySQL 1553.
        Schema::table('exam_histories', function (Blueprint $table) {
            $indexes = collect(DB::select('SHOW INDEX FROM exam_histories'))
                ->pluck('Key_name')->all();
            if (! in_array('exam_histories_student_id_index', $indexes, true)) {
                $table->index('student_id', 'exam_histories_student_id_index');
            }
        });

        // Hapus aturan lama: 1 siswa hanya 1x per judul ujian
        $indexes = collect(DB::select('SHOW INDEX FROM exam_histories'))->pluck('Key_name')->all();
        if (in_array('exam_histories_student_id_exam_id_unique', $indexes, true)) {
            Schema::table('exam_histories', function (Blueprint $table) {
                $table->dropUnique(['student_id', 'exam_id']);
            });
        }

        // Aturan baru: 1 siswa hanya 1x per (judul ujian, mapel)
        $indexes = collect(DB::select('SHOW INDEX FROM exam_histories'))->pluck('Key_name')->all();
        if (! in_array('exam_histories_student_exam_subject_unique', $indexes, true)) {
            Schema::table('exam_histories', function (Blueprint $table) {
                $table->unique(['student_id', 'exam_id', 'subject_id'], 'exam_histories_student_exam_subject_unique');
            });
        }
    }

    public function down(): void
    {
        Schema::table('exam_histories', function (Blueprint $table) {
            $table->dropUnique('exam_histories_student_exam_subject_unique');
        });

        Schema::table('exam_histories', function (Blueprint $table) {
            $table->dropConstrainedForeignId('subject_id');
        });

        Schema::table('exam_histories', function (Blueprint $table) {
            $table->unique(['student_id', 'exam_id']);
        });
    }
};
