<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name'=>'Admin']);
       $role2 = Role::create(['name'=>'User1']);

       Permission::create(['name' => 'home'])->syncRoles([$role1,$role2]);

       Permission::create(['name' => 'user.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'user.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'user.update'])->syncRoles([$role1]);

       Permission::create(['name' => 'categoria.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'categoria.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'categoria.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'categoria.destroy'])->syncRoles([$role1]);

       Permission::create(['name' => 'linea.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'linea.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'linea.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'linea.destroy'])->syncRoles([$role1]);

       Permission::create(['name' => 'producto.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'producto.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'producto.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'producto.destroy'])->syncRoles([$role1]);
    }
}
