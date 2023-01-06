<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class Admin_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'admin_name'=>"admin1",
            'admin_email'=>"admin1@admin.com",
            'admin_password'=>Hash::make('admin')
        ]);
    }
}
