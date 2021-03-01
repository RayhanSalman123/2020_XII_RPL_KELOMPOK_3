<?php

use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curriculums')->insert([
            'curriculum_name'  => 'KTSP',        
            ]);

        DB::table('curriculums')->insert([
            'curriculum_name'  => 'Kurikulum 2013',        
            ]);
    }
}
