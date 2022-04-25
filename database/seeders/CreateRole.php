<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class CreateRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $admin = new Role();
        $admin->name         = 'root';
        $admin->display_name = 'Root'; // optional
        $admin->description  = 'Позволят управлять всем сервисом'; // optional
        $admin->save();

        //manager
        $client = new Role();
        $client->name         = 'manager';
        $client->display_name = 'Manager'; // optional
        $client->description  = 'Менеджер'; // optional
        $client->save();
    }
}
