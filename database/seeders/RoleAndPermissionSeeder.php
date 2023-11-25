<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.read']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.delete']);

        // Create Admin Role and assign permission.
        $adminRole = Role::create(['name' => 'admin']);

        $adminRole->givePermissionTo([
            'users.create',
            'users.read',
            'users.update',
            'users.delete',
        ]);

        $adminUser = User::find(1);

        $adminUser->assignRole('admin');

        // Create Student Role and assign permission.
        $studentRole = Role::create(['name' => 'Student']);

        $studentRole->givePermissionTo('users.read');

        $studentUser = User::where('id', '!=', 1)->get();

        foreach ($studentUser as $user) {
            $user->assignRole('Student');
        }

    }
}
