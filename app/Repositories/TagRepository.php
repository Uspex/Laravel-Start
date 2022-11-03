<?php

namespace App\Repositories;

use App\Models\Tag as Model;

/**
 *  Class TagRepository
 *
 * @package App\Repositories
 *
 */
class TagRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     *  Детальная информация
     *
     * @param int|string $search
     * @param string $type
     * @return Model
     */
    public function getInfo($search, $type = 'slug')
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->when($type == 'id', function ($query) use ($search) {
                $query->where('id', $search);
            })
            ->when($type == 'slug', function ($query) use ($search) {
                $query->where('slug', $search);
            })
            ->first();

        return $result;
    }

    /**
     * Пагинация
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
            ->withCount(['posts'])
            ->orderBy('name', 'ASC')
            ->paginate($perPage);

        return $result;
    }

    /**
     * Выпадающий список
     *
     * @return
     */
    public function getList()
    {
        $columns = ['id', 'name'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('name')
            ->get();

        return $result;
    }

}
