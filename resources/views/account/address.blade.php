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
                    <div class="col-12 col-lg-9">

                        <h1 class="title-head">Địa chỉ của bạn</h1>



                        <div class="row total_address">


                            <div id="view_address_18200883" class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
                                <div class="address_info" style="border-top: 1px #ebebeb solid;padding-top: 16px;margin-top: 20px;">
                                    <div class="address-group">
                                        <div class="address form-signup">
                                            <p><strong>Họ tên: </strong>{{Auth::guard('loyal_customer')->user()->name}}

                                                <span class="address-default"><i class="fa fa-check-circle"></i>Địa chỉ mặc định

                                            </span></p>
                                            <p>
                                                <strong>Địa chỉ: </strong> {{Auth::guard('loyal_customer')->user()->address}}

                                            </p>

                                            <p><strong>Số điện thoại:</strong> {{Auth::guard('loyal_customer')->user()->phone}}</p>


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
