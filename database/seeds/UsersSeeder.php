<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name_prefix' => '',
                'first_name' => 'Supser Admin',
                'last_name' => '',
                'name_suffix' => '',
                'address_1' => 'Super admin address 1',
                'address_2' => 'Super admin address 2',
                'city' => '',
                'notes' => '',
                'phone' => '0777111111',
                'nic' => '111111v',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 1,
            ],
            [
                'name_prefix' => '',
                'first_name' => 'admin',
                'last_name' => '',
                'name_suffix' => '',
                'address_1' => 'Admin address 1',
                'address_2' => 'Admin address 2',
                'city' => '',
                'notes' => '',
                'phone' => '0777222222',
                'nic' => '222222v',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 1,
            ],
            [
                'name_prefix' => '',
                'first_name' => 'System User',
                'last_name' => '',
                'name_suffix' => '',
                'address_1' => 'System User address 1',
                'address_2' => 'System User address 2',
                'city' => '',
                'notes' => '',
                'phone' => '0777444444',
                'nic' => '444444v',
                'email' => 'systemuser@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 1,
            ],
            [
                'name_prefix' => 'Dr.',
                'first_name' => 'doctor',
                'last_name' => '',
                'name_suffix' => '',
                'address_1' => 'Doctor address 1',
                'address_2' => 'Doctor address 2',
                'city' => '',
                'notes' => '',
                'phone' => '0777555555',
                'nic' => '555555v',
                'email' => 'doctor@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 1,
            ],
            [
                'name_prefix' => '',
                'first_name' => 'patient',
                'last_name' => '',
                'name_suffix' => '',
                'address_1' => 'Patient address 1',
                'address_2' => 'Patient address 2',
                'city' => '',
                'notes' => '',
                'phone' => '0777666666',
                'nic' => '666666v',
                'email' => 'patient@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 1,
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name_prefix' => $user['name_prefix'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'name_suffix' => $user['name_suffix'],
                'address_1' => $user['address_1'],
                'address_2' => $user['address_2'],
                'city' => $user['city'],
                'notes' => $user['notes'],
                'phone' => $user['phone'],
                'nic' => $user['nic'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role'],
            ]);
        }
    }
}
