<?php

use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('schedules')->insert([
            'user_id'           => '3',
            'sch_teacher_id'        => '1',
            'sch_class_id'          => '1',
            'sch_school_year_id'    => '4',
        	'sch_subject_id'	    => '1',
         	'day'                   => 'senin',
            'lesson_to'             => '1',
            'hour'                  => '12:00:00'
        ]);

        DB::table('schedules')->insert([
            'user_id'           => '3',
            'sch_teacher_id'        => '2',
            'sch_class_id'          => '1',
            'sch_school_year_id'    => '4',
            'sch_subject_id'        => '1',
            'day'                   => 'senin',
            'lesson_to'             => '2',
            'hour'                  => '12:00:00'
        ]);

        DB::table('schedules')->insert([
            'user_id'           => '3',
            'sch_teacher_id'        => '3',
            'sch_class_id'          => '1',
            'sch_school_year_id'    => '4',
            'sch_subject_id'        => '1',
            'day'                   => 'senin',
            'lesson_to'             => '3',
            'hour'                  => '12:00:00'
        ]);

        DB::table('schedules')->insert([
            'user_id'           => '3',
            'sch_teacher_id'        => '4',
            'sch_class_id'          => '1',
            'sch_school_year_id'    => '4',
            'sch_subject_id'        => '1',
            'day'                   => 'senin',
            'lesson_to'             => '4',
            'hour'                  => '12:00:00'
        ]);
    }
}