<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->truncate();
        DB::table('rates')->insert([
            ['Rate'=>1.0,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>1.5,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>2.0,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>2.5,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>3.0,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>3.5,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>4.0,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>4.5,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>5.0,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>5.5,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['Rate'=>6.0,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ]);
    }
}
