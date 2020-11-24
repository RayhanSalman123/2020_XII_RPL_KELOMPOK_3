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
         	'day' => 'senin',
            'date' => '2020-08-14',
            'time' => '12:00:00',
            'name_subject' => 'Matematika',
            'name_teacher' => 'Agfie'
        ]);
    }
}
