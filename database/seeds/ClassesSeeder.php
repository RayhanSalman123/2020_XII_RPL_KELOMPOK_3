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
            'major' => 'Rekayasa Perangkat Lunak ',
        ]);

       DB::table('classes')->insert([
            'class' => 'XI',
            'major' => 'Multimedia ',
        ]);

       DB::table('classes')->insert([
            'class' => 'XII',
            'major' => 'Rekayasa Perangkat Lunak ',
        ]);
    }
}