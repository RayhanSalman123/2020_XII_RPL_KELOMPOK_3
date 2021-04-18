<?php

use Illuminate\Database\Seeder;

class SchoolYearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_years')->insert([
            'school_year_name'  => '2018 - 2019',        
            ]);

        DB::table('school_years')->insert([
            'school_year_name'   => '2019 - 2020',        
            ]);

        DB::table('school_years')->insert([
            'school_year_name'   => '2020 -2021',        
            ]);
    }
}
