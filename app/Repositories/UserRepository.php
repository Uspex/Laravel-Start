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
            ->withTrashed()
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
            ->withTrashed()
            ->paginate($perPage);

        return $result;
    }

    /**
     * Получаем список
     *
     * @return Collection
     */
    public function getList()
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->withTrashed()
            ->orderBy('name')
            ->get();

        return $result;
    }
}
