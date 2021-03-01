<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'student',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'teacher',
            'guard_name' => 'web'
        ]);
        DB::table('roles')->insert([
            'name' => 'head_master',
            'guard_name' => 'web'
        ]);
    }
}
