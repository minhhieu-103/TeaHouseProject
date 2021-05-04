@extends('layouts.main')
@section('content')

    <div class="bodywrap">
        <section class="bread-crumb">
        <span class="crumb-border">
        </span>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 a-left">
                        <ul class="breadcrumb">
                            <li class="home">
                                <a href="/"><span>Trang chủ</span></a>
                                <span class="mr_lr">&nbsp;/&nbsp;</span>
                            </li>

                            <li><strong><span>Thực đơn</span></strong></li>
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="page">
            <div class="container">
                <div class="pg_page padding-top-15">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="page-title category-title">
                                <h1 class="title-head hidden"><a href="#">Thực đơn</a></h1>
                            </div>
                            <div class="content-page rte">
                                <div class="section_base_page section_col_1" >
                                    <div class="clearfix heading">
                                        <div class="heading cleafix a-center">
                                            <h2 class="a-center">
                                                Trà Hoa Quả
                                            </h2>
                                            <p class="title">Hương vị tự nhiên, thơm ngon của Trà Việt với phong cách hiện đại tại Tea House sẽ giúp bạn gợi mở vị giác của bản thân và tận hưởng một cảm giác thật khoan khoái, tươi mới.</p>
                                        </div>
                                    </div>
                                    <div class="clearfix">

                                        <div class="container">
                                            <div class="row">
                                                <?php $ct = \App\Model\Product::where('categories_id', '=', 5)->select('*')->limit(4)->get()?>

                                                @foreach($ct as $cat1)
                                                    <div class="col-md-3">
                                                        <div class="item_product_main">
                                                            <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-20240850" enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $cat1->id]) }}" title="{{$cat1->name}}" tabindex="0">
                                                                        <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $cat1->image))}}"  alt="Bông lan cuộn trà xanh" data-was-processed="true">
                                                                    </a>
                                                                    <div class="action1">
                                                                        <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                                        <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$cat1->id}}" title="Thêm vào giỏ hàng"  >
                                                                            <a href="{{route('add-cart',[$cat1->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                                        </button>
                                                                        {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a href="{{ route('details.show', ['id' => $cat1->id]) }}"title="Bông lan cuộn trà xanh" tabindex="0">{{$cat1->name}}</a></h3>
                                                                    <div class="price-box">


                                                                        <span class="gia">Giá:</span> {{number_format($cat1->price)}}đ


                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="section_base_page section_col_1 padding-bottom-30">
                                    <div class="clearfix heading">
                                        <div class="heading cleafix a-center">
                                            <h2 class="a-center">
                                               Cà Phê
                                            </h2>
                                            <p  class="title">Với những nghệ nhân rang tâm huyết và đội ngũ Barista tài năng cùng những câu chuyện cà phê <br> đầy cảm hứng, ngôi nhà Tea House là không gian dành cho những ai trót yêu say đắm hương vị của <br>những hạt cà phê tuyệt hảo.</p>
                                        </div>
                                    </div>
                                    <div class="clearfix">

                                        <div class="container">
                                            <div class="row">
                                                <?php $ct = \App\Model\Product::where('categories_id', '=', 1)->select('*')->get()?>

                                                @foreach($ct as $cat1)
                                                    <div class="col-md-3">
                                                        <div class="item_product_main">
                                                            <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-20240850" enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $cat1->id]) }}" title="{{$cat1->name}}" tabindex="0">
                                                                        <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $cat1->image))}}"  alt="Bông lan cuộn trà xanh" data-was-processed="true">
                                                                    </a>
                                                                    <div class="action1">
                                                                        <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                                        <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$cat1->id}}" title="Thêm vào giỏ hàng"  >
                                                                            <a href="{{route('add-cart',[$cat1->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                                        </button>
                                                                        {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a href="{{ route('details.show', ['id' => $cat1->id]) }}"title="Bông lan cuộn trà xanh" tabindex="0">{{$cat1->name}}</a></h3>
                                                                    <div class="price-box">


                                                                        <span class="gia">Giá:</span> {{number_format($cat1->price)}}đ


                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="section_base_page section_col_1 padding-bottom-30">

                                <div class="clearfix heading">
                                        <div class="heading cleafix a-center">
                                            <h2 class="a-center">
                                                Smoothies
                                            </h2>
                                            <p  class="title">Với những nghệ nhân rang tâm huyết và đội ngũ Barista tài năng cùng những câu chuyện cà phê <br>đầy cảm hứng, ngôi nhà Tea House là không gian dành cho những ai trót yêu say đắm hương vị của <br>những hạt cà phê tuyệt hảo.</p>

                                        </div>
                                    </div>
                                    <div class="clearfix">

                                        <div class="container">
                                            <div class="row">
                                                <?php $ct = \App\Model\Product::where('categories_id', '=', 4)->select('*')->get()?>

                                                @foreach($ct as $cat1)
                                                    <div class="col-md-3">
                                                        <div class="item_product_main">
                                                            <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-20240850" enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $cat1->id]) }}" title="{{$cat1->name}}" tabindex="0">
                                                                        <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $cat1->image))}}"  alt="Bông lan cuộn trà xanh" data-was-processed="true">
                                                                    </a>
                                                                    <div class="action1">
                                                                        <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                                        <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$cat1->id}}" title="Thêm vào giỏ hàng"  >
                                                                            <a href="{{route('add-cart',[$cat1->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                                        </button>
                                                                        {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a href="{{ route('details.show', ['id' => $cat1->id]) }}"title="Bông lan cuộn trà xanh" tabindex="0">{{$cat1->name}}</a></h3>
                                                                    <div class="price-box">


                                                                        <span class="gia">Giá:</span> {{number_format($cat1->price)}}đ


                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="section_base_page section_col_1 padding-bottom-30">

                                <div class="clearfix heading">
                                        <div class="heading cleafix a-center">
                                            <h2 class="a-center">
                                                Bánh Ngọt
                                            </h2>
                                            <p  class="title">Với những nghệ nhân rang tâm huyết và đội ngũ Barista tài năng cùng những câu chuyện cà phê <br>đầy cảm hứng, ngôi nhà Tea House là không gian dành cho những ai trót yêu say đắm hương vị của <br>những hạt cà phê tuyệt hảo.</p>
                                        </div>
                                    </div>
                                    <div class="clearfix">

                                        <div class="container">
                                            <div class="row">
                                                <?php $ct = \App\Model\Product::where('categories_id', '=', 3)->select('*')->get()?>

                                                @foreach($ct as $cat1)
                                                    <div class="col-md-3">
                                                        <div class="item_product_main">
                                                            <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-20240850" enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $cat1->id]) }}" title="{{$cat1->name}}" tabindex="0">
                                                                        <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $cat1->image))}}"  alt="Bông lan cuộn trà xanh" data-was-processed="true">
                                                                    </a>
                                                                    <div class="action1">
                                                                        <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                                        <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$cat1->id}}" title="Thêm vào giỏ hàng"  >
                                                                            <a href="{{route('add-cart',[$cat1->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                                        </button>
                                                                        {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a href="{{ route('details.show', ['id' => $cat1->id]) }}"title="Bông lan cuộn trà xanh" tabindex="0">{{$cat1->name}}</a></h3>
                                                                    <div class="price-box">


                                                                        <span class="gia">Giá:</span> {{number_format($cat1->price)}}đ


                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
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
    <style>
        .heading.cleafix.a-center p.title {
            font-size: 21px;
            color: #443c33;
            font-weight: 500;
            margin: 5px 0 70px;
            /* min-height: 31px; */
        }.padding-bottom-30{
            padding-bottom: 30px;
                 }
    </style>
@endsection
