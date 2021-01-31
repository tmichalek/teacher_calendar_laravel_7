<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_teacher', function (Blueprint $table) {
            $table->id('id_grade_teacher');
            $table->foreignId('id_grade');
            $table->foreign('id_grade')->references('id_grade')->on('grades');
            $table->foreignId('id_teacher');
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_teacher');
    }
}
