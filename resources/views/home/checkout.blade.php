@extends('layouts.main')
@section('content')

@section('title', 'Page Title')

@include('flash-message')

<div class="checkout">
    <h1 class="text-center">CHECKOUT</h1>

    <h1>{{ (session('message') ? session('message') : " ") }}</h1>
    <?php if (Cart::content()->isEmpty()) { ?>
    <section class="section section--icon-heading" style="text-align: center">
        <div class="section__icon unprintable">
            <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
            </svg>
        </div>
        <div class="thankyou-message-container">
            <h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>

            <p class="section__text">
                Một email xác nhận đã được gửi tới {{Auth::guard('loyal_customer')->user()->email}} <br>
                Xin vui lòng kiểm tra email của bạn
            </p>


        </div>
        <button  class="btn btn-success"><a href="/" style="color: white"><i class="fas fa-reply"></i>Trở lại mua hàng </a></button>
    </section>
    <style>
        h1.text-center {
            display: none;
        }.col-7.col-md-7.detail {
             display: none;
         }.col-md-4.order-md-2.mb-4 {
              display: none;
          }
    </style>
    <?php } ?>
    <div class="container">
        <form action="{{URL::to('checkouts')}}" method="post">
            @csrf
        <div class="row">
                <div class="col-7  col-md-7 detail">
                    <h3 class="topborder"><span>Billing Details</span></h3>


                    <label for="company">Name</label>
                    <input  class="form-control" type="text" name="name"  value="{{Auth::guard('loyal_customer')->user()->name}}" id="company" required >

{{--                    <input type="text" name="phone" id="address " value="{{Auth::guard('loyal_customer')->user()->name}}" required>--}}
                    <label for="address">Email</label>
                    <small class="text-danger">Vui lòng nhập đúng email để chúng tôi liên hệ với bạn</small>

                    <input  class="form-control"  type="text" name="email" value="{{Auth::guard('loyal_customer')->user()->email}}" id="email" required >
                    <input  class="form-control"  type="hidden" name="password" value="{{Auth::guard('loyal_customer')->user()->password}}" id="email" required >

                    <label for="address">Phone</label>
                    <input  class="form-control"  type="text" name="phone" id="phone" value="{{Auth::guard('loyal_customer')->user()->phone}}" max="12" required >
                    <label for="address">Address</label>
                    <input type="text" name="address" alue="{{Auth::guard('loyal_customer')->user()->address}}" id="address" required>
                    <small class="text-danger">Chỉ nhận đơn trong thành phố</small>
                </div>
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{Cart::count()}}</span>
                </h4>

                <ul class="list-group mb-3 product">
                    @foreach(Cart::content() as $items)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Tên sản phẩm :</h6>
                            <small class="text-muted">{{$items->name}}</small>
                            <br>
                            <small class="text-muted"> số lượng :{{$items->qty}}</small>
                        </div>
                        <a class="backdetail" href="{{URL::to('/details',[$items->id])}}"><img width="70px" src="{{$items->options[0]}}" alt=""></a>
                        <span class="text-muted">{{$items->subTotal(0)}} đ</span>

                    </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Giảm(5%):</h6>

                        </div>
                        <span class="text-success">{{Cart::tax(0)}}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng phải thanh toán</span>
                        <strong>{{Cart::total(0)}} đ</strong>
                    </li>
                </ul>

                <button type="submit" value="submit" class="btn btn-primary">
                        Thanh toán
                </button>
                <button class="btn btn-primary back" >
                    Trở lại giỏ hàng
                </button>
            </div>

        </div>

    </form>

    </div>
    </div>
</div>


@endsection
<style>
    /*@charset "utf-8";*/
    /* CSS Document */

    /* CSS Reset */

    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
        display: block;
    }
    body {
        line-height: 1;
    }
    ol, ul {
        list-style: none;
    }
    blockquote, q {
        quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }


    /* Form Styles */
    /*form*/
    /*{*/
    /*    width: 100%;*/
    /*}*/

    input[type="text"], input[type="password"], select, input[type="email"], input[type="tel"], input[type="date"], textarea
    {
        border: 1px solid #ddd;
        background-color: #fff;
        color: #959595;
        width: 100%;
        padding: 10px;
        font-size: 12px;
        margin: 7px 0 25px 0;
    }

    label
    {
        font-size: 14px;
    }

    select
    {
        height: 37px;
    }

    input[type="checkbox"]
    {
        margin: 5px 10px 5px 0px;
    }

    .user-pswd input[type="checkbox"]
    {
        margin: 5px 10px 5px 15px;
    }

    input[type="checkbox"] + p, input[type="radio"] + p
    {
        font-size: 15px;
        padding: 0 5px;
        display: inline;
        color: #959595;
    }

    input[type="radio"] + p
    {
        font-size: 13px;
        padding: 0 0 0 20px;
    }

    input[type="submit"]
    {
        padding: 10px 20px;
        color: #fff;
        background-color: #000;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover
    {
        background-color: #D6544E;
        border: none;
    }

    .coupon input[type="text"]
    {
        width: 160px;
    }

    .coupon input[type="submit"]
    {
        margin: 0 0 0 20px;
    }

    .order .redbutton
    {
        background-color: #D6544E;
        padding: 13px 30px;
        font-size: 14px;
        font-weight: 100;
        margin-top: 25px;
    }

    .order .redbutton:hover
    {
        background-color: #000;
        border: none;
    }

    textarea
    {
        height: 120px;
    }

    textarea:hover, input:hover
    {
        border: 1px solid #D6544E;
        background-color: #fff;
    }

    textarea:active, input:active
    {
        border: 1px solid #D6544E;
        background-color: #f5f5f5;
    }

    textarea:focus, input:focus
    {
        border: 1px solid #000;
        background-color: #f5f5f5;
    }

    label:not(.notes):after
    {
        content: "*";
        color: red;
        padding-left: 5px;
    }

    .notes
    {
        display: block;
        padding-top: 20px;
    }


    /* Grid Styles */
    *
    {
        box-sizing: border-box;
    }

    .wrapper
    {
        width: 100%;
        margin: 0 auto;
        margin-bottom: 100px;
    }

    .row:before, .row:after
    {
        content: " ";
        display: table;
    }

    .row:after
    {
        clear: both;
    }

    .col
    {
        margin-right: 16px;
        float: left;
    }

    .col:last-child
    {
        margin-right: 0;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12
    {
        width: 100%;
    }

    .col-push-1, .col-push-2, .col-push-3, .col-push-4, .col-push-5, .col-push-6, .col-push-7, .col-push-8, .col-push-9, .col-push-10, .col-push-11
    {
        margin-left: 0;
    }

    /* TABLET STARTS HERE */




    /*DESKTOP STARTS HERE*/



    /* Main CSS Starts Here */
    body
    {
        font-family: 'Raleway', sans-serif;
        color: #959595;
    }

    h1, h2, h3, h4, h5, h6
    {
        text-transform: uppercase;
        font-weight: 900;
        padding: 20px 0;
        color: #000;
    }

    h1
    {
        font-size: 72px;
        color: #000;
    }

    h2
    {
        font-size: 28px;
    }

    h3
    {
        font-size: 16px;
    }

    h4
    {
        font-size: 15px;
    }

    h5
    {
        font-size: 14px;
    }

    h6
    {
        font-size: 13px;
    }

    p
    {
        font-size: 13px;
        padding: 20px 0;
    }

    /* Heading Top Border Styles Start Here */
    h3
    {
        position: relative;
    }

    h3.topborder
    {
        margin-top: 0;
    }

    h3.topborder:before
    {
        content: "";
        display: block;
        border-top: 1px solid #c2c2c2;
        width: 100%;
        height: 1px;
        position: absolute;
        top: 50%;
        z-index: 1;
    }

    h3.topborder span {
        background: #fff;
        padding: 0 10px 0 0;
        position: relative;
        z-index: 5;
    }
    /* Heading Top Border Styles End Here */


    header
    {
        height: 250px;
        background-image: url('http://lorempixel.com/1920/500');
        background-size: cover;
        text-align: center;
        line-height: 210px;
    }

    .white-space
    {
        height: 90px;
        border-bottom: 1px solid #ddd;
        box-shadow: 0px 12px 14px -10px #DDDDDD;
        -webkit-box-shadow: 0px 12px 14px -10px #DDDDDD;
        -moz-box-shadow: 0px 12px 14px -10px #DDDDDD;
        -o-box-shadow: 0px 12px 14px -10px #DDDDDD;

    }

    .fa-info
    {
        font-size: 24px;
        padding: 0 20px;
        color: #757575;
        line-height: 56px;
        vertical-align: middle;
    }

    a
    {
        color: #D6544E;
        font-size: 13px;
        text-decoration: none;
    }

    a:hover
    {
        color: #000;
    }

    .info-bar
    {
        height: 56px;
        background-color: #f5f5f5;
        margin: 20px 0;
    }

    .info-bar p:first-child
    {
        padding: 0;
    }

    .order
    {
        border: 12px solid #f5f5f5;
        padding: 30px;
        margin-top: 28px;
    }

    .order div:not(.qty)
    {
        width: 100%;
        border-bottom: 1px solid #DDDDDD;
        padding: 20px 0;
    }

    .order a
    {
        display: block;
    }

    .order p
    {
        padding: 0;
        line-height: 20px;
    }

    .order h4, h5
    {
        padding: 0;
    }

    .order div:nth-child(6)
    {
        border: none;
    }

    .width50
    {
        width: 50%;
        float: left;
    }

    .padleft
    {
        margin-left: 39px;
    }

    .padright
    {
        padding-right: 40px;
    }

    .inline
    {
        display: inline-block;
    }

    .alignright
    {
        float: right;
    }

    .prod-description
    {
        text-transform: uppercase;
        color: #000;
    }

    .qty
    {
        font-weight: 900;
        font-size: 13px;
        color: #000;
        padding-left: 4px;
    }

    .smalltxt
    {
        font-size: 9px;
        vertical-align: middle;
    }

    .paymenttypes
    {
        border: 1px solid #DDDDDD;
        width: 135px;
        padding: 0 8px;
        margin: 0 0 20px 10px;
        display: inline-block;
        vertical-align: middle;
    }

    .paypal
    {
        width: 39px;
        height: 13px;
    }

    .cards
    {
        width: 135px;
        height: 24px;
    }

    .difwidth
    {
        width: 150px;
        line-height: 20px;
    }

    .order .center
    {
        line-height: 40px;
        color: #000;
    }
</style>

