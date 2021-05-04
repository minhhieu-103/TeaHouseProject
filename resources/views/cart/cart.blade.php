@extends('layouts.main')
@section('title', 'Cart')
@section('content')
    @include('flash-message')
    <div class="bodywrap">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="rows">
                <div class="col-xs-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="/"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li><strong><span>Giỏ hàng</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>

    <h1>{{ (session('message') ? session('message') : " ") }}</h1>
    <section class="main-cart-page main-container">
        <div class="container">
            <h1 class="text-center title_cart">GIỎ HÀNG CỦA BẠN CÓ <strong style="color: red">{{Cart::count()}}</strong> SẢN PHẨM</h1>
            <?php if (Cart::content()->isEmpty()) { ?>
            <p class="no-item">Không có sản phẩm nào. Quay lại cửa hàng để tiếp tục mua sắm.</p>
            <style>
                table.table.table-hover {
                    display: none;
                }
                .bg_cart.shopping-cart-table-total {
                    display: none;
                }
                h1.text-center.title_cart {
                    display: none;
                }
                p.no-item {
                    margin-bottom: 200px;
                }
            </style>
            <?php } ?>
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
            <div class="row">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="25%">Tên Sản Phẩm</th>
                            <th width="15%">Giá</th>
                            <th width="25%">Ảnh sản phẩm</th>
                            <th width="14%">Số lượng</th>
                            <th width="10%">Tổng</th>
{{--                            <th width="10%"><a href="{{URL::to('cart/destroy')}}" style="color: red"><i class="fas fa-trash-alt"></i></a></th>--}}
                        </tr>
                        </thead>
                        <?php $count =1;?>

                        @foreach(Cart::content() as $row)
                            <tbody>



                            {{--                            {{dd($row)}}--}}
                            <tr>
                                <td ><a class="backdetail" href="{{URL::to('/details',[$row->id])}}">{{$row->name}}</a></td>
                                <td>{{number_format($row->price)}} đ</td>

                                <td><a class="backdetail" href="{{URL::to('/details',[$row->id])}}"><img width="100px" src="{{$row->options[0]}}" alt=""></a></td>
                                {{--                            <td> <p><img src="{{asset(('storage/'.$row->image.'jpg'))}}" class="img-responsive" width="50"></p></td>--}}
                                <td style="margin-left: 2px"><input class="text-center form-control" type="number"value="{{$row->qty}}"min="1" max="50"></td>
                                <td>{{ number_format($row->subtotal) }} đ</td>
                                <td>
                                    <a  class="remove-itemx"  href="{{url('/cart/remove')}}/{{$row->rowId}}"><i class="fa fa-times"></i></a>
                                </td>

                            </tr>
                            @endforeach
                            <?php $count++;?>
                            </tbody>

                    </table>
                </div>
                </div>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section continued">

                        <div class="bg_cart shopping-cart-table-total">
                            <div class="table-total">
                                <table class="table">
                                    <tbody><tr>
                                        <td class="total-text f-left">Tổng tạm tính :</td>
                                        <td class="txt-right totals_price price_end f-right">{{Cart::subtotal(0)}} đ</td>
                                    </tr>
                                    <tr>
                                        <td class="total-text f-left">Giảm giá(5%):</td>
                                        <td class="txt-right totals_price price_end f-right">{{Cart::tax(0)}} đ</td>
                                    </tr>
                                    <tr>
                                        <td class="total-text f-left">Tổng tiền :</td>
                                        <td class="txt-right totals_price price_end f-right">{{ Cart::total(0) }} đ</td>
                                    </tr>

                                    </tbody></table>
                            </div>

                            <a href="{{URL::to('products')}}" class="form-cart-continue"><i class="fas fa-reply"></i>Tiếp tục mua hàng</a>


                            @if(Auth::guard('loyal_customer')->user() != NULL )
                                <a href="/checkout" class="btn-checkout-cart button_checkfor_buy"><i class="fas fa-check"></i>Tiến hành thanh toán</a>

                            @else
                                <a href="/login/customer" class="btn-checkout-cart button_checkfor_buy"><i class="fas fa-check"></i>Tiến hành thanh toán</a>

                            @endif
                        </div>
                    </div>

                </div>

            </div>


        </div>


        <style>
            a.backdetail{
                color: black;
                font-size: 14px;
            }td{
              font-size: 15px;
               color: #4d8a54;
               font-weight: bold;
            }
        </style>
@endsection
