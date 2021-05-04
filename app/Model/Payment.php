<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'id', 'type', 'allowed'
    ];
    public function order()
    {
        return $this->hasOne('App\Model\Order', 'payments_id');
    }
}
