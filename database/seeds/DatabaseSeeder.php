<?php

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            GradeSeeder::class,
            SubjectSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            ClassroomSeeder::class,
            RateSeeder::class,
            LessonHoursSeeder::class,
            DaysOfWeekSeeder::class,
            GradeTeacherSeeder::class,
            TeacherSubjectSeeder::class,
            RateSeeder::class,
            RatingSeeder::class,
            ScheduleSeeder::class

             ]);
    }
}
