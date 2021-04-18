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
        $this->call(DaySeeder::class);
        $this->call(HourSeeder::class);
        $this->call(SchoolActivitiesAgendaSeeder::class);
        $this->call(UniformSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(UniformScheduleSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(DayHourSeeder::class);
        $this->call(ConfirmSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(SubmissionSeeder::class);
        $this->call(TeacherSubjectSeeder::class); 
        $this->call(ScheduleSeeder::class);
        $this->call(NoteSeeder::class);
    }
}