<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class TeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arraySubject=[1,2,3,4,5,6];
        $arrayTeacher=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

        $gradeTeacher=[];

        for($i=0; $i<30;$i++)
        { $gradeTeacher[]=[
            'id_teacher'=>Arr::random($arrayTeacher),
            'id_subject'=>Arr::random($arraySubject),
            'created_at'=>Carbon::now(), 
            'updated_at'=>Carbon::now()];

        }

        DB::table('teacher_subject')->truncate();
        DB::table('teacher_subject')->insert($gradeTeacher);
    }
}
