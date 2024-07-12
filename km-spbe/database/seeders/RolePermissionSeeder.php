<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Buat role
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleVerifikator = Role::create(['name' => 'verifikator']);
        $roleAuthor = Role::create(['name' => 'author']);

         // Buat permission
        $permissions = [
            'create_post',
            'edit_post',
            'delete_post_unverify',
            'delete_post_verify',
            'verification_post',
            'data_user',
            'kelola_role',
            'log'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

         // Assign permissions to roles
        $roleAdmin->givePermissionTo(Permission::all());
        $roleVerifikator->givePermissionTo(['verification_post', 'data_user', 'delete_post_verify']);
        $roleAuthor->givePermissionTo(['create_post', 'edit_post', 'delete_post_unverify',]);

        // Buat user dan assign roles
        $userAdmin = User::create([
            'name' => 'Admin',
            'opd_id' => '1',
            'nip' => '123',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);
        $userAdmin->assignRole($roleAdmin);

        // Assign role author ke semua user yang ada di tabel users
        $users = User::all();
        foreach ($users as $user) {
            if (!$user->hasRole($roleAdmin)) {
                $user->assignRole($roleAuthor);
            }
        }
    }
}
