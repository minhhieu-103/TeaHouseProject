<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cart
{
    public $carts = [];

    public function __construct(){
        $oldCart = \Session::has('cart') ? \Session::get('cart') : [];
        $this->carts = $oldCart;
    }

    public function getCart(){
        return $this->carts;
    }

    public function addItem($product){
        $id = $product->id;
        if (!isset($this->carts[$id])){
            $this->carts[$id] = ['item' => $product, 'qty' => 1];
        }else{
            $this->carts[$id]['qty']+= 1;
        }
        \Session::put('cart', $this->carts);
    }
    public function addManyItems($product, $qty){
        $id = $product->id;
        if (!isset($this->carts[$id])){
            $this->carts[$id] = ['item' => $product, 'qty' => $qty];
        }else{
            $this->carts[$id]['qty'] += $qty;
        }
        \Session::put('cart', $this->carts);
    }
    public function deleteItem($id){
        $this->carts[$id]['qty']--;
        if ($this->carts[$id]['qty']<= 0){
            unset($this->carts[$id]);
        }
        if (empty($this->carts)){
            \Session::forget('cart');
        }else{
            \Session::put('cart', $this->carts);
        }
    }
    public function removeItem($id){
        unset($this->carts[$id]);
        if (empty($this->carts)){
            \Session::forget('cart');
        }else{
            \Session::put('cart', $this->carts);
        }
    }
    public function deleteCart(Request $request){
        $request->session()->forget('cart');
    }

    public function setQtyItem($id, $qty){
        $this->carts[$id]['qty'] = $qty;
        \Session::put('cart', $this->carts);
    }

    public function getTotalQty(){
        if (empty($this->carts)) return 0;
        $countQty = 0;
        foreach ($this->carts as $key => $item){
            $countQty += $item['qty'];
        }
        return $countQty;
    }
    public function getTotalPrice(){
        if (empty($this->carts)) return 0;

        $totalPrice = 0;
        foreach ($this->carts as $key => $item){
            $itemTotalPrice = ($item['item']->price * $item['qty']);
            $totalPrice += $itemTotalPrice;
        }
        return $totalPrice;
    }

    public function getTotalQuantity(){
        if (empty($this->carts));
        $countQty = 0;
        foreach ($this->carts as $key => $item){
            $countQty += $item['quantity'];
        }
        return $countQty;
    }

    public function getTotalPriceCart(){
        if (empty($this->carts)) return 0;

        $totalPrice = 0;
        foreach ($this->carts as $key => $item){
            $itemTotalPrice = ($item['item']->price * $item['quantity']);
            $totalPrice += $itemTotalPrice;
        }
        return $totalPrice;
    }
}
