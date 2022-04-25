<?php

namespace App\Repositories;

use App\Models\Role as Model;

/**
 *  Class RoleRepository
 *
 * @package App\Repositories
 *
 */
class RoleRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     *  Получаем модель для редактирования в админке
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
            ->with(['users'])
            ->find($id);

        return $result;
    }


    /**
     * Список Ролей с пагинацией
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

    /**
     * Получаем список Ролей для выпадающего списка
     *
     * @return Collection
     */
    public function getList()
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('name')
            ->toBase()
            ->get();

        return $result;

    }

}
