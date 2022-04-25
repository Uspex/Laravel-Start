<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{

    private $list_permission = [
        ['name'=>'list_permission', 'display_name' => 'Список правил', 'description' => '', 'group' => 'permission'],
        ['name'=>'create_permission', 'display_name' => 'Создание правила', 'description' => '', 'group' => 'permission'],
        ['name'=>'edit_permission', 'display_name' => 'Редактирование правила', 'description' => '', 'group' => 'permission'],
        ['name'=>'show_permission', 'display_name' => 'Просмотреть правила', 'description' => '', 'group' => 'permission'],
        ['name'=>'delete_permission', 'display_name' => 'Удаление правила', 'description' => '', 'group' => 'permission'],

        ['name'=>'list_role', 'display_name' => 'Список ролей', 'description' => '', 'group' => 'role'],
        ['name'=>'create_role', 'display_name' => 'Создание роли', 'description' => '', 'group' => 'role'],
        ['name'=>'edit_role', 'display_name' => 'Редактирование роли', 'description' => '', 'group' => 'role'],
        ['name'=>'show_role', 'display_name' => 'Просмотреть роли', 'description' => '', 'group' => 'role'],
        ['name'=>'delete_role', 'display_name' => 'Удаление роли', 'description' => '', 'group' => 'role'],

        ['name'=>'list_user', 'display_name' => 'Список пользователей', 'description' => '', 'group' => 'user'],
        ['name'=>'create_user', 'display_name' => 'Создание нового пользователя', 'description' => '', 'group' => 'user'],
        ['name'=>'edit_user', 'display_name' => 'Редактирование пользователя', 'description' => '', 'group' => 'user'],
        ['name'=>'edit_profile', 'display_name' => 'Редактирование личного профиля', 'description' => '', 'group' => 'user'],
        ['name'=>'show_user', 'display_name' => 'Просмотреть данные пользователя', 'description' => '', 'group' => 'user'],
        ['name'=>'delete_user', 'display_name' => 'Удаление пользователя', 'description' => '', 'group' => 'user'],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->list_permission as $permission) {
            $item = new Permission($permission);
            $item->save();
        }


    }
}
