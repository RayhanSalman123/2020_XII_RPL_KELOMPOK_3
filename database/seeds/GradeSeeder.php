<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'grade_name'  => 'X',        
            ]);

        DB::table('grades')->insert([
            'grade_name'  => 'XI',        
            ]);

        DB::table('grades')->insert([
            'grade_name'  => 'XII',        
            ]);
    }
}
