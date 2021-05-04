<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\LoyalCustomer;
use App\Model\Order;
use App\Model\Product;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        // tổng đơn hàng
        $order = Order::all()->where('id')->count();
        // Tổng số thành viên
        $customers = LoyalCustomer::all()->where('id')->count();
        // Tổng số lượng sản phẩm
        $products = Product::all()->where('id')->count();
        // danh sách 10 đơn hàng gần nhất

        $viewData =[
            'totalUser' => $customers,
            'totalProducts' => $products,
            'totalOrders' =>$order
        ];
//        dd($viewData['totalUser']);
        return  view('adminlte::home',compact('viewData'));
//        return view('adminlte::home');
    }
}
