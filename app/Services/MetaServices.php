<?php

namespace App\Services;



use Illuminate\Support\Facades\Lang;

/**
 * Формирование Мета данные для сайта
 *      Title
 *      description
 *      keywords
 *      breadcrumbs
 *      page_title
 *
 */
class MetaServices
{
    protected $meta_type;
    protected $meta_data;

    protected $breadcrumbs;
    protected $page_title;
    protected $title;
    protected $description;
    protected $keywords;
    protected $meta_image;

    protected $page_number;




    /**
     *
     */


    public function __construct() {


    }


    /**
     * Формируем мета данные для страницы
     *
     * @param string $meta_type
     * @param array|bool $meta_data
     * @param int|bool $page_number
     * @return array
     */
    public function getMeta($meta_type, $meta_data = false, $page_number = false){

        $this->meta_type = $meta_type;
        $this->meta_data = $meta_data;
        $this->page_number = $page_number;

        return array(
            'breadcrumbs'   => $this->breadcrumbs(),
            'page_title'    => $this->getPageTitle(),
            'title'         => $this->getTitle(),
            'description'   => $this->getDescription(),
            'keywords'      => $this->getKeywords(),
            'image'         => $this->getImage(),
        );
    }

    /**
     * Заголовок для страницы
     *
     * @return string
     */
    private function getPageTitle(){

        $text = Lang::has($this->meta_type.'.meta_title')? trans($this->meta_type.'.meta_title') : trans('meta.page_title');

        if($this->page_title) {
            $text = $this->page_title;
        }

        if($this->page_number AND $this->page_number != 1){
            $text .= ' <span>'.$this->page_number.'</span>';
        }

        return $text;
    }

    /**
     * Заголовок
     *
     * @return string
     */
    private function getTitle(){

        $text = Lang::has($this->meta_type.'.meta_title')? trans($this->meta_type.'.meta_title') : trans('meta.title');

        if($this->title) {
            $text = $this->title;
        }

        if($this->page_number AND $this->page_number != 1){
            $text .= $this->page_number;
        }


        return $text;
    }



    /**
     * Описание
     * @return string
     */
    private function getDescription(){
        $text = Lang::has($this->meta_type.'.meta_description')? trans($this->meta_type.'.meta_description') : trans('meta.description');

        if($this->description) {
            $text = $this->description;
        }

        if($this->page_number AND $this->page_number != 1){
            $text .= $this->page_number;
        }

        return $text;
    }

    /**
     * Keywords
     * @return string
     */
    private function getKeywords(){
        $text = Lang::has($this->meta_type.'.meta_keywords')? trans($this->meta_type.'.meta_keywords') : trans('meta.keywords');

        if($this->keywords) {
            $text = $this->keywords;
        }

        return $text;
    }

    /**
     * image
     * @return string
     */
    private function getImage(){

        if($this->meta_image) {
            return $this->meta_image;
        }

        if(isset($this->meta_data['image'])) {
            return asset($this->meta_data['image']);
        } else {
            return asset('images/logo.png');
        }
    }

    /**
     * Хлебные крошки
     *
     * @return array
     */
    private function breadcrumbs(){

        switch ($this->meta_type){
            case 'homepage':
                return $this->breadcrumbsHomepage();

            case 'category':
                return $this->breadcrumbsCategory();

            case 'category_tag':
                return $this->breadcrumbsCategoryTag();

            case 'tag':
                return $this->breadcrumbsTag();

            case 'blog':
                return $this->breadcrumbsBlog();

            case 'post':
                return $this->breadcrumbsBlog();

            case 'page':
                return $this->breadcrumbsPage();

            default:
                return array();

        }

    }


    /**
     * Хлебные крошки для каталога
     *
     * @return mixed
     */
    private function breadcrumbsHomepage(){

        $result['homepage'] = array(
            'name' => trans('homepage.name'),
            'href' => route('homepage'),
        );

        $this->page_title = trans('homepage.meta_page_title');
        $this->title = trans('homepage.meta_title');
        $this->description = trans('homepage.meta_description');
        $this->keywords = trans('homepage.meta_keywords');
        $this->meta_image = asset('images/meta.jpg');

        return $result;

    }

    /**
     * Хлебные крошки для категории
     *
     * @return mixed
     */
    private function breadcrumbsCategory(){

        $result['catalog'] = array(
            'name' => trans('catalog.name'),
            'href' => route('catalog.index'),
        );

        $result['category'] = array(
            'name' => $this->meta_data['category'],
            'href' => null,
        );
        $meta_data['category'] = $result['category']['name'];


        $this->page_title = trans('category.meta_page_title',$meta_data);
        $this->title = trans('category.meta_title',$meta_data);
        $this->description = trans('category.meta_description',$meta_data);
        $this->keywords = trans('category.meta_keywords',$meta_data);

        return $result;

    }


    /**
     * Хлебные крошки для категории
     *
     * @return mixed
     */
    private function breadcrumbsCategoryTag(){

        $result['catalog'] = array(
            'name' => trans('catalog.name'),
            'href' => route('catalog.index'),
        );

        $result['category'] = array(
            'name' => $this->meta_data['category']['name'],
            'href' => route('catalog.category', $this->meta_data['category']['slug'])
        );

        $result['tag'] = array(
            'name' => $this->meta_data['tag']['name'],
            'href' => null,
        );

        $meta_data['category'] = $result['category']['name'];
        $meta_data['tag'] = $result['tag']['name'];


        $this->page_title = trans('category.tag.meta_page_title',$meta_data);
        $this->title = trans('category.tag.meta_title',$meta_data);
        $this->description = trans('category.tag.meta_description',$meta_data);
        $this->keywords = trans('category.tag.meta_keywords',$meta_data);

        return $result;

    }


    /**
     * Хлебные крошки для тега
     *
     * @return mixed
     */
    private function breadcrumbsTag(){

        $result['catalog'] = array(
            'name' => trans('catalog.name'),
            'href' => route('catalog.index'),
        );

        $result['tag'] = array(
            'name' => $this->meta_data['name'],
            'href' => null,
        );

        $meta_data = [
            'tag' => $result['tag']['name']
        ];

        $this->page_title = trans('tag.meta_page_title',$meta_data);
        $this->title = trans('tag.meta_title',$meta_data);
        $this->description = trans('tag.meta_description',$meta_data);
        $this->keywords = trans('tag.meta_keywords',$meta_data);

        return $result;

    }

    /**
     * Хлебные крошки для страницы Список статей блога
     *
     * @return mixed
     */
    private function breadcrumbsBlog(){

        $result['category'] = array(
            'name' => $this->meta_data['category'],
            'href' => $this->meta_data['category_slug'],
        );

        $result['blog'] = array(
            'name' => $this->meta_data['name'],
            'href' => null,
        );

        $meta_data['blog'] = $result['blog']['name'];

        $this->page_title = trans('blog.meta_page_title',$meta_data);
        $this->title = trans('blog.meta_title', $meta_data);
        $this->description = trans('blog.meta_description', $meta_data);
        $this->keywords = trans('blog.meta_keywords', $meta_data);

        return $result;

    }

    /**
     * Хлебные крошки для статических страниц
     *
     * @return mixed
     */
    private function breadcrumbsPage(){


        $result['page'] = array(
            'name' => $this->meta_data['name'],
            'href' => null,
        );

        $meta_data['page'] = $result['page']['name'];


        $this->page_title = trans('page.meta_page_title',$meta_data);
        $this->title = trans('page.meta_title', $meta_data);
        $this->description = trans('page.meta_description', $meta_data);
        $this->keywords = trans('page.meta_keywords', $meta_data);

        return $result;

    }
}
