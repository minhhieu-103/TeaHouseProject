<?php

namespace App\Http\Controllers;
use App\LoyalCustomer;
use App\Model\Customer;
use App\Model\Order;
use App\Model\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
//use Illuminate\Support\Facad/es\Request;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCheckOut()
    {
        $categories= Category::all();
        $this->data['title'] = 'Check out';
        $this->data['cart'] = Cart::content();
//        dd($this->data['cart'] );
        $this->data['total'] = Cart::total();

        return view('home.checkout', $this->data,compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */



    public function postCheckOut(Request $request){
        $cartInfor = Cart::content();
        $c_name =Auth::guard('loyal_customer')->user()->name;
        $c_email =Auth::guard('loyal_customer')->user()->email;
//        foreach($cartInfor as $key => $val){
//            dd( asset('storage'. str_replace('public', '', $val->options)));
//
//        }
        $inventory = Order::getInventory('status');
//        dd( $inventory['2']);

        $categories = Category::all();
        $rule = [
            'address' => 'required',
//            'email' => 'required|loyal_customers|unique'

        ];

        $validator = Validator::make(Input::all(), $rule);
        if ($validator->fails()) {
            return redirect('/checkout')
                ->withErrors($validator)
                ->withInput();
        }
        try {
            // save
//            dd($request->filled('address'));
//             $ls =LoyalCustomer::where('name','Văn Hòa')->value('email');


//            if (User::where('email', '=', Input::get('email'))->exists()) {
//                // user found
//            }
         $data = $request->all();

            $customer = LoyalCustomer::create($data);
//            $customer = LoyalCustomer::create(
//                array(
//                    $customer->address = Request::get('address'),
//                )
//            );
//            dd($customer);

            $order =Order::create(
                [
                    'status' => 1,
                    'loyal_customers_id' => $customer->id,
                     'date_order' =>date('Y-m-d H:i:s'),
                    'total' =>   str_replace(',', '', Cart::total(0)),

                ]
            );
//            dd($order);

            if (count($cartInfor) > 0) {
                foreach ($cartInfor as $item) {
                    OrderDetail::create(
                        array(
                            'orders_id' => $order->id,
                            'product_id' => $item ->id,
                            'quantity' => $item ->qty,
                            'price' => $item->price,
                        )
                    );
                }

            }
//            dd($cartInfor);
//            foreach($)
            Mail::send('contact.contact',[
                'c_name' => $c_name,
                'order' => $order,
                'items' =>$cartInfor,
                'customer' => $customer
            ],function($mail) use( $c_name, $customer,$c_email,$request){
                $mail->to($c_email,$c_name);
                $mail->from('mailinh13a@gmail.com');
                $mail->subject('Xác nhận đơn hàng từ Template Tea House');
            });

            // del
            Cart::destroy();
            return  back();

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
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
