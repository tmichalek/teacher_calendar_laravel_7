<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->truncate();
        $rating=factory('App\Models\Rating', 200)->create();
    }
}
