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
            'sbj_curriculum_id'     => '2',
         	'name_subject'          => 'PJOK (X)'
        ]);

        DB::table('subjects')->insert([
            'sbj_curriculum_id'     => '2',
            'name_subject'          => 'PJOK (XI)'
        ]);

         DB::table('subjects')->insert([
            'sbj_curriculum_id'     => '2',
            'name_subject'          => 'Upacara'
        ]);

          DB::table('subjects')->insert([
            'sbj_curriculum_id'     => '2',
            'name_subject'          => 'Keagamaan'
        ]);

        DB::table('subjects')->insert([
            'sbj_major_id'          => '1',
            'sbj_curriculum_id'     => '2',
            'name_subject'          => 'Komjar'
        ]);
    }
}