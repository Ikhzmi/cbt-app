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
        if (! Schema::hasColumn('exam_histories', 'options_order')) {
            Schema::table('exam_histories', function (Blueprint $table) {
                $table->json('options_order')->nullable()->after('question_order');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('exam_histories', 'options_order')) {
            Schema::table('exam_histories', function (Blueprint $table) {
                $table->dropColumn('options_order');
            });
        }
    }
};
