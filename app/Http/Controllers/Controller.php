<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Проверим что есть контент для вывода
     * @param $item
     * @param $author
     */
    public function checkItem($item){

        if(!$item){
            abort(404);
        }
    }


    /**
     * Проверим правило и роль пользователя
     * @param string $permission
     * @return bool
     */
    public function checkPermissionUser($permission)
    {
        if(Auth::user()->hasRole('root')){
            return true;
        }

        if(!Auth::user()->hasPermission($permission)){
            abort(403);
        }
    }

}
