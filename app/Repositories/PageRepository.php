<?php

namespace App\Repositories;

use App\Models\Page as Model;
use Illuminate\Support\Facades\DB;

/**
 *  Class PageRepository
 *
 * @package App\Repositories
 *
 */
class PageRepository extends CoreRepository
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
     * @param int$id
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
     *  Детальная информация
     *
     * @param string $slug
     * @param bool $published_at
     * @return Model
     */
    public function getInfo($slug, $published_at = true)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->where('slug', $slug)
            ->when($published_at, function ($query)  {
                $query->whereNotNull('published_at');
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
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('name')
            ->get();

        return $result;
    }

}
