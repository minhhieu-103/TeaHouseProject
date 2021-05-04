<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{

    protected $table = 'shippers';
    protected $fillable = [
        'id', 'name', 'email', 'phone' , 'address',
    ];
//    public function orders()
//    {
//        return $this->hasMany('App\Model\Order', 'customers_id');
//    }
}
