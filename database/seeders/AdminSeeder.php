<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            "role_id" => "1",
            "email" => "admin@gmail.com",
            "password" => Hash::make('123456789'),
            "name" => "Admin",
        ]);
    }
}
