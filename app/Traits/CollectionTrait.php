<?php

namespace App\Traits;


use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Collection;

trait CollectionTrait
{

    /*
    |--------------------------------------------------------------------------
    | Sort
    |--------------------------------------------------------------------------
    |
    */
    /**
     * Сортируем коллекцию по массиву
     *
     * @param $collection
     * @param $sort
     * @param string $key
     * @return array
     */
    public static function getCollectionSort($collection, $sort, $key = 'id'){

        return $collection->sortBy(function ($item) use ($sort, $key) {
            return array_search($item->$key, $sort);
        })->values();
    }

    /**
     * Сортируем коллекцию по длине строки
     *
     * @param $collection
     * @param $sort
     * @param string $key
     * @return array
     */
    public static function getCollectionSortLength($collection, $key = 'name', $sort = 'asc'){

        $result = $collection->sortBy($key)->sortBy(function ($item) use ($sort, $key) {
                        return mb_strlen($item->$key);
                    })->values();
        return $result;
    }

    /*
    |--------------------------------------------------------------------------
    | Transform
    |--------------------------------------------------------------------------
    |
    */


    /**
     * Преобразуем элементы коллеции в строку с разделителем
     *
     * @param Collection $collection
     * @param string $key
     * @param string $delimiter
     * @return string
     */
    public static function getCollectionTransformString($collection, $key = 'name', $delimiter = ', '){

        $result = $collection->toArray();
        $result = Arr::pluck($result, $key);
        $result = implode($delimiter, $result);

        return $result;
    }

}
