<?php

use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('majors')->insert([
            
             'name_major' => 'Rekayasa Perangkat Lunak ',

        ]);

          DB::table('majors')->insert([
            
             'name_major' => 'Multimedia ',

        ]);

             DB::table('majors')->insert([
            
             'name_major' => 'Rekayasa Perangkat Lunak 2',

        ]);
    }
}
