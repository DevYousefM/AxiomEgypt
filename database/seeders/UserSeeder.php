<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "name" => "Yousef Mohamed",
            "email" => "admin@app.com",
            "password" => bcrypt("admin@app.com")
        ]);
    }
}
