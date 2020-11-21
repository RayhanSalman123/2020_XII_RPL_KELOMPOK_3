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
            'name_class' => 'XII',
            'major' => 'Rekayasa Perangkat Lunak ',
        ]);
    }
}
