<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('categories')->orderByDesc('id')->paginate(8);
//        dd($products);
        return view('adminlte::products.main',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('adminlte::products.create',compact('categories'));

    }
    public function search(Request  $request)
    {
        $search = $request->get('search');
        $products= Product::where('name','like','%'.$search. '%')->paginate(5);
        return view('adminlte::products.main',compact('products'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $path = null;
        $data = $request->all();
        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
            $data['image'] = $path;
        }

//                dd($data);
        $products = new Product($data);
//        dd($products);
        $products->save($data);

//        $news->save($data);


        return  redirect('/admin/products')->with('success','You added new items, follow next step!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('id', '=', $id)->select('*')->first();
//        $des = html_entity_decode($products->name);
        return view('adminlte::products.view', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('adminlte::products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $products = Product::find($id);
        $path = null;
        $requestData = $request->all();
        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
            @unlink('storage/'. $products->image);
        }
        if($request->hasFile('image')) {
            //\File::delete($events->image);
            $requestData['image'] = $path;
//            $requestData['image'] = IdomNotification::uploadAndResize($request->file('image'));
        }




//        dd($data);
        $products->update($requestData);
//        $idoms->update($requestData);

        return redirect('/admin/products')->with('success','Item update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::findOrFail($id);
        $pro->forceDelete();
        return redirect()->route('admin.products.index')->with('success','Delete successfully!');
    }
}
