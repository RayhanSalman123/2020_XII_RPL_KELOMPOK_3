<?php

use Illuminate\Database\Seeder;

class UniformScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uniform_schedules')->insert([
        	'unf_day_id'		=> '2',
			'unf_urm_id'	=> '1',
            'unf_week'          =>  '1, 2, 3, 4'
        ]);

        DB::table('uniform_schedules')->insert([
        	'unf_day_id'		=> '3',
			'unf_urm_id'	=> '2',
            'unf_week'          =>  '1, 3'
        ]);
    }
}