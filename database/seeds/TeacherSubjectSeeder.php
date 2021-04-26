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
            'ts_teacher_id'         => '2',
            'ts_subject_id'         => '3',
        ]); 

         DB::table('teacher_subjects')->insert([
            'ts_teacher_id'         => '2',
            'ts_subject_id'         => '4',
        ]); 	
    }
}
