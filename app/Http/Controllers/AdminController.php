<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
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


        $listday = DateHelper::getListDayInMonth();
//        dd($listday);
        //danh sach so san pham xem nhieu
        $topProduct = Product::orderByDesc('id')->limit(9)->get();
        //trang thai don hang
        //tiep nhan
        $statusDefault = Order::where('status', 1)->select('id')->count();
        // dang van chuyen
        $statusProcess = Order::where('status', 2)->select('id')->count();
        // da ban giao
        $statusSuccess = Order::where('status', 3)->select('id')->count();
        // huy hang
        $statusCancel = Order::where('status', -1)->select('id')->count();

        $statusChart = [
            [
                'Tiếp nhận' , $statusDefault,false
            ],
            [
                'Đang vận chuyển' , $statusProcess,false
            ],
            [
                'Đã hoàn thành ' , $statusSuccess,false
            ],
            [
                'Hủy bỏ' , $statusCancel,false
            ],

         ];
//dd($statusChart);


        // doanh thu thang
        $revenueProduct =  Order::where('status', 3)->whereMonth('created_at',date('m'))
            ->select(DB::raw('sum(total) as total '),DB::raw('DATE(created_at)day  '))
            ->groupBy('day')->get()->toArray();
//        dd($revenueProduc//t);
        $viewData = [
            'totalUser' => $customers,
            'totalProducts' => $products,
            'totalOrders' => $order,
            'totalPrice' => $detail,
            'listCustomer' => $listcustomers,
            'topProducts' => $topProduct,
            'listDay' => json_encode($listday, true),
            'statusChart' => json_encode($statusChart)
        ];
//        dd($viewData['totalUser']);
        return view('adminlte::home', compact('viewData'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
