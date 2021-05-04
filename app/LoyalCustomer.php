<?php

namespace App;
use App\Model\Order;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoyalCustomer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'loyal_customers';
    protected $fillable = [
        'email', 'password', 'address','phone', 'name','id'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'loyal_customers_id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
