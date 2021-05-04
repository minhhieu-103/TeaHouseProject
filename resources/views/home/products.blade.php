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


                        <li><strong><span>Tất cả sản phẩm</span></strong></li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="section wrap_background">
        <div class="container">
            <div class="bg_collection section">
                <div class="row">
                    <div class="main_container collection col-md-12">
                        <div class="slider-items-products">
                            <div class="collectiontitle">
                                <h1 class="heading">
                                    Tất cả sản phẩm
                                </h1>
                            </div>
                        </div>
                        @include('flash-message')
                        <div class="category-products">

                            <section class="product-view">
                                <div class="container">
                                    <div class="row product_data">
                                        @foreach($products as $p)
                                        <div class="col-md-3">
{{--                                            <form action="{{route('add-cart', [$p->id])}}" method="post" class="variants product-action" data-id="{{$p->id}}" enctype="multipart/form-data">--}}
                                            <div class="item_product_main">
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $p->id]) }}" title="{{$p->name}}" tabindex="0">
                                                            <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $p->image))}}" alt="{{$p->name}}    " data-was-processed="true">
                                                        </a>
                                                        <div class="action1">
                                                            <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                            <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$p->id}}" title="Thêm vào giỏ hàng"  >
                                                                <a href="{{route('add-cart',[$p->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                            </button>
{{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a href="{{URL::to('/details')}}" title="Bông lan cuộn trà xanh" tabindex="0">{{$p->name}}</a></h3>
                                                        <div class="price-box">
                                                            <span class="gia" >Giá: </span>{{number_format($p->price)}}  VNĐ



                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                        @endforeach
                                    </div>


                                </div>



                            </section>



                                <div class="section pagenav">
                                <nav class="nav_pagi">
                                    {!! $products->render() !!}
                                </nav>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
