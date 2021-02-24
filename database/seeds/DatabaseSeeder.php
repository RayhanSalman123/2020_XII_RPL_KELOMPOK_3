<?php

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MajorSeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(SchoolYearsSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(SubmissionSeeder::class);
        $this->call(ConfirmSeeder::class);
        $this->call(SchedulesSeeder::class);
        
        
    }
}