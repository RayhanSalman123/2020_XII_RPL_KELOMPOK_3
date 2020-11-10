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
        	'nip' => '12345678',
            'teacher_subject' => 'Bahasa Indonesia',
            'gender' => 'Perempuan'
        ]);
    }
}
