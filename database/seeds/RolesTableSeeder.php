<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin'      => [
                'can_view_console',
                'can_add_server',
                'can_view_server',
                'can_edit_server',
                'can_add_application',
                'can_edit_application',
                'can_view_application',
            ],
            'technician' => [
                'can_view_console',
                'can_add_server',
                'can_view_server',
                'can_edit_server',
                'can_add_application',
                'can_edit_application',
                'can_view_application',
            ],
            'user'       => [
                'can_view_console',
                'can_view_server',
                'can_view_application',
            ],
        ];

        DB::statement("SET foreign_key_checks=0");
        Role::truncate();
        DB::table('permission_role')->truncate();
        DB::statement("SET foreign_key_checks=1");

        $default_roles = [
            ['name' => 'admin', 'label' => 'Administrator'],
            ['name' => 'technician', 'label' => 'Technician'],
            ['name' => 'user', 'label' => 'User'],
        ];

        foreach ($default_roles as $default_role) {
            $role        = new Role;
            $role->name  = $default_role['name'];
            $role->label = $default_role['label'];
            $role->save();

            foreach ($permissions[$default_role['name']] as $permission) {
                $role->givePermissionTo($permission);
            }
        }
    }
}
