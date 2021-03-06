<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    protected $roles = ['Guest', 'Admin'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles as $role) {
            Role::updateOrCreate([
                'slug' => \Str::slug($role),
                'name' => $role
            ]);
        };
    }
}
