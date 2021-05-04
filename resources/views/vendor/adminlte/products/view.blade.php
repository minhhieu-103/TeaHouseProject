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
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li><strong><span>{{$products->name}}</span></strong></li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="add"style="padding: 12px">
        <button class="btn btn-warning" title="add news"><a href="{{URL::to('/admin/products')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></button>
        {{--        <button class="btn btn-primary"><a href="{{route('product.edit',['id'=>$pr->id])}}"><i class="fas fa-pencil-alt " style="color: white"></i></a>Edit</button>--}}
        {{--        <button class="btn btn-danger"><a href="{{ route('product.destroy', ['id' => $pr->id]) }}"><i class="fas fa-trash-alt" style="color: white"></i></a>Delete</button>--}}

    </div>
    <section class="content">
        <div class="box-body table-responsive no-padding">
            <table class="table table-striped">
                <tbody>
                {{--              @foreach($products as $pr)--}}
                <tr>
                    <th>Name :</th>
                    <td> {{$products->name}} </td>
                </tr>
                <tr>
                    <th>Price :</th>
                    <td>{{$products->price}} VNĐ</td>

                </tr>
                <tr>
                    <th>Desc :</th>
                    <td>
                        {{$products->desc}}
                    </td>
                </tr>
                <tr>
                    <th>IMG :</th>

                    <td><img  width="200" src="{{ asset('storage'. str_replace('public', '', $products->image))}}"></td>

                </tr>
                <tr>
                    <th> Quantity :</th>
                    <td>{{$products->quantity}} </td>
                </tr>
                <tr>
                    <th> UPDATE DAY : </th>
                    <td>{{ $products->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                {{--              @empty--}}
                {{--                  @endforeach--}}
                </tbody>
            </table>
        </div>
    </section>
@endsection
