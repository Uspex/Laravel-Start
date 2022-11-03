<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Seeder
{
    private $user_list = [
        0 => [ 'name' => 'root', 'email' => 'root@root.com', 'password' => 'uV9Y3zY0nAxf', 'role' => 'root'],
        1 => [ 'name' => 'root', 'email' => 'client@client.com', 'password' => 'CMLio1N6N2m9', 'role' => 'client'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->user_list as $user){
            if(!User::where('email', $user['email'])->exists()){
                $new_user = User::create([
                    'name'  => $user['name'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                ]);

                $role = Role::where('name',$user['role'])->first();
                if($role){
                    $new_user->attachRole($role);
                }
            }
        }
    }
}
