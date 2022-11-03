<?php

namespace App\Traits;



trait ArrayTrait
{
    /**
     * Вернем список элементов по ключу
     * @param array $array
     * @param string $key
     * @return array
     */
    public static function getArrayFilterKey($array, $key){

        $result = [];
        foreach ($array as $item){
            $result[] = $item[$key];
        }

        return $result;
    }

    /**
     * Оставим в массиве только нужны значения с ключами
     * @param array $array
     * @param array $keys
     * @return array
     */
    public static function getArrayOnlyKey($array, $keys){

        $result = [];

        if(count($array) == 0){
            return $result;
        }

        foreach ($array as $item_key => $item) {
            foreach ($keys as $key){
                $result[$item_key][$key] = $item[$key];
            }
        }

        return $result;
    }

    /**
     * Преобразуем массив в строку и получим его длину
     * @param $array
     * @param string $delimited
     * @return false|int|void
     */
    public static function getLengthArray($array, $delimited = ''){

        $string = '';
        foreach ($array as $item){
            $string = implode($delimited,$item);
        }

        return mb_strlen($string);
    }


    /**
     * Сортируем массив по значению
     *
     * @param array $array
     * @param string $key
     * @param string $sort
     * @return array
     */
    public static function getArraySortValue($array, $key, $sort = 'asc')
    {
        $sortArr = array();
        foreach ($array as $arr_key => $val) {
            $sortArr[$arr_key] = $val[$key];
        }

        array_multisort($sortArr, $array);

        return $array;
    }


}
