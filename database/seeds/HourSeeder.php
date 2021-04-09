<?php

use Illuminate\Database\Seeder;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('hours')->insert([
            'start_time'	=> '6:30',
            'end_time' 		=> '7:10',
            'hour_notes' 	=> 'ke-1'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '07:10',
            'end_time' 		=> '07:50',
            'hour_notes' 	=> 'ke-2'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '07:50',
            'end_time' 		=> '08:30',
            'hour_notes' 	=> 'ke-3'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '08:30',
            'end_time' 		=> '09:10',
            'hour_notes' 	=> 'ke-4'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '9:40',
            'end_time' 		=> '10:20',
            'hour_notes' 	=> 'ke-5'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '10:20',
            'end_time' 		=> '11:00',
            'hour_notes' 	=> 'ke-6'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '11:00',
            'end_time' 		=> '11:40',
            'hour_notes' 	=> 'ke-7'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '12:30',
            'end_time' 		=> '13:10',
            'hour_notes' 	=> 'ke-8'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '13.10',
            'end_time' 		=> '13.50',
            'hour_notes' 	=> 'ke-9'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '13.50',
            'end_time' 		=> '14.30',
            'hour_notes' 	=> 'ke-10'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '14.30',
            'end_time' 		=> '15.10',
            'hour_notes' 	=> 'ke-11'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '9:10',
            'end_time' 		=> '9:40',
            'hour_notes' 	=> 'Istirahat I'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '11:40',
            'end_time' 		=> '12:30',
            'hour_notes' 	=> 'Istirahat II'
        ]);

        DB::table('hours')->insert([
            'start_time'	=> '11:00',
            'end_time' 		=> '12:30',
            'hour_notes' 	=> 'Istirahat Jumat'
        ]);
    }
}