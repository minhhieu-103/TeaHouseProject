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
                            <a class="changeurl" href="{{URL::to('/admin/products')}}"><span>Product</span></a>
                            {{--                        <span class="mr_lr">&nbsp;/&nbsp;</span>--}}
                        </li>
                        {{--                    <li><strong><span>Trà Phúc bồn tử</span></strong></li>--}}
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('flash-message');

    <div class="add"style="padding: 12px">
        <button class="btn btn-success" title="add news"><a href="{{URL::to('/admin/products/create')}}"><i class="fas fa-plus"></i> Add Products</a></button>
        <div class="search float-right" style="float: right">
            <form action="/products/search" method="get">
                <div class="form-group">
                    <input type="search" name="search" style="border: none">
                    <span class="form-group-presend">
                            <button  type="submit" class="btn btn-primary"> Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Desc</th>
            <th scope="col">Img</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        {{--        @if() @endif--}}
        @forelse($products as $pr)
            <tr>
                <th class="stt" scope="row">{{ $stt }}</th>
                <td><a>{{$pr->name }}</a></td>
                <td>{{ $pr->price }} VNĐ</td>
                <td>{{ $pr->desc }}</td>
                <td><img  width="60"  height="50" src="{{ asset('storage'. str_replace('public', '', $pr->image))}}"></td>
                <td>{{ $pr->quantity }}</td>
                <td>{{ $pr->categories->name }}</td>

                {{--                <td>{{ $pr->create_at }}</td>--}}
                <td>


                    <button class="btn btn-info"><a href="{{ route('admin.products.show', ['id' => $pr->id]) }}"><i class="fas fa-eye" style="color: white"></i></a></button>
                    <button class="btn btn-primary"><a href="{{route('admin.products.edit',['id'=>$pr->id])}}"><i class="fas fa-pencil-alt " style="color: white"></i></a></button>
                    <form class="btn" action="{{ route('admin.products.destroy', ['id' => $pr->id]) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            <i class="fas fa-trash-alt" style="color: white"></i>
                        </button>
                    </form>

{{--                    <button class="btn btn-danger delete" ><a href="{{ route('admin.products.destroy', ['id' => $pr->id]) }}"><i class="fas fa-trash-alt" style="color: white"></i></a></button>--}}
                </td>
                <td>
                   </td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse


        </tbody>

    </table>
    <div class="section pagenav">
        <nav class="nav_pagi">
            {!! $products->render() !!}
        </nav>
    </div>
    <style>
        form {
            float: left;
            margin-right: 6px;
        }
    </style>
@endsection

