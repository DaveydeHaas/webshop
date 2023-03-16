<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Davey',
                'infix' => 'de',
                'last_name' => 'Haas',
                'email' => 'daveydehaas14@gmail.com',
                'phone_number' => '0621312816',
                'password' => 'P@ssw0rd',
                'role' => 'admin',
            ],
            [
                'first_name' => 'Bert',
                'infix' => '',
                'last_name' => 'Test',
                'email' => 'Bert@test.com',
                'phone_number' => '060000000',
                'password' => 'P@ssw0rd',
                'role' => 'support',
            ],
            [
                'first_name' => 'Jan',
                'infix' => 'de',
                'last_name' => 'Tester',
                'email' => 'jan@test.com',
                'phone_number' => '0653943492',
                'password' => 'P@ssw0rd',
                'role' => 'user',
            ],
            [
                'first_name' => 'Kees',
                'infix' => 'van het',
                'last_name' => 'Padje',
                'email' => 'Kees@test.com',
                'phone_number' => '0658343435',
                'password' => 'P@ssw0rd',
                'role' => 'user',
            ],
            [
                'first_name' => 'Jacob',
                'infix' => '',
                'last_name' => 'Tenoord',
                'email' => 'jacob@test.com',
                'phone_number' => '0624363547',
                'password' => 'P@ssw0rd',
                'role' => 'user',
            ],
            [
                'first_name' => 'Daan',
                'infix' => 'de',
                'last_name' => 'Boer',
                'email' => 'Daan@test.com',
                'phone_number' => '0625343553',
                'password' => 'P@ssw0rd',
                'role' => 'user',
            ],

        ];

        foreach($users as $user){
            $password = Hash::make($user['password']);
            $newAccount = User::firstOrCreate([
                'first_name' => $user['first_name'],
                'infix' => $user['infix'],
                'last_name' => $user['last_name'],
                'email' => $user['email'],
                'phone_number' => $user['phone_number'],
                'password' => $password
            ]);

            $newAccount->assignRole($user['role']);
        }
    }
}
