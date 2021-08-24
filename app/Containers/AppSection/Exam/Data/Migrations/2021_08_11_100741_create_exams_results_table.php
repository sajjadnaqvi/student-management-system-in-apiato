<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsResultsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exams_results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('marks');
            $table->uuid('exam_id')->nullable();
            $table->uuid('student_id')->nullable();
            $table->uuid('course_id')->nullable();

            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_results');
    }
}
