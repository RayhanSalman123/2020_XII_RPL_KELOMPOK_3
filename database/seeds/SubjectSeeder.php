<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'sbj_curriculum_id'  => '1',
         	'name_subject' => 'Komputer Jaringan',
        ]);
    }
}