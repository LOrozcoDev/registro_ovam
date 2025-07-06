<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create([
            'name' => 'Admin',
        ]);
        $role_sensei = Role::create([
            'name' => 'Instructor',
        ]);
        $role_organizer = Role::create([
            'name' => 'Organizer',
        ]);
        $role_student = Role::create([
            'name' => 'Student',
        ]);

        Permission::create(['name' => 'dashboard'])->syncRoles([$role_admin, $role_sensei, $role_organizer, $role_student]);
        /* Usuarios */
        Permission::create(['name' => 'user.index'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'user.create'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'user.store'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'user.update'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        /* Academias */
        Permission::create(['name' => 'academy.index'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'academy.create'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'academy.store'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'academy.edit'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'academy.update'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'academy.destroy'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        /* Organization */
        Permission::create(['name' => 'organization.index'])->syncRoles([$role_admin, $role_sensei, $role_organizer]);
        Permission::create(['name' => 'organization.create'])->syncRoles([$role_admin, $role_organizer]);
        Permission::create(['name' => 'organization.store'])->syncRoles([$role_admin, $role_organizer]);
        Permission::create(['name' => 'organization.edit'])->syncRoles([$role_admin, $role_organizer]);
        Permission::create(['name' => 'organization.update'])->syncRoles([$role_admin, $role_organizer]);
        Permission::create(['name' => 'organization.destroy'])->syncRoles([$role_admin, $role_organizer]);
        /* Martial Styles */
        Permission::create(['name' => 'martial.index'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'martial.create'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'martial.store'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'martial.edit'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'martial.update'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'martial.destroy'])->syncRoles([$role_admin]);
        /* Rank */
        Permission::create(['name' => 'rank.index'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'rank.create'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'rank.store'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'rank.edit'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'rank.update'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'rank.destroy'])->syncRoles([$role_admin]);
    }
}
