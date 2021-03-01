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
            'gender'            => 'Pria'
        ]);

        DB::table('teachers')->insert([
            'user_id'           => '3',
            'nip'               => '12341234 ',
            'gender'            => 'Wanita'
        ]);

        DB::table('teachers')->insert([
            'user_id'           => '3',
            'nip'               => '9876543',
            'gender'            => 'Pria'
        ]);

        DB::table('teachers')->insert([
            'user_id'           => '3',
            'nip'               => '567432896',
            'gender'            => 'Wanita'
        ]);
    }
}