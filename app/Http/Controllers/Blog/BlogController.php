<?php

namespace App\Http\Controllers\Blog;


use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Services\MetaServices;

/**
 * Блог
 * Class BlogController
 * @package App\Http\Controllers\Blog
 */
class BlogController extends Controller
{

    /**
     * @var PostRepository
     * @var CategoryRepository
     * @var TagRepository
     * @var MetaServices
     */
    private $postRepository;
    private $categoryRepository;
    private $tagRepository;
    private $meta;

    public function __construct()
    {

        $this->postRepository = app(PostRepository::class);
        $this->categoryRepository = app(CategoryRepository::class);
        $this->tagRepository = app(TagRepository::class);
        $this->meta = app(MetaServices::class);
    }

    /**
     * Статическая страница
     *
     * @param string|bool $category_slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($category_slug = false)
    {
        $category = $this->categoryRepository->getInfo($category_slug);

        $paginator = $this->postRepository->getPaginate(20, ['category' => $category_slug]);

        $meta = $this->meta->getMeta('blog_list', ['category' => $category]);

        return view('blog.index', compact('paginator', 'meta'));
    }

    /**
     * Статическая страница
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {

        $item = $this->postRepository->getInfo($slug, true);

        $this->checkItem($item);

        $meta = $this->meta->getMeta('post', ['name' => $item->name, 'category' => $item->category->name, 'category_slug' => $item->category->slug]);


        return view('blog.show', compact('item', 'meta'));
    }
}
