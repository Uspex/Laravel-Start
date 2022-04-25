<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Seeder
{
    private $user_list = [
        0 => [ 'name' => 'root', 'email' => 'root@root.com', 'password' => 'T6D0n6AffJKM', 'role' => 'root'],
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
