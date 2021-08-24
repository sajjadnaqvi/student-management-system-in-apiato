<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classrooms_students', function (Blueprint $table) {
            $table->uuid('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');

            $table->uuid('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            //$table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms_students');
    }
}
