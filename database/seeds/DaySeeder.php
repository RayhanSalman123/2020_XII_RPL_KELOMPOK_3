<?php

use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'day_name' => 'Minggu'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'Senin'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'Selasa'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'Rabu'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'Kamis'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'Jumat'
        ]);

         DB::table('days')->insert([
        	'day_name' => 'Sabtu'
        ]);
    }
}
