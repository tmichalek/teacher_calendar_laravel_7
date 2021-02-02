<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;


class GradeTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayGrade=[1,2,3,4,5,6,7,8,9,10];
        $arrayTeacher=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

        $gradeTeacher=[];

        for($i=0; $i<30;$i++)
        { $gradeTeacher[]=[
            'id_grade'=>Arr::random($arrayGrade),
            'id_teacher'=>Arr::random($arrayTeacher),
            'created_at'=>Carbon::now(), 
            'updated_at'=>Carbon::now()];

        }

        DB::table('grade_teacher')->truncate();
        DB::table('grade_teacher')->insert($gradeTeacher);

    }
}
