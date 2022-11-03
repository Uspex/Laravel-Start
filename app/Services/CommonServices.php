<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

/**
 * Общие методы
 * Class CommonServices
 * @package App\Services
 */
class CommonServices
{


    public function __construct() {

    }

    /**
     * Создадим slug и проверим на уникальность
     * @param $request
     * @param string$table_name
     * @param integer|bool $id
     * @return mixed|string
     * @throws \Illuminate\Validation\ValidationException
     */
    public static function getSlugItem($request, $table_name, $id = false){

        if($request['slug'] == ''){
            $request['slug'] = Str::slug($request['name'], '-');
        }

        if($id){
            $request->validate([
                'slug' => ['unique:'.$table_name.',slug,'.$id],
            ]);
        } else {
            $request->validate([
                'slug' => ['unique:'.$table_name.',slug'],
            ]);
        }


        return $request['slug'];
    }

    /**
     * Создание изображения
     *
     * @param $request
     * @param Collection $item
     * @param string $type_name
     * @param int $width
     * @param int|null $height
     * @return mixed
     */
    public static function createImage( $request, $item, $type_name, $width = 600, $height = null){

        if($request->hasFile('img')){
            $file_name = $item->id.'.'.$request->file('img')->getClientOriginalExtension();
            $request->file('img')->storeAs('', $file_name, $type_name);

            $full_path = public_path(Storage::disk($type_name)->url($file_name));

            Image::make($full_path)->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            })->save($full_path, 60);

            return $item->update(array(
                'img' => Storage::disk($type_name)->url($file_name)
            ));
        }
    }



}
