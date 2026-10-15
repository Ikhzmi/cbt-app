<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained('exams')->cascadeOnDelete();
            $table->foreignId('student_id')->constrained('students')->cascadeOnDelete();
            $table->dateTime('started_at');
            $table->dateTime('finished_at')->nullable();
            $table->integer('duration_spent_seconds')->default(0);
            $table->integer('total_questions')->default(0);
            $table->integer('correct_count')->default(0);
            $table->integer('wrong_count')->default(0);
            $table->integer('unanswered_count')->default(0);
            $table->decimal('score', 5, 2)->default(0);
            $table->decimal('threshold', 5, 2)->default(0);
            $table->boolean('is_passed')->default(false);
            $table->unsignedInteger('violation_count')->default(0);
            $table->string('status')->default('in_progress'); // in_progress, completed, timeout_auto_submit, terminated_cheat
            $table->json('question_order')->nullable();
            $table->timestamps();

            $table->unique(['student_id', 'exam_id']);
        });

        Schema::create('exam_history_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_history_id')->constrained('exam_histories')->cascadeOnDelete();
            $table->foreignId('question_id')->constrained('questions')->cascadeOnDelete();
            $table->foreignId('selected_answer_id')->nullable()->constrained('answers')->nullOnDelete();
            $table->boolean('is_correct')->default(false);
            $table->integer('score_earned')->default(0);
            $table->boolean('is_doubtful')->default(false);
            $table->timestamps();

            $table->index(['exam_history_id', 'question_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_history_answers');
        Schema::dropIfExists('exam_histories');
    }
};
