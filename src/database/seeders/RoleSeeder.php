<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Role::count() > 0) {
            return;
        }
        $roles =[
            ['role_name' => 'admin'],
            ['role_name' => 'user'],
            ['role_name' => 'artist']
        ];
       
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
