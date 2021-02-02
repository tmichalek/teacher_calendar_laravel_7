<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('teachers')->truncate();
        $teacher=factory('App\Models\Teacher', 20)->create();
    }
}
