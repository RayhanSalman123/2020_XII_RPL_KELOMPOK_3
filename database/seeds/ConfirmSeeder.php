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
            'con_class_id'  => '1',
        ]);

        DB::table('confirms')->insert([
            'con_class_id'  => '2',
        ]);
    }
}
