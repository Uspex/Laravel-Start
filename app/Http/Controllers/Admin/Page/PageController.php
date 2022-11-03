<?php

namespace App\Http\Controllers\Admin\Page;


use App\Http\Controllers\Controller;
use App\Http\Requests\Page\PageRequest;
use App\Models\Page;
use App\Repositories\PageRepository;
use App\Services\CommonServices;
use Carbon\Carbon;

/**
 * Страницы
 * Class PageController
 * @package App\Http\Controllers\Admin\Page
 */
class PageController extends Controller
{

    /**
     * @var PageRepository
     */
    private $pageRepository;

    public function __construct()
    {

        $this->pageRepository = app(PageRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->pageRepository->getPaginate(20);

        return view('admin.page.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Page();

        return view('admin.page.create',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageRequest $request)
    {
        $data = $request->all();

        $data['slug'] = CommonServices::getSlugItem($request, 'pages');

        $item = new Page($data);
        $item->save();

        CommonServices::createImage($request, $item,'page');

        if ($item) {
            return redirect()
                ->route('admin.page.index')
                ->with(['success' => trans('page.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('page.create.error')])
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
        $item = $this->pageRepository->getEdit($id);

        $this->checkItem($item);

        return view('admin.page.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PageRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(PageRequest $request, $id)
    {
        $item = $this->pageRepository->getEdit($id);

        $data = $request->all();
        $data['slug'] = CommonServices::getSlugItem($request, 'pages', $id);

        $result = $item->update($data);

        CommonServices::createImage($request, $item,'page');

        if ($result) {
            return redirect()
                ->route('admin.page.index')
                ->with(['success' => trans('page.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('page.update.error')])
                ->withInput();
        }

    }


    /**
     * Опубликуем
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function publish($id){

        $item = $this->pageRepository->getEdit($id);

        $this->checkItem($item);

        $item->published_at = Carbon::now();
        $result = $item->save();

        if ($result) {
            return redirect()
                ->route('admin.page.edit', $item->id)
                ->with(['success' => trans('page.publish.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('page.publish.error')])
                ->withInput();
        }

    }

    /**
     * Снять с публикации
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function notPublish($id){

        $item = $this->pageRepository->getEdit($id);

        $this->checkItem($item);

        $item->published_at = null;
        $result = $item->save();

        if ($result) {
            return redirect()
                ->route('admin.page.edit', $item->id)
                ->with(['success' => trans('page.no_publish.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('page.no_publish.error')])
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
        $item = $this->pageRepository->getEdit($id);

        $this->checkItem($item);

        if(file_exists(public_path($item->img))){
            unlink(public_path($item->img));
        }

        $result = $item->delete();

        if ($result) {
            return redirect()
                ->route('admin.page.index')
                ->with(['success' => trans('page.delete.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('page.delete.error')])
                ->withInput();
        }
    }

}
