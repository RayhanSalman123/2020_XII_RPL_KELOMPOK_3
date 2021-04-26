<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('teachers')->insert([
            'user_id'           => '3',
        	'nip'               => '123456789',
            'gender'            => 'Laki-Laki'
        ]);  

        DB::table('teachers')->insert([
            'user_id'           => '4',
            'nip'               => '1',
            'gender'            => 'Laki-Laki'
        ]);   



     }
}