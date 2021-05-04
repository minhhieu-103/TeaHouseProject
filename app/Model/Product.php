<?php

namespace App\Model;
use App\Model\Category;
use App\Model\OrderDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id', 'name', 'price','status', 'desc', 'image','quantity', 'categories_id','create_at',
    ];
    protected $casts = [
        'status' => 'boolean',
        '_status' => 'boolean',
    ];
    /**
     * @var mixed
     */
    private $name;
    /**
     * @var mixed
     */
    private $price;
    /**
     * @var mixed
     */
    private $image;
    /**
     * @var mixed
     */
    private $id;

    public function orderdetails()
    {
        return $this->hasMany('App\Model\OrderDetail', 'product_id');

    }

    public function categories()
    {
        return $this->belongsTo('App\Model\Category', 'categories_id');

    }
}
