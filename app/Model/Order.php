<?php

namespace App\Model;
use App\Model\Payment;
use App\Model\Shipper;
use App\Model\OrderDetail;
use App\LoyalCustomer;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id', 'name','loyal_customers_id','total','created_at','status'
    ];
//, 'payment_date' , 'ship_date','order_date',
    public function orderdetails()
    {
        return $this->hasMany('App\Model\OrderDetail', 'orders_id');
    }
//    public function shippers()
//    {
//        return $this->belongsTo('App\Model\Shipper', 'shippers_id');
//    }
    public function loyalcustomer()
    {
        return $this->belongsTo('App\LoyalCustomer','loyal_customers_id');

    }

    public static function getInventory()
    {
        $arr = [1 => 'tiếp nhận', 2 => 'Đang vận chuyển', 3 => 'Đã bàn giao', -1 => 'Hủy'];
        return $arr;
    }
//    public function payments()
//    {
//        return $this->belongsTo('App\Model\Payment', 'payments_id');
//    }
}
