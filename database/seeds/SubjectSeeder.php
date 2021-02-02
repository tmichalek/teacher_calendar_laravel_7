<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->truncate();
        DB::table('subjects')->insert([
            ['Subject_name'=>'Matematyka','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Subject_name'=>'Bologia','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Subject_name'=>'Informatyka','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Subject_name'=>'Język Polski','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Subject_name'=>'Język Angielski','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Subject_name'=>'W-F','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ]);
    }
}
