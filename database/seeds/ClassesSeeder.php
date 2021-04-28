<?php

use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('classes')->insert([
            'cl_grade_id' => '1',
            'cl_major_id' => '2',
            'group' => '1'
        ]);

        DB::table('classes')->insert([
            'cl_grade_id' => '1',
            'cl_major_id' => '2',
            'group' => '2'
        ]);

       DB::table('classes')->insert([
            'cl_grade_id' => '1',
            'cl_major_id' => '1',
            'group' => '1'
        ]);

        DB::table('classes')->insert([
            'cl_grade_id' => '2',
            'cl_major_id' => '2',
            'group' => '1'
        ]);

         DB::table('classes')->insert([
            'cl_grade_id' => '2',
            'cl_major_id' => '2',
            'group' => '2'
        ]);

          DB::table('classes')->insert([
            'cl_grade_id' => '2',
            'cl_major_id' => '1',
            'group' => '1'
        ]);

           DB::table('classes')->insert([
            'cl_grade_id' => '3',
            'cl_major_id' => '2',
            'group' => '1'
        ]);

            DB::table('classes')->insert([
            'cl_grade_id' => '3',
            'cl_major_id' => '2',
            'group' => '2'
        ]);

             DB::table('classes')->insert([
            'cl_grade_id' => '3',
            'cl_major_id' => '1',
            'group' => '1'
        ]);
    }
}