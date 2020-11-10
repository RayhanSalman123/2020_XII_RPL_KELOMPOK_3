<?php

use Illuminate\Database\Seeder;

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
        	'nis' => '1819.10.007',
        	'gender' => 'Perempuan',
            'class' => 'XII',
            'major' => 'Rekayasa Perangkat Lunak ',
            'school_year' => '2018'
        ]);
    }
}
