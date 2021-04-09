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
			'unf_name_uniform'	=> 'Putih Abu'
        ]);

        DB::table('uniform_schedules')->insert([
        	'unf_day_id'		=> '3',
			'unf_name_uniform'	=> 'Kotak-kotak'
        ]);
    }
}