@extends('layouts.main')
@section('title', 'Cart')
@section('content')


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


                            <li><strong><span> Trà hoa quả</span></strong></li>


                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup page_customer_account">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                        <div class="block-account">
                            <h5 class="title-account">Trang tài khoản</h5>
                            <p>Xin chào, <span style="color:#4d8a54;">{{Auth::guard('loyal_customer')->user()->name}}</span>&nbsp;!</p>
                            <ul>
                                <li class="account">
                                    <a disabled="disabled" class="title-info active" href="/account">Thông tin tài khoản</a>
                                </li>
                                <li class="account">
                                    <a class="title-info" href="/account/orders">Đơn hàng của bạn</a>
                                </li >

                                <li class="account">
                                    <a class="title-info" href="/account/address">Sổ địa chỉ (1)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
                        <h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>
                        <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">

                            <div class="my-account">
                                <div class="dashboard">

                                    <div class="recent-orders">
                                        <div class="table-responsive-block tab-all" style="overflow-x:auto;">
                                            <table class="table table-cart table-order" id="my-orders-table">
                                                <thead class="thead-default">
                                                <tr>
                                                    <th>Đơn hàng</th>
                                                    <th>Ngày</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Giá trị đơn hàng</th>
                                                    <th>TT thanh toán</th>
                                                    <th>TT vận chuyển</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($orderDetail as $item)

                                                <tr class="first odd">
                                                    <td><a href="{{URL::to('account/orders', ['id' => $item['id']])}}" style="color: #2F80ED;">#{{$item['id']}}</a></td>
                                                    <td>{{$item['created_at']}}</td>
                                                    <td>


                                                        {{$item['address']}}
                                                        <!-- Yên Bái -->

                                                    </td>
                                                    <td>

                                                        @if(@empty($item['orders'][0]))
                                                        <span class="price">0</span>
                                                        @else
                                                            <span class="price">{{ number_format($item['orders'][0]['total']) }} đ</span>
                                                        @endif
                                                    </td>
                                                    <td>


                                                        <span class="span_pending " style="color: red">Chưa thu tiền</span>


                                                    </td>
                                                    <td>

                                                        @if(@empty($item['orders'][0]['total']))
                                                            <a style="color: white;font-size: 14px" class="btn btn-danger btn-xs">Chưa chuyển</a>
                                                        @else
                                                            <a style="color: white" class="btn btn-info ">{{ $item['orders'][0]['status'] }}</a>
{{--                                                            <span class="price label label-default"> </span>--}}
                                                        @endif

                                                    </td>
                                                </tr>

                                                    @endforeach
                                                </tbody>


                                            </table>

                                        </div>

                                        <div class="paginate-pages pull-right page-account text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
