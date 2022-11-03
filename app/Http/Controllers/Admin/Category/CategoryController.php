<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Services\CommonServices;

/**
 * Категории
 * Class CategoryController
 * @package App\Http\Controllers\Admin\Category
 */
class CategoryController extends Controller
{

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct()
    {

        $this->categoryRepository = app(CategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->categoryRepository->getPaginate(20);

        return view('admin.category.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Category();

        return view('admin.category.create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        $data['slug'] = CommonServices::getSlugItem($request, 'categories');

        $item = new Category($data);
        $item->save();

        CommonServices::createImage($request, $item,'category');

        if ($item) {
            return redirect()
                ->route('admin.category.index')
                ->with(['success' => trans('category.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('category.create.error')])
                ->withInput();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $item = $this->categoryRepository->getInfo($id, 'id');

        $this->checkItem($item);

        return view('admin.category.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(CategoryRequest $request, $id)
    {
        $item = $this->categoryRepository->getInfo($id, 'id');

        $data = $request->all();
        $data['slug'] = CommonServices::getSlugItem($request, 'categories', $id);

        $result = $item->update($data);

        CommonServices::createImage($request, $item,'category');

        if ($result) {
            return redirect()
                ->route('admin.category.index')
                ->with(['success' => trans('category.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('category.update.error')])
                ->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $item = $this->categoryRepository->getInfo($id, 'id');

        $this->checkItem($item);

        if(file_exists(public_path($item->img))){
            unlink(public_path($item->img));
        }

        $result = $item->delete();

        if ($result) {
            return redirect()
                ->route('admin.category.index')
                ->with(['success' => trans('category.delete.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('category.delete.error')])
                ->withInput();
        }
    }

}
