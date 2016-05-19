<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        Permission::truncate();
        DB::statement("SET foreign_key_checks=1");

        $default_permissions = [
            ['name' => 'can_view_console', 'label' => 'Can view admin console'],
            ['name' => 'can_add_server', 'label' => 'Can add new servers'],
            ['name' => 'can_edit_server', 'label' => 'Can edit existing servers'],
            ['name' => 'can_view_server', 'label' => 'Can view servers'],
            ['name' => 'can_add_application', 'label' => 'Can add new applications'],
            ['name' => 'can_edit_application', 'label' => 'Can edit existing applications'],
            ['name' => 'can_view_application', 'label' => 'Can view applications'],
        ];

        foreach ($default_permissions as $default_permission) {
            $permission        = new Permission;
            $permission->name  = $default_permission['name'];
            $permission->label = $default_permission['label'];

            $permission->save();
        }
    }
}
