<?php

namespace App\Http\Controllers;

use App\LoyalCustomer;
use App\Model\Category;
use App\Model\Order;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return  view('account.account',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function accountorders(){
        $categories = Category::all();
        $auth =Auth::guard('loyal_customer')->user()->email;
//        $auth =Auth::guard('loyal_customer')->user()->email;
        $orderDetail = LoyalCustomer::with('orders')->where('email', $auth)->orderBy('created_at', 'desc')->get()->toArray();



//        $customers =Order::with('loyalcustomer')->orderBy('id')->get();



        return  view('account.orders',compact('categories','orderDetail','auth'));
    }
    public function address(){
        $categories = Category::all();


        return  view('account.address',compact('categories',));
    }

    public function getordersaccount($id){
        $categories = Category::all();

        $orderDetail = Order::with('orderdetails')->where('loyal_customers_id', $id)->first();
        $arr_Order = $orderDetail->orderdetails;

//        dd($arr_Order);
        $ids = [];
        foreach($arr_Order as $item){
            $ids[] = $item->product_id;
        }
        $products = Product::whereIn('id', $ids)->get();
        return  view('account.view-orders',compact('categories','orderDetail','arr_Order','products'));


    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
