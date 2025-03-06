<?php

namespace Database\Seeders;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "first_name"=> "Umar",
            "last_name"=> "Ibn Xattob",
            "email"=> "arkan@gmail.com",
            "password"=> bcrypt("secret"),
            "phone"=>fake()->phoneNumber(),
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached(Role::find(2))->create();
        User::factory()->count(300)->hasAttached(Role::find(3))->create();
    }
}
