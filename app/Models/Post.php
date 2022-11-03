<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'name', 'slug', 'img', 'excerpt', 'description', 'published_at', 'seo_title', 'seo_description', 'seo_keywords', 'setting'
    ];


    protected $casts = [
        'setting' => 'array',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, TagPost::class,'post_id','tag_id');
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
