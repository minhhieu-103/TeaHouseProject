@extends('adminlte::layouts.app')
@section('main-content')
    <section class="bread-crumb">
        <span class="crumb-border">
        </span>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="{{URL::to('/admin')}}"><span>Admin</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li>
                            <a class="changeurl" href="{{URL::to('/admin/product')}}"><span>Product</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li><strong><span>Edit</span></strong></li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="add"style="padding: 12px">
        <button class="btn btn-warning" title="add news"><a href="{{URL::to('/admin/product')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></button>
    </div>
    <h1>{{ (session('message') ? session('message') : " ") }}</h1>
    <div class="error">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form method="post" action="{{ route('admin.products.update', ['id' => $product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{$product->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{$product->price}}" name="price" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER PRICE">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Desc</label>
            <input type="text" value="{{$product->desc}}" name="desc" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" onchange="readURL(this);" name="image" class="form-control-file">
            <div>
                <img id="blah" width="120" src="{{ asset('storage/'. str_replace('public', '', $product->image))}}"alt="your image">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="text" value="{{$product->quantity}}" name="quantity" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">CATEGORY</label>
            <select name="categories_id" class="form-control" placeholder="categories_id">
                @forelse($categories as $c)
                    <option @if($c->id === $product->categories->id) selected @else  @endif value="{{ $c->id }}">{{ $c->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>
        </div>

        <button type="submit" class="btn btn-primary margin-bottom-20">Update</button>
    </form>
@endsection
