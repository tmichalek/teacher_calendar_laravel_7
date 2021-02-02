<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->truncate();
        DB::table('grades')->insert([
            ['Name'=>'Ia','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'Ib','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'Ic','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IIa','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IIb','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IIc','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IIIa','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IIIb','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IIIc','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Name'=>'IVa','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            
        ]);
    }
}
