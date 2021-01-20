<?php

use Illuminate\Database\Seeder;

class ConfirmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('confirms')->insert([
            'name_class'  => 'X',
            'major'		  => 'RPL',
        ]);
    }
}
