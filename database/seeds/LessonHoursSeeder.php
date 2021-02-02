<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LessonHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lesson_hours')->truncate();
        DB::table('lesson_hours')->insert([
            ['Hour'=>'8.00-8.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Hour'=>'9.00-9.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Hour'=>'10.00-10.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Hour'=>'11.00-11.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Hour'=>'12.00-12.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Hour'=>'13.00-13.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Hour'=>'14.00-14.45','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            
            
        ]);

    }
}
