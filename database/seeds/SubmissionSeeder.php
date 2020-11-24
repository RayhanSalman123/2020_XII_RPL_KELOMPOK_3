<?php

use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('submissions')->insert([
        	'name_teacher' => 'Raynaldi',
        	'name_subject' => 'pbo',
            'time'         => '10:00:00',
         	'day' 		   => 'selasa',
        ]);
    }
}
