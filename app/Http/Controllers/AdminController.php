<?php

namespace App\Http\Controllers;

use App\LoyalCustomer;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $detail = Order::all()->sum('total');
        // danh sách 10 đơn hàng gần nhất
        $listcustomers = LoyalCustomer::with('orders')->orderByDesc('id')->limit(10)->get();

        //danh sach so san pham xem nhieu
        $topProduct = Product::orderByDesc('id')->limit(10)->get();
//        dd($detail);
        $viewData =[
            'totalUser' => $customers,
            'totalProducts' => $products,
            'totalOrders' =>$order,
            'totalPrice' => $detail,
            'listCustomer' =>$listcustomers,
            'topProducts' =>$topProduct
        ];
//        dd($viewData['totalUser']);
        return  view('adminlte::home',compact('viewData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
