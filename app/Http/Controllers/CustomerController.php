<?php

namespace App\Http\Controllers;

use App\LoyalCustomer;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;



class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = LoyalCustomer::with('orders')->orderByDesc('created_at', 'Desc')->paginate(5);

//        dd($customers);
        $inventory = Order::getInventory();

        return view('adminlte::customers.main',compact('customers','inventory'));

    }

    public  function getAction(Request $request,$id){


        Order::where('id',$id)->update([
            'status'=> $request->status
        ]);

        //$customers =LoyalCustomer::paginate(6);
        //$inventory = Order::getInventory();
        //return view('adminlte::customers.main',compact('customers','inventory'));
        return redirect()->back();

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
//        dd($id);
        $orderDetail = Order::with('orderdetails')->where('loyal_customers_id', $id)->first();
        $arr_Order = $orderDetail->orderdetails;

//        dd($arr_Order);
        $ids = [];
        foreach($arr_Order as $item){
            $ids[] = $item->product_id;
        }
        $products = Product::whereIn('id', $ids)->get();
//        dd($products);


        return view('adminlte::customers.view', compact('orderDetail','products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = LoyalCustomer::findOrFail($id);
        $pro->forceDelete();
        return redirect()->route('admin.customers.index')->with('success','Delete successfully!');
    }
}
