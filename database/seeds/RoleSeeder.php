<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    protected $roles = [
        [
            'role_name' => 'Administrator',
            'role_code' => 'Admin'
        ],
        [
            'role_name' => 'Supervisor',
            'role_code' => 'Super'
        ],
        [
            'role_name' => 'clerk',
            'role_code' => 'clerk'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Role::truncate();

        foreach ( $this->roles as $role){
            $rol = new Role($role);
            $rol->save();
        }
    }
}
