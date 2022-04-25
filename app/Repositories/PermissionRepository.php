<?php

namespace App\Repositories;

use App\Models\Permission as Model;

/**
 *  Class PermissionRepository
 *
 * @package App\Repositories
 *
 */
class PermissionRepository extends CoreRepository
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
            ->find($id);

        return $result;
    }


    /**
     * Список Правил с пагинацией
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
            ->orderBy('group', 'asc')
            ->orderBy('name', 'asc')
            ->paginate($perPage);
        return $result;
    }

    /**
     * Получаем список для выпадающего списка
     *
     * @return Collection
     */
    public function getList()
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('name', 'asc')
            ->get();

        return $result;

    }

    /**
     * Получаем список правил для настроек доступа
     *
     * @param $search
     * @return Collection
     */
    public function getListItem($search)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->whereIn('name', $search)
            ->get();

        return $result;

    }

}
