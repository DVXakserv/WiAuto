<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'category_id',
        'brand_id',
        'product_id',
        'product_name',
        'product_short_description',
        'product_long_description',
        'price',
        'product_model',
        'description',
        'image',
    ];

    protected $dates =['deleted_at'];


    public static function image($fileName,$category){
        if(request()->hasfile($fileName))
        {
            $file = request()->file($fileName);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/products/', $filename);
            $category->image = $filename;
        }

    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }  
}
