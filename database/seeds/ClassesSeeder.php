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
            'cl_major_id' => '1',
            'class' => 'X',
            'group' => '1'
        ]);
    }
}