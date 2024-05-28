<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminSeedUsers = [
            [
                'name' => 'Ad Ministrator',
                'email' => 'ad.ministrator@example.com',
                'password' => 'SecretPassword1',
                'roles' => ['admin', 'member', 'staff'],
            ],
            [
                'name' => 'Adrian Gould',
                'email' => 'adrian.gould@nmtafe.wa.edu.au',
                'password' => 'SecretPassword1',
                'roles' => ['admin', 'member', 'staff'],
            ],
            [
                'name' => 'STUDENT_GIVEN_NAME',
                'email' => 'STUDENT_GIVEN_NAME@example.com',
                'password' => 'SecretPassword1',
                'roles' => ['admin', 'staff', 'member'],
            ],
        ];
        // seed the "admin" users with verified emails
        $this->seedUsers($adminSeedUsers, false);

        $verifiedStaffSeedUsers = [
            [
                'name' => 'Annie Wun',
                'email' => 'annie.wun@example.com',
                'password' => 'Password1',
                'roles' => ['staff', 'member'],
            ],
            [
                'name' => 'Andy Mann',
                'email' => 'andy.mann@example.com',
                'password' => 'Password1',
                'roles' => ['staff', 'member'],
            ],
        ];

        // Seed the "staff" users with verified emails
        $this->seedUsers($verifiedStaffSeedUsers, true);

        $unverifiedSeedUsers = [
            [
                'name' => "Ivanna Vinn",
                'email' => 'ivanna.vinn@example.com',
                'roles' => ['member'],
            ],
            [
                'name' => "Russ Hin-Round",
                'email' => 'russ.hin-around@example.com',
                'roles' => ['member'],
            ],
            [
                'name' => "Chip Buttie",
                'email' => 'chip.buttie@example.com',
                'roles' => ['member'],
            ],
            [
                "name" => "April Schauer",
                "email" => "April.Schauer@example.com",
                'roles' => ['member'],
            ],
            [
                "name" => "Al K. Seltzer",
                "email" => "Al.K.Seltzer@example.com",
                'roles' => ['member'],
            ],
            [
                "name" => "Dee Sember",
                "email" => "Dee.Sember@example.com",
                'roles' => ['member'],
            ],
            [
                "name" => "Jo Kerr",
                "email" => "Jo.Kerr@example.com",
                'roles' => ['member'],
            ],
            [
                "name" => "Izzy Kidding",
                "email" => "Izzy.Kidding@example.com",
                'roles' => ['member'],
            ],
        ];
        // Seed the users with unverified emails
        $this->seedUsers($unverifiedSeedUsers, true);
    }

    private function seedUsers($listOfSeedUsers = [], $unverified = false): void
    {
        foreach ($listOfSeedUsers as $newUser) {
            //$newUser['password'] = Hash::make($newUser['password']);
            $data = [
                'name' => $newUser['name'],
                'email' => $newUser['email'],
                'password' => $newUser['password'] ?? null,
            ];
            if (is_null($data['password'])) {
                unset($data['password']);
            }
            $user = User::factory()
                ->unverified($unverified)
                ->create($data);

            //            foreach ($newUser['roles'] as $role) {
            //                $newRole = Role::whereName($role)->first();
            //                if (!is_null($newRole)) {
            //                    $permissions = Permission::pluck('id', 'id')->all();
            //                    $newRole->syncPermissions($permissions);
            //                    $user->assignRole([$newRole->id]);
            //                }
            //            }
        }
    }
}
