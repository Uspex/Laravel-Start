<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Models\Post;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Services\CommonServices;
use Carbon\Carbon;
use Illuminate\Http\Request;


/**
 * Посты
 * Class PostController
 * @package App\Http\Controllers\Admin\Post
 */
class PostController extends Controller
{

    /**
     * @var CategoryRepository
     * @var TagRepository
     * @var PostRepository
     */
    private $categoryRepository;
    private $tagRepository;
    private $postRepository;

    public function __construct()
    {

        $this->categoryRepository = app(CategoryRepository::class);
        $this->tagRepository = app(TagRepository::class);
        $this->postRepository = app(PostRepository::class);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->postRepository->getPaginate(20, false, false);

        return view('admin.post.index', compact('paginator'));
    }

    public function search(Request $request){

        $query = $request->input('query');

        $paginator = $this->postRepository->getPaginate(20, ['query' => $query], false);

        return view('admin.post.index', compact('paginator', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $item = new Post();

        $category_list = $this->categoryRepository->getList();
        $tag_list = $this->tagRepository->getList();

        return view('admin.post.create',compact('item', 'category_list', 'tag_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(PostRequest $request)
    {
        $data = $request->all();

        $data['slug'] = CommonServices::getSlugItem($request, 'posts');

        $item = new Post($data);
        $item->save();

        $item->tags()->sync($data['tags']);

        CommonServices::createImage($request, $item,'post');

        if ($item) {
            return redirect()
                ->route('admin.post.index')
                ->with(['success' => trans('post.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('post.create.error')])
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
        $item = $this->postRepository->getEdit($id);

        $this->checkItem($item);

        $category_list = $this->categoryRepository->getList();
        $tag_list = $this->tagRepository->getList();

        return view('admin.post.edit', compact('item', 'category_list', 'tag_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(PostRequest $request, $id)
    {
        $item = $this->postRepository->getEdit($id);

        $this->checkItem($item);

        $data = $request->all();

        $data['slug'] = CommonServices::getSlugItem($request, 'posts', $id);
        $item->tags()->sync($data['tags']);

        $result = $item->update($data);

        CommonServices::createImage($request, $item,'post');

        if ($result) {
            return redirect()
                ->route('admin.post.edit', $item->id)
                ->with(['success' => trans('post.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('post.update.error')])
                ->withInput();
        }

    }

    /**
     * Опубликуем
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function publish($id){

        $item = $this->postRepository->getEdit($id);

        $this->checkItem($item);

        $item->published_at = Carbon::now();
        $result = $item->save();

        if ($result) {
            return redirect()
                ->route('admin.post.edit', $item->id)
                ->with(['success' => trans('post.publish.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('post.publish.error')])
                ->withInput();
        }

    }

    /**
     * Снять с публикации
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function notPublish($id){

        $item = $this->postRepository->getEdit($id);

        $this->checkItem($item);

        $item->published_at = null;
        $result = $item->save();

        if ($result) {
            return redirect()
                ->route('admin.post.edit', $item->id)
                ->with(['success' => trans('post.no_publish.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('post.no_publish.error')])
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
        $item = $this->postRepository->getEdit($id);

        $this->checkItem($item);

        if(file_exists(public_path($item->img))){
            unlink(public_path($item->img));
        }

        $result = $item->delete();

        if ($result) {
            return redirect()
                ->route('admin.post.index')
                ->with(['success' => trans('post.delete.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('post.delete.error')])
                ->withInput();
        }
    }
}
