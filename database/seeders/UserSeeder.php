<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ----------------------
        // Admin User
        // ----------------------
        $admin = User::firstOrCreate(
            ['email' => 'admin@lms.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('12345678'), // you can change this
            ]
        );
        $admin->assignRole('admin');

        // ----------------------
        // Teacher User
        // ----------------------
        $teacher = User::firstOrCreate(
            ['email' => 'teacher@lms.com'],
            [
                'name' => 'John Teacher',
                'password' => Hash::make('12345678'),
            ]
        );
        $teacher->assignRole('teacher');

        // ----------------------
        // Student User
        // ----------------------
        $student = User::firstOrCreate(
            ['email' => 'student@lms.com'],
            [
                'name' => 'Jane Student',
                'password' => Hash::make('12345678'),
            ]
        );
        $student->assignRole('student');
    }
}

