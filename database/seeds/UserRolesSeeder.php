<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    public function run()
    {
        $userRoles = [
            [
                'name' => 'super_admin',
                'label' => 'Super Admin',
                'description' => 'Super Admin role',
            ],
            [
                'name' => 'admin',
                'label' => 'Admin',
                'description' => 'Admin role',
            ],
            [
                'name' => 'system_user',
                'label' => 'System User',
                'description' => 'The person managin the system (data entry)',
            ],
            [
                'name' => 'doctor',
                'label' => 'Doctor',
                'description' => 'Doctor',
            ],
            [
                'name' => 'patient',
                'label' => 'Patient',
                'description' => 'patient',
            ],
        ];

        foreach ($userRoles as $userRole) {
            UserRole::create([
                'name' => $userRole['name'],
                'label' => $userRole['label'],
                'description' => $userRole['description'],
            ]);
        }
    }
}
