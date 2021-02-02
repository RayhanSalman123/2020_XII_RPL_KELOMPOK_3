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
            'class' => 'X',
            'id_major' => 1,
        ]);

       DB::table('classes')->insert([
            'class' => 'XI',
            'id_major' => 2,
        ]);

       DB::table('classes')->insert([
            'class' => 'XII',
            'id_major' => 3,
        ]);
    }
}