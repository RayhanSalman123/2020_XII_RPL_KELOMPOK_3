<?php

use Illuminate\Database\Seeder;

class UniformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uniforms')->insert([
            'urm_name'  => 'Putih Abu',        
            ]);

        DB::table('uniforms')->insert([
            'urm_name'  => 'Kotak-Kotak',        
            ]);
    }
}
