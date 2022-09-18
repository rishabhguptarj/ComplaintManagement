<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Admin",
                "slug" => "admin"
            ],
            [
                "name" => "Vender",
                "slug" => "vender"
            ],
            [
                "name" => "Employee",
                "slug" => "employee"
            ]
            ];
        foreach($data as $value){
            Role::create($value);
        }
    }
}
