<?php

namespace App\Model;
use App\Model\Product;
use App\Model\Order;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = [
        'id', 'quantity','orders_id','product_id','price','created_at'
    ];
    public function orders()
    {
        return $this->hasMany('App\Model\Order', 'orders_id');
    }
    public function products()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}
