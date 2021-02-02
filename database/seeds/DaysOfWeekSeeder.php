<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use Illuminate\Database\Seeder;

class DaysOfWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days_of_weeks')->truncate();
        DB::table('days_of_weeks')->insert([
            ['Day'=>'Pon','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Day'=>'Wto','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Day'=>'Śro','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Day'=>'Czw','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Day'=>'Pią','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Day'=>'Sob','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Day'=>'Nie','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            
            
        ]);
    }
}
