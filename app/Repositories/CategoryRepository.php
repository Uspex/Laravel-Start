<?php

namespace App\Repositories;

use App\Models\Category as Model;
use Illuminate\Support\Facades\DB;

/**
 *  Class CategoryRepository
 *
 * @package App\Repositories
 *
 */
class CategoryRepository extends CoreRepository
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
//            ->with(['tags' => function($query){
//                $query->whereHas('posts', function ( $query)  {
//                    $query->select(DB::raw(1));
//                    $query->whereNotNull('published_at');
//                });
//            }])

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
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('name')
            ->get();

        return $result;
    }

}
