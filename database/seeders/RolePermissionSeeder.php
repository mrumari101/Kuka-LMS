<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cached permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // ----------------------
        // Create Permissions
        // ----------------------
        $permissions = [
            'manage disciplines',
            'manage levels',
            'manage chapters',
            'manage topics',
            'view dashboard',
            'view courses',       // example for teacher/student
            'enroll courses',     // student only
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // ----------------------
        // Create Roles
        // ----------------------
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $teacher = Role::firstOrCreate(['name' => 'teacher']);
        $student = Role::firstOrCreate(['name' => 'student']);

        // ----------------------
        // Assign Permissions to Roles
        // ----------------------
        // Admin: everything
        $admin->syncPermissions(Permission::all());

        // Teacher: only course & dashboard related
        $teacher->syncPermissions([
            'view dashboard',
            'view courses',
        ]);

        // Student: limited
        $student->syncPermissions([
            'view dashboard',
            'view courses',
            'enroll courses',
        ]);
    }
}



//namespace Database\Seeders;
//use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;
//use Spatie\Permission\PermissionRegistrar;
//
//class RolePermissionSeeder extends Seeder
//{
//    public function run(): void
//    {
//        app()[PermissionRegistrar::class]->forgetCachedPermissions();
//
//        // Permissions
//        Permission::create(['name' => 'manage disciplines']);
//        Permission::create(['name' => 'manage levels']);
//        Permission::create(['name' => 'manage chapters']);
//        Permission::create(['name' => 'manage topics']);
//
//        // Roles
//        $admin = Role::create(['name' => 'admin']);
//        $teacher = Role::create(['name' => 'teacher']);
//        $student = Role::create(['name' => 'student']);
//
//        // Assign permissions
//        $admin->givePermissionTo(Permission::all());
//    }
//}
//
