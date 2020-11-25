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
            'user_id'           => '3',
            'sbj_subject_id'    => '1',
            'time'         => '10:00:00',
         	'day' 		   => 'selasa'
        ]);
    }
}
