<?php

use Illuminate\Database\Seeder;

class TeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_subjects')->insert([
            'ts_teacher_id' 		=> '1',
            'ts_subject_id' 		=> '1',
        ]);		
    }
}
