<?php

use Illuminate\Database\Seeder;

class SchoolActivitiesAgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_activities_agenda')->insert([
            'sa_date'			=> '2020-7-13',
			'sa_description'	=> 'Hari Pertama masuk sekolah Semester 1'       
        ]);

        DB::table('school_activities_agenda')->insert([
            'sa_date'			=> '2020-10-01',
			'sa_description'	=> 'Awal PTS'       
        ]);

        DB::table('school_activities_agenda')->insert([
            'sa_date'			=> '2020-10-06',
			'sa_description'	=> 'AKhir PTS'       
        ]);
    }
}