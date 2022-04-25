<?php

namespace App\Repositories;

use App\Models\User as Model;

/**
 *  Class UserRepository
 *
 * @package App\Repositories
 *
 */
class UserRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     *  Получаем запись по id
     *
     * @param int $id
     *
     * @return Model
     */
    public function getEdit($id)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->find($id);

        return $result;
    }


    /**
     * Список с пагинацией
     *
     * @param int|null $perPage
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate($perPage)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->paginate($perPage);

        return $result;
    }

}
