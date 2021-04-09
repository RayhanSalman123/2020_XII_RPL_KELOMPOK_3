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
            'day_name' => 'minggu'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'senin'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'selasa'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'rabu'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'kamis'
        ]);

        DB::table('days')->insert([
        	'day_name' => 'jumat'
        ]);

         DB::table('days')->insert([
        	'day_name' => 'sabtu'
        ]);
    }
}
