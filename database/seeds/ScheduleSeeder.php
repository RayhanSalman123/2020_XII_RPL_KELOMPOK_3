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

         DB::table('schedules')->insert([
            'sch_class_id'              => '2',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '2',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);

         DB::table('schedules')->insert([
            'sch_class_id'              => '3',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '3',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);

         DB::table('schedules')->insert([
            'sch_class_id'              => '4',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '4',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);

         DB::table('schedules')->insert([
            'sch_class_id'              => '5',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '5',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);

         DB::table('schedules')->insert([
            'sch_class_id'              => '6',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '6',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);
         DB::table('schedules')->insert([
            'sch_class_id'              => '7',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '7',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);
         DB::table('schedules')->insert([
            'sch_class_id'              => '8',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '8',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);
         DB::table('schedules')->insert([
            'sch_class_id'              => '9',
            'sch_day_hour_id'           => '1',
            'sch_teacher_subject_id'    => '1',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '9',
            'sch_day_hour_id'           => '2',
            'sch_teacher_subject_id'    => '1',
        ]);




        DB::table('schedules')->insert([
            'sch_class_id'              => '1',
            'sch_day_hour_id'           => '13',
            'sch_teacher_subject_id'    => '2',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '1',
            'sch_day_hour_id'           => '24',
            'sch_teacher_subject_id'    => '2',
        ]);
         DB::table('schedules')->insert([
            'sch_class_id'              => '1',
            'sch_day_hour_id'           => '35',
            'sch_teacher_subject_id'    => '2',
        ]);

        DB::table('schedules')->insert([
            'sch_class_id'              => '1',
            'sch_day_hour_id'           => '46',
            'sch_teacher_subject_id'    => '2',
        ]);

    }
}
