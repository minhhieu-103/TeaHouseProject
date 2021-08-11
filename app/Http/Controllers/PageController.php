<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->orderByDesc('id', 'ASC')->get();
        $cart = Session::get('cart');
        return view ('page.content',compact('categories','cart'));
    }
    public function introduce()
    {
        $categories = Category::with('products')->orderByDesc('id')->get();
        return view ('home.introduce',compact('categories'));
    }
    public function news()
    {
        $categories = Category::with('products')->orderByDesc('id')->get();
        return view ('home.news',compact('categories'));
    }

    public function menu()
    {
        $categories = Category::with('products')->orderByDesc('id')->get();
        return view ('home.menutea',compact('categories'));
    }  public function contact()
{
    $categories = Category::with('products')->orderByDesc('id')->get();
    return view ('home.contact-tea',compact('categories'));
}
//    public function getcontact()
//    {
//       return view('contact.contact');
//    }
//    public function postcontact()
//    {
//        $data= [
//            'name ' => 'hieu33',
//            'age' => 8,
//        ];
//
//        Mail::send('contact.contact',compact('data'),function($message){
//            $message->from('mailinh13a@gmail.com','minhhieu');
//            $message->to('hieuvippro123a@gmail.com','hieu2');
//            $message->subject('thu gui ong gia');
//        });
//    }

}
