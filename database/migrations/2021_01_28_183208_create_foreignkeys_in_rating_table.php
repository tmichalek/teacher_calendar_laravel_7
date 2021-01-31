<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeysInRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->foreign('id_rate')->references('id_rate')->on('rates');
            $table->foreign('id_subject')->references('id_subject')->on('subjects');
            $table->foreign('id_grade')->references('id_grade')->on('grades');
            $table->foreign('id_student')->references('id_student')->on('students');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->dropForeign('id_rate');
            $table->dropForeign('id_subject');
            $table->dropForeign('id_grade');
            $table->dropForeign('id_student');
            
        });
    }
}
