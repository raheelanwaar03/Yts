<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = New User();
        $adminUser->name = 'admin';
        $adminUser->username = 'admin';
        $adminUser->email = 'admin@gmail.com';
        $adminUser->phone = '030012345678';
        $adminUser->country = 'Pakistan';
        $adminUser->role = 'admin';
        $adminUser->password = Hash::make('admin@y');
        $adminUser->save();
    }
}
