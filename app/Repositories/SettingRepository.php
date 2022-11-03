<?php

namespace App\Repositories;

use App\Models\Setting as Model;

/**
 *  Class SettingRepository
 *
 * @package App\Repositories
 *
 */
class SettingRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     *  Получаем модель для редактирования
     *
     * @param string $type
     *
     * @return Model
     */
    public function getEdit($type)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->where('type', $type)
            ->first();

        return $result;
    }

    /**
     *  Получаем настройки для вывода
     *
     * @param string $type
     *
     * @return Model
     */
    public function getInfo($type)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->where('type', $type)
            ->first();

        if(!$result){
            return null;
        }

        return $result->setting;
    }

    /**
     *  Получаем Список
     *
     * @param string $type
     * @param string|bool $key - позволяет получить более точные настройки
     *
     * @return Model
     */
    public function getList($type, $key = false)
    {
        $columns = ['setting'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->where('type', $type)
            ->first();


        if($key){
            if(isset($result['setting'][$key])){
                return $result['setting'][$key];
            } else {
                return null;
            }
        }
        return $result;
    }

}
