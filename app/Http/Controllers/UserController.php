<?php

namespace App\Http\Controllers;
use App\LoyalCustomer;
use App\Model\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('home.login');//return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $categories =Category::all();
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không

        if (Auth::guard('loyal_customer')->attempt($arr)) {

           return view('page.content',compact('categories'))->with('success','Item update successfully!');
            //..code tùy chọn
//            dd(Auth::guard('loyal_customer')->user()->name);
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');

        }

    }
    public function getRegister(){
        return view('home.register');//return ra trang login để đăng ký
    }
    public function postRegister(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',

        ]);


//        $data = $this->all();

//
        $customer = LoyalCustomer::create(request(['name', 'email', 'password','phone','address']));;

//            dd($customer);

        return back()->with('success','Bạn đã đăng kí thành công xin mời bạn đăng nhập');

    }

    public function getlogout(){
        Auth::guard('loyal_customer')->logout();
        return back()->with('You have been logged out.', 'Good bye!');
    }
}
