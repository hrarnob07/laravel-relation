<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable =['name','description','status','price','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }


}
