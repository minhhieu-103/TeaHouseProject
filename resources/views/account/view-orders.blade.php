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
                    <div class="col-xs-12 col-sm-12 col-lg-9">
                        <div class="head-title clearfix">
                            <h1>Chi tiết đơn hàng #1010</h1>
                            <span class="note order_date">
                                Ngày tạo: {{$orderDetail ->created_at}}
                            </span>
                        </div>
                        <div class="payment_status">
                            <span class="note">Trạng thái thanh toán:</span>

                            <i class="status_pending">

                                <em>

                                    <span class="span_pending" style="color: red"><strong><em>Chưa thanh toán</em></strong></span>

                                </em>

                            </i>

                        </div>
                        <div class="shipping_status">
                            <span class="note">Trạng thái vận chuyển:</span>


                            <span class="span_" style="color: red"><strong><em>{{$orderDetail->status}}</em></strong></span>


                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 body_order">

                                <div class="box-address">
                                    <h2 class="title-head">Địa chỉ giao hàng</h2>

                                    <div class="address box-des">
                                        <p> <strong> {{$orderDetail->loyalcustomer->name}}</strong></p>
                                        <p>
                                            {{$orderDetail->loyalcustomer->address}}

                                        </p>

                                        <p>Số điện thoại: {{$orderDetail->loyalcustomer->phone}}</p>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 body_order">
                                <div class="box-address">
                                    <h2 class="title-head">
                                        Thanh toán
                                    </h2>
                                    <div class="box-des">
                                        <p>
                                            Thanh toán khi giao hàng (COD)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 body_order">
                                <div class="box-address">
                                    <h2 class="title-head">
                                        Ghi chú
                                    </h2>
                                    <div class="box-des">
                                        <p>

                                            Không có ghi chú

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="table-order">
                                    <div class="table-responsive-block table_mobile">
                                        <table id="order_details" class="table table-cart">
                                            <thead class="thead-default theborder">
                                            <tr>
                                                <th class="th">Sản phẩm</th>
                                                <th class="th">Đơn giá</th>
                                                <th class="th">Số lượng</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                @foreach($products as $item)
                                                    <?php $detail= \App\Model\OrderDetail::where('product_id', $item->id)->first();

                                                    ?>
                                                <td class="link" data-title="Tên">
                                                    <div class="image_order">
                                                        <a title="Caramel Phomai" href="/caramel-phomai"><img  width="100"  src="{{ asset('storage'. str_replace('public', '', $item->image))}}"></a>
                                                    </div>
                                                    <div class="content_right">
                                                        <a class="title_order" href="/caramel-phomai" title="Caramel Phomai">{{$item->name}}</a>

                                                    </div>

                                                </td>
                                                <td data-title="Giá" class="numeric">{{number_format($item->price)}} đ</td>
                                                <td data-title="Số lượng" class="numeric">{{$detail->quantity}}</td>


                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <table class="table totalorders">
                                        <tfoot>
                                        <tr class="order_summary discount">
                                            <td>Khuyến mại </td>

                                            <td class="total money right">0₫</td>
                                        </tr>
                                        <tr class="order_summary order_total">
                                            <td>Tổng tiền</td>
                                            <td class="right" ><strong style="color:#CA170E;font-size:19px;">{{number_format($orderDetail->total)}} đ
                                             <small class="text-danger" >(đã trừ tiền giảm giá)</small></strong>
                                            </td>

                                        </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
