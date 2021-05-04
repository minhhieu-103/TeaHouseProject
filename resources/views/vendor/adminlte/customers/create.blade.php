@extends('adminlte::layouts.app')
@section('main-content')
    <div class="add"style="padding: 12px">
        <button class="btn btn-warning" title="add news"><a href="{{URL::to('/admin/products')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></button>
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


    <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" value="{{ old('price') }}" name="price" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER PRICE">
            {{--        </div>   <div class="form-group">--}}
            {{--            <label for="exampleInputEmail1">Price</label>--}}
            {{--            <input type="text" value="{{ old('status') }}" name="price" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER PRICE">--}}
            {{--        </div>--}}

{{--            <input type="checkbox" name="is_featured" class="switch-input" value="1" {{ old('status') ? 'checked="checked"' : '' }}/>--}}


            <div class="form-group">
                <label for="exampleInputEmail1">Desc</label>
                <input type="text" value="{{ old('desc') }}" name="desc" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER DESC">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="text" value="{{ old('quantity') }}" name="quantity" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Category</label>
                <select name="categories_id" class="form-control">
                    @forelse($categories as $ca)
                        <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                    @empty
                        <option>No data</option>
                    @endforelse
                </select>


            </div>
            <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
