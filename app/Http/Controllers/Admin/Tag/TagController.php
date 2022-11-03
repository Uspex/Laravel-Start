<?php

namespace App\Http\Controllers\Admin\Tag;


use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagRequest;
use App\Models\Tag;
use App\Repositories\TagRepository;
use App\Services\CommonServices;

/**
 * Теги для сайтов
 * Class TagController
 * @package App\Http\Controllers\Admin\Tag
 */
class TagController extends Controller
{

    /**
     * @var TagRepository
     */
    private $tagRepository;

    public function __construct()
    {

        $this->tagRepository = app(TagRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->tagRepository->getPaginate(20);

        return view('admin.tag.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Tag();

        return view('admin.tag.create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TagRequest $request)
    {
        $data = $request->all();

        $data['slug'] = CommonServices::getSlugItem($request, 'tags');

        $item = new Tag($data);
        $item->save();

        CommonServices::createImage($request, $item,'tags');

        if ($item) {
            return redirect()
                ->route('admin.tag.index')
                ->with(['success' => trans('tag.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('tag.create.error')])
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
        $item = $this->tagRepository->getInfo($id, 'id');

        $this->checkItem($item);

        return view('admin.tag.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TagRequest $request, $id)
    {
        $item = $this->tagRepository->getInfo($id, 'id');

        $data = $request->all();
        $data['slug'] = CommonServices::getSlugItem($request, 'tags', $id);

        $result = $item->update($data);

        CommonServices::createImage($request, $item,'tags');

        if ($result) {
            return redirect()
                ->route('admin.tag.index')
                ->with(['success' => trans('tag.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('tag.update.error')])
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
        $item = $this->tagRepository->getInfo($id, 'id');

        $this->checkItem($item);

        if(file_exists(public_path($item->img))){
            unlink(public_path($item->img));
        }

        $result = $item->delete();

        if ($result) {
            return redirect()
                ->route('admin.tag.index')
                ->with(['success' => trans('tag.delete.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('tag.delete.error')])
                ->withInput();
        }
    }
}
