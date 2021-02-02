<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->truncate();
        $classroom=factory('App\Models\Classroom', 15)->create();
    }
}
