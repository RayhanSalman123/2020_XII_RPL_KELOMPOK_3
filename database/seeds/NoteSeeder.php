<?php

use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'nt_subject_id'  => '1', 
            'nt_date'	=> '2020-9-20',
            'nt_name'	=> 'Tugas PAB menghafal surat-surat pendek'       
        ]);    }
}