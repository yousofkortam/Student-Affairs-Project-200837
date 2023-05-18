<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'role_name' => 'Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Create the admin user
        User::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'phone_number' => '123456789',
            'address' => 'Admin Address',
            'date_of_birth' => Carbon::now(),
            'role_id' => $adminRole->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
