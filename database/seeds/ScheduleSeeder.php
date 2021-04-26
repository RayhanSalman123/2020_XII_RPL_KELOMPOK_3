<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
        	'sch_class_id' 				=> '1',
        	'sch_day_hour_id' 			=> '1',
            'sch_teacher_subject_id'	=> '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '1',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);
    }
}
