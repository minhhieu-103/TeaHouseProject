@extends('layouts.main')
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
    <div class="section wrap_background">
        <div class="container">
            @include('flash-message')
            <div class="bg_collection section">
                <div class="row">
                    <div class="main_container collection col-md-12">
                        <div class="slider-items-products">
                            <div class="collectiontitle">
                                <h1 class="heading">
{{--                                   {{$products ->name}}--}}
                                </h1>
                            </div>
                        </div>

                        <div class="category-products">
                            <section class="product-view">
                                <div class="container">
                                    <div class="row">
                                        @foreach($products as $p)
                                        <div class="col-md-3">
{{--                                            mo comment for each--}}
                                            <div class="item_product_main">
                                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-20240850" enctype="multipart/form-data">
                                                    <div class="product-thumbnail">

                                                        <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $p->id]) }}" title="Bông lan cuộn trà xanh" tabindex="0">
                                                            <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $p->image))}}" alt="Bông lan cuộn trà xanh" data-was-processed="true">
                                                        </a>
                                                        <div class="action1">
                                                            <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                            <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$p->id}}" title="Thêm vào giỏ hàng"  >
                                                                <a href="{{route('add-cart',[$p->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                            </button>

                                                            {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                        </div>
                                                    </div>
{{--                                                    mo? comment 2 cai ni vs--}}
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a href="{{ route('details.show', ['id' => $p->id]) }}" title="Bông lan cuộn trà xanh" tabindex="0">{{$p->name}}</a></h3>
                                                        <div class="price-box">
                                                            <span class="gia">Giá:</span>{{number_format($p->price)}} VNĐ
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
