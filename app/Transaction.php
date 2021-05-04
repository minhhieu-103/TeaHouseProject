<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
    protected $guarded =[''];
    protected $status = [
      '1' => [
          'class' => 'default',
          'name' => 'Tiếp Nhận'
      ],
        '2' => [
            'class' => 'success',
            'name' => 'Đang vận chuyển'
        ],
        '3' => [
            'class' => 'info',
            'name' => 'Đã bàn giao'
        ],
        '-1' => [
            'class' => 'cancel',
            'name' => 'Tiếp Nhận'
        ]
    ];



    public function getStatus(){
        return Arr::get($this->status,$this->tst_status,"[N\A]");
    }
}
