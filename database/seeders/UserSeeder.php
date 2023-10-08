<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(["name"=>"admin"]);

        $user = User::create([
        "name"=>"admin" , 
        "email"=>"jebril.badr88@gmail.com",
        "password" => Hash::make("jebril@1234")
        ]
    );

        $user->assignRole($role);
    }
}