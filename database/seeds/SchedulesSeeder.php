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
            'user_id'	=> '1',
        	'sbj_subject_id'	=> '1',
         	'day' => 'senin',
            'date' => '2020-08-14',
            'hour' => '12:00:00'
        ]);

        DB::table('schedules')->insert([
            'user_id'   => '2',
            'sbj_subject_id'    => '1',
            'day' => 'senin',
            'date' => '2020-08-14',
            'hour' => '12:00:00'
        ]);

        DB::table('schedules')->insert([
            'user_id'   => '3',
            'sbj_subject_id'    => '1',
            'day' => 'senin',
            'date' => '2020-08-14',
            'hour' => '12:00:00'
        ]);

        DB::table('schedules')->insert([
            'user_id'   => '4',
            'sbj_subject_id'    => '1',
            'day' => 'senin',
            'date' => '2020-08-14',
            'hour' => '12:00:00'
        ]);
    }
}