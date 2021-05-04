<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $search = $request->get('query');
//        $products = Product::where('name');
//        if(!empty($search)){
//
//            $products= Product::where('name','like','%'.$search. '%');
//
//        }
        $products = Product::paginate(8);
        $categories = Category::with('products')->orderByDesc('id')->get();
//        dd($categories);

        return view('home.products', compact('categories','products'));
    }
//    public function search(Request  $request)
//    {
//
//        $categories= Category::all();
////        dd($categories);
//        return view('products',compact('products','categories'));
//
//    }
    public function show($id)
    {
        $categories = Category::all();
        $products = Product::where('categories_id', $id)->get();
        return view('home.type-products', compact('products','categories'));
    }

    public function cart(){
        $categories= Category::all();
        $cartItem = Cart::Content()->count();

        return view('cart.cart',compact('cartItem','categories'));
    }
    public function addToCart($id){
        $pro = Product::findOrFail($id);
        $categories = Category::all();
        $add=(
        [
            'id' => $pro->id,
            'name' => $pro->name,
            'quantity' => 1,
            'price' => $pro->price,
            'options' => ['storage'.str_replace('public', '', $pro->image)],
        ]);
        Cart::add($add);
        return back()->with('success','Đã thêm sản phẩm '.$pro->name.' thành công');

    }
    public function updatecart( Request  $request,$id)

    {


    }
    public function removeFromCart( $id)

    {
        Cart::remove($id);
        return back();
    }
    public  function cartdestroy(){
        Cart::destroy();
        return back();

    }

}
