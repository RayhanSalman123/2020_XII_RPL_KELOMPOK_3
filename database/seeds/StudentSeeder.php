<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'user_id'       => '2',
            'st_class_id'   => '1',
        	'nis'           => '1819.10.007',
        	'gender'        => 'laki-laki',
            'school_year'   => '2018'
        ]);
    }
}