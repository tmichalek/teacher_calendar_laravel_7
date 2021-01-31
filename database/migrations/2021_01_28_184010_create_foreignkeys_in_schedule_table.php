<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeysInScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('id_days_of_week')->references('id_days_of_week')->on('days_of_weeks');
            $table->foreign('id_lesson_hour')->references('id_lesson_hour')->on('lesson_hours');
            $table->foreign('id_classroom')->references('id_classroom')->on('classrooms');
            $table->foreign('id_grade')->references('id_grade')->on('grades');
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedule', function (Blueprint $table) {
            $table->Dropforeign('id_days_of_week');
            $table->Dropforeign('id_lesson_hour');
            $table->Dropforeign('id_classroom');
            $table->Dropforeign('id_grade');
            $table->Dropforeign('id_teacher');
        
        });
    }
}
