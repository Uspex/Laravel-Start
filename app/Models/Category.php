<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'img', 'excerpt', 'description', 'seo_title', 'seo_description', 'seo_keywords'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    /**
     * Добавляем временную метку для фото или выводим пустое фото
     * @return string
     */
    public function getImgViewAttribute()
    {
        if($this->img){
            return  $this->img . '?'.Carbon::parse($this->updated_at)->timestamp;
        } else {
            return 'images/no_photo.jpg';
        }
    }
}
