<?php

namespace App\Model;
use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'id', 'name',
    ];
    public function products()
    {
        return $this->hasMany('App\Model\Product', 'categories_id');
    }
}
