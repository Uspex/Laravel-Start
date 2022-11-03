<?php

namespace App\Repositories;

use App\Models\Post as Model;
use Illuminate\Support\Facades\DB;

/**
 *  Class PostRepository
 *
 * @package App\Repositories
 *
 */
class PostRepository extends CoreRepository
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
            ->with(['category'])
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
            ->with(['category'])
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
     * @param array|bool $filter
     * @param bool $published_at
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate($perPage, $filter = false, $published_at = true)
    {
        $columns = ['*'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->with(['category', 'tags'])
            ->when($filter, function ($query) use ($filter) {
                if(isset($filter['category']) AND $filter['category']){
                    $query->whereHas('category', function ( $query) use ($filter) {
                        $query->select(DB::raw(1));
                        $query->where('slug', '=', $filter['category']);
                    });
                }
                if(isset($filter['query'])){
                    $query->where('name',  'LIKE', '%'.$query.'%')
                        ->OrWhere('excerpt',  'LIKE', '%'.$query.'%')
                        ->OrWhere('description',  'LIKE', '%'.$query.'%');
                }
            })
            ->when($published_at, function ($query)  {
                $query->whereNotNull('published_at');
            })
            ->orderBy('id', 'desc')
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
