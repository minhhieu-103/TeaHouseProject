@extends('layouts.main')
@section('content')

@section('title', 'Page Title')
    <div class="slider">
        <!-- <div class="container-fluid"> -->
        <img src="{{asset('fontend/images/teahouseslider.jpg')}}" alt="">
    </div>
    <!--slider-->
    <section class="awe-section-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="heading clearfix a-center">
                        <h2>
                            <span>
                                Danh Mục Sản Phẩm
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="banner-home">
                <div class="item">
                    <div class="thumb">
                        <a class="image scale_hover" href="http://127.0.0.1:8000/products/5" title="Trà Nóng" tabindex="0">
                            <div class="div_image">
                                <img class="image_cate_thumb lazyload loaded" src="{{asset('fontend/images/tra.jpg')}}" alt="Trà Nóng" data-was-processed="true">
                            </div>
                            <div class="cate-content">
                                <h3 class="title_cate_">Trà Nóng</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <a class="image scale_hover" href="http://127.0.0.1:8000/products/5" title="Trà Hoa Qủa" tabindex="0">
                            <div class="div_image">
                                <img class="image_cate_thumb lazyload loaded" src="{{asset('fontend/images/trahoaqua.jpg')}}" alt="Trà Hoa Qủa" data-was-processed="true">
                            </div>
                            <div class="cate-content">
                                <h3 class="title_cate_">Trà Hoa Quả</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <a class="image scale_hover" href="http://127.0.0.1:8000/products/4" title="Smoothies" tabindex="0">
                            <div class="div_image">
                                <img class="image_cate_thumb lazyload loaded" src="{{asset('fontend/images/smoothies.jpg')}}" alt="Smoothies"
                                     data-was-processed="true">
                            </div>
                            <div class="cate-content">
                                <h3 class="title_cate_">Smoothies</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <a class="image scale_hover" href="http://127.0.0.1:8000/products/3" title="Bánh Ngọt" tabindex="0">
                            <div class="div_image">
                                <img class="image_cate_thumb lazyload loaded" src="{{asset('fontend/images/cake.jpg')}}" alt="Bánh Ngọt" data-was-processed="true">
                            </div>
                            <div class="cate-content">
                                <h3 class="title_cate_">Bánh Ngọt</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <a class="image scale_hover" href="{{URL::to('products')}}" title="Smoothies" tabindex="0">
                            <div class="div_image">
                                <img class="image_cate_thumb lazyload loaded" src="{{asset('fontend/images/tra5.jpg')}}" alt="Smoothies" data-was-processed="true">
                            </div>
                            <div class="cate-content">
                                <h3 class="title_cate_">Smoothies</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <a class="image scale_hover" href="#" title="Smoothies" tabindex="0">
                            <div class="div_image">
                                <img class="image_cate_thumb lazyload loaded" src="{{asset('fontend/images/tra6.jpg')}}" alt="Smoothies" data-was-processed="true">
                            </div>
                            <div class="cate-content">
                                <h3 class="title_cate_">Smoothies</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section 1-->
    <section class="awe-section-2">
        <section class="section_why clearfix lazyload" data-was-processed="true" style="background-image: url({{asset('fontend/images/bg_why.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading">
                            <h2>
                                <span> Tại sao chọn chúng tôi</span>
                            </h2>
                            <p class="text_small">Với những nghệ nhân rang tâm huyết và đội ngũ tài năng cùng những câu chuyện trà đầy cảm hứng, ngôi nhà Tea House là không gian dành riêng cho những ai trót yêu say đắm hương vị của những lá trà tuyệt hảo.</p>
                        </div>
                        <div class="wrap_item">
                            <div class="col-item-srv">
                                <div class="service_item_ed">
                                    <span class="iconx">
                                        <img alt="Giá cả phải chăng" src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/icon_why_1.png?1616141527684">
                                    </span>
                                    <div class="content_srv">
                                        <span class="title_service">Giá cả phải chăng</span>
                                        <span class="content_service">Cam kết chỉ cung cấp cà phê có nguồn gốc được kiểm soát chất lượng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-item-srv">
                                <div class="service_item_ed">
                                    <span class="iconx">
                                        <img alt="Hương vị tuyệt hảo" src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/icon_why_2.png?1616141527684">
                                    </span>
                                    <div class="content_srv">
                                        <span class="title_service">Hương vị tuyệt hảo</span>
                                        <span class="content_service">Những đọt trà được lựa chọn cẩn thận ngay từ lúc đang ngâm mình trong sương</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-item-srv">
                                <div class="service_item_ed">
                                    <span class="iconx">
                                        <img alt="Sản phẩm tự nhiên" src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/icon_why_3.png?1616141527684">
                                    </span>
                                    <div class="content_srv">
                                        <span class="title_service">Sản phẩm tự nhiên</span>
                                        <span class="content_service">Cam kết chỉ cung cấp lá trà có nguồn gốc được kiểm soát chất lượng chặt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

        </section>
    </section>

    <!--section 2-->
    <section class="awe-section-3">
        <div class="section_tab_feature">
            <div class="container">
                <div class="row">
                    <!-- <div class="section tabwrap1"> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="heading cleafix a-center">
                            <h2 class="a-center">
                                Menu hôm nay
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="section_tour-inbound ">
                    <!--Carousel Wrapper-->
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="navbar-pills tabs tabs-title">
                            <ul class="nav nav-tabs">

                                <li class=" abc active"><a href="#home">Trà Hoa Quả</a></li>
                                <li class="abc"><a href="#menu1">Trà Sữa</a></li>
                                <li class="abc"><a href="#menu2">Smoothies</a></li>
                                <li class="abc"><a href="#menu3">Bánh Ngọt</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div id="home" class="tab-pane in active">
                                <div class="container">
                                    <div class="row">
                                        <?php $ct = \App\Model\Product::where('categories_id', '=', 5)->select('*')->get()?>

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
                            <div id="menu1" class="tab-pane">
                                <div class="container">
                                    <div class="row">
                                        <?php $ct = \App\Model\Product::where('categories_id', '=', 6)->select('*')->get()?>
                                            @foreach($ct as $cat2)
                                                <div class="col-md-3">
                                                    {{--                                            <form action="{{route('add-cart', [$p->id])}}" method="post" class="variants product-action" data-id="{{$p->id}}" enctype="multipart/form-data">--}}
                                                    <div class="item_product_main">
                                                        <div class="product-thumbnail">
                                                            <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $cat2->id]) }}" title="{{$cat2->name}}" tabindex="0">
                                                                <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $cat2->image))}}" alt="{{$cat2->name}}    " data-was-processed="true">
                                                            </a>
                                                            <div class="action1">
                                                                <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                                <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$cat2->id}}" title="Thêm vào giỏ hàng"  >
                                                                    <a href="{{route('add-cart',[$cat2->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                                </button>
                                                                {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="product-name"><a href="{{URL::to('/details')}}" title="Bông lan cuộn trà xanh" tabindex="0">{{$cat2->name}}</a></h3>
                                                            <div class="price-box">
                                                                <span class="gia" >Giá: </span>{{number_format($cat2->price)}}  VNĐ



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane">
                                <div class="container">
                                    <div class="row">
                                        <?php $ct = \App\Model\Product::where('categories_id', '=', 4)->select('*')->get()?>
                                        @foreach($ct as $cat3)
                                            <div class="col-md-3">
                                                {{--                                            <form action="{{route('add-cart', [$p->id])}}" method="post" class="variants product-action" data-id="{{$p->id}}" enctype="multipart/form-data">--}}
                                                <div class="item_product_main">
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover" href="{{ route('details.show', ['id' => $cat3->id]) }}" title="{{$cat3->name}}" tabindex="0">
                                                            <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $cat3->image))}}" alt="{{$cat3->name}}    " data-was-processed="true">
                                                        </a>
                                                        <div class="action1">
                                                            <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                            <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$cat3->id}}" title="Thêm vào giỏ hàng"  >
                                                                <a href="{{route('add-cart',[$cat3->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                            </button>
                                                            {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a href="{{URL::to('/details')}}" title="Bông lan cuộn trà xanh" tabindex="0">{{$cat3->name}}</a></h3>
                                                        <div class="price-box">
                                                            <span class="gia" >Giá: </span>{{number_format($cat3->price)}}  VNĐ



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane">
                                <div class="container">
                                    <div class="row">
                                        <?php $ct = \App\Model\Product::where('categories_id', '=', 3)->select('*')->get()?>
<!--                                        --><?php //dd($ct);?>
                                        @foreach($ct as $c)
                                        <div class="col-md-3">
                                            <div class="item_product_main">
                                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-20240850" enctype="multipart/form-data">
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"href="{{ route('details.show', ['id' => $c->id]) }}"  title="Bông lan cuộn trà xanh" tabindex="0">
                                                            <img class="lazyload loaded" src="{{ asset('storage'. str_replace('public', '', $c->image))}}" alt="Bông lan cuộn trà xanh" data-was-processed="true">
                                                        </a>
                                                        <div class="action1">
                                                            <input type="hidden" name="variantId" value="39972961" tabindex="0">
                                                            <button  class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active" data-id="{{$c->id}}" title="Thêm vào giỏ hàng"  >
                                                                <a href="{{route('add-cart',[$c->id])}}" style="color:white;">Thêm vào giỏ hàng</a>
                                                            </button>
                                                            {{--                                                            <button type="button" class="add-to-cart-btn btn btn-views btn-primary">Add to Cart</button>--}}

                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a href="{{ route('details.show', ['id' => $c->id]) }}"  title="Bông lan cuộn trà xanh" tabindex="0">{{$c->name}}</a></h3>
                                                        <div class="price-box">


                                                            <span class="gia">Giá:</span> {{number_format($c->price)}}₫


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
                        <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                    <!--/.Carousel Wrapper-->

                </div>

            </div>

        </div>

    </section>
    <!--section 3 -->
    <section class="awe-section-4">
        <div class="section_time_open">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-xl-7 col-lg-7 col-12 left">
                        <div class="left_module">
                            <div class="heading a-left">
                                <h2 class="title_tab">
                                    Thời gian mở cửa
                                </h2>
                            </div>
                            <div class="content_module">
                                <p>
                                    “Cà phê nhé" - Một lời hẹn rất riêng của người Việt. Một lời ngỏ mộc mạc để mình ngồi lại bên nhau và sẻ chia câu chuyện của riêng mình.
                                </p>
                                <span class="time">T2 - T6: 8h30 - 21h30</span>
                                <span class="time">T7 - CN: 8h00 - 22h00</span>
                                <a  class="btn_booknow" title="Đặt bàn ngay">Đặt bàn ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-12 bg_right hidden-xs hidden-sm">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section 4 -->
<section class="awe-section-6">
    <div class="section_blog_feature lazyload" data-src="//bizweb.dktcdn.net/100/415/010/themes/818624/assets/bg_blog.jpg?1620009248327" data-was-processed="true" style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/010/themes/818624/assets/bg_blog.jpg?1620009248327&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12">
                    <div class="heading a-center">
                        <h2><a href="/tin-tuc" title="Tin tức nổi bật">Tin tức nổi bật</a></h2>
                    </div>
                </div>
            </div>
            <div class="content-blog-index slickblogaa clearfix row blogs-mobile d-sm-none d-md-none d-lg-none d-xl-none">
                <div class="col-xl-4 col-lg-4 col-md-4 col-10">
                    <div class="itemblog_big ">
                        <div class="thumb">
                            <a class="image-blog scale_hover" href="/nham-nhi-ca-phe-bao-lau-nhung-ban-tan-mat-nhin-ky-xem-hat-ca-phe-chua" title="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?">
                                <img class="imageload lazyload"                                         src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                     data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087" alt="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?">

                            </a>
                        </div>
                        <div class="content-blog">
                            <h3>
                                <a href="/nham-nhi-ca-phe-bao-lau-nhung-ban-tan-mat-nhin-ky-xem-hat-ca-phe-chua" title="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?">Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?</a>
                            </h3>
                            <div class="posts">

                                <p>
                                    Cốc cafe vị đăng đắng, lẫn thêm chút ngọt bùi của sữa đặc sao mà gây nghiện đến thế. Không chỉ cuốn hút ở mùi vị, một cốc cafe sáng còn giúp ngày mới tràn đầy năng lượng với người trẻ, sẵn sàng ch...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-10">
                    <div class="itemblog_big">
                        <div class="thumb">
                            <a class="image-blog scale_hover" href="/uong-1-4-tach-ca-phe-moi-ngay-giup-benh-nhan-ung-thu-keo-dai-su-song" title="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống">

                                <img class="imageload lazyload"                                         src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                     data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-5.jpg?v=1608884590463" alt="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống">

                            </a>
                        </div>

                        <div class="content-blog">
                            <h3>
                                <a href="/uong-1-4-tach-ca-phe-moi-ngay-giup-benh-nhan-ung-thu-keo-dai-su-song" title="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống">Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống</a>
                            </h3>
                            <div class="posts">

                                <p>
                                    Uống từ một đến bốn tách cà phê mỗi ngày có thể giúp bệnh nhân ung thư đại trực tràng giai đoạn cuối sống lâu hơn và làm chậm sự tiến triển của bệnh. Phát hiện này được các nhà khoa học rút ra từ ...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-10">
                    <div class="itemblog_big">
                        <div class="thumb">
                            <a class="image-blog scale_hover" href="/dung-coc-giay-dung-ca-phe-nong-thu-ban-uong-se-khong-chi-la-cafein-ma-con-day-ap-nhung-thu-dang-so-nay" title="Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này">

                                <img class="imageload lazyload"                                         src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                     data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-3.jpg?v=1608884547463" alt="Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này">

                            </a>
                        </div>

                        <div class="content-blog">
                            <h3>
                                <a href="/dung-coc-giay-dung-ca-phe-nong-thu-ban-uong-se-khong-chi-la-cafein-ma-con-day-ap-nhung-thu-dang-so-nay" title="Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này">Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này</a>
                            </h3>
                            <div class="posts">

                                <p>
                                    Đối với nhiều người, một ngày mới chỉ có thể khởi đầu tốt đẹp bằng một tách cà phê nóng. Nhờ cafein, bộ não dường như không thể nhận được tín hiệu "mệt mỏi", từ đó tạo cho con người ta một nguồn n...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-10">
                    <div class="itemblog_big">
                        <div class="thumb">
                            <a class="image-blog scale_hover" href="/uong-tra-co-mat-ngu-khong" title="Uống trà có mất ngủ không?">

                                <img class="imageload lazyload"                                         src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                     data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-2.jpg?v=1608884443517" alt="Uống trà có mất ngủ không?">

                            </a>
                        </div>

                        <div class="content-blog">
                            <h3>
                                <a href="/uong-tra-co-mat-ngu-khong" title="Uống trà có mất ngủ không?">Uống trà có mất ngủ không?</a>
                            </h3>
                            <div class="posts">

                                <p>
                                    Uống trà có mất ngủ không? Đây có lẽ là câu hỏi kinh điển, nhất là với những người mới tập uống trà. Có những người chỉ nhấp một chén trà thôi cũng có thể khiến họ trằn trọc khó ngủ cả đêm. Nhưng ...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-10">
                    <div class="itemblog_big">
                        <div class="thumb">
                            <a class="image-blog scale_hover" href="/ca-phe-hay-the-duc-lua-chon-nao-giup-danh-bai-con-buon-ngu-tot-hon" title="Cà phê hay thể dục: Lựa chọn nào giúp đánh bại cơn buồn ngủ tốt hơn?">

                                <img class="imageload lazyload"                                         src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                     data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-6.jpg?v=1608884367517" alt="Cà phê hay thể dục: Lựa chọn nào giúp đánh bại cơn buồn ngủ tốt hơn?">

                            </a>
                        </div>

                        <div class="content-blog">
                            <h3>
                                <a href="/ca-phe-hay-the-duc-lua-chon-nao-giup-danh-bai-con-buon-ngu-tot-hon" title="Cà phê hay thể dục: Lựa chọn nào giúp đánh bại cơn buồn ngủ tốt hơn?">Cà phê hay thể dục: Lựa chọn nào giúp đánh bại cơn buồn ngủ tốt hơn?</a>
                            </h3>
                            <div class="posts">

                                <p>
                                    Có hai trường phái để đánh bại những cơn buồn ngủ vào sáng sớm và đầu giờ chiều, hai thời điểm trong ngày mà bạn cần lấy lại sự tỉnh táo của mình nhất. Một số người sẽ chọn giải pháp nhanh chóng v...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="">
                <div class="slide-news-popular hidden-xs d-sm-block d-md-block d-lg-block d-xl-block">
                    <div class="blog_item">
                        <div class="itemblog_big">
                            <div class="thumb">
                                <a class="image-blog scale_hover" href="/nham-nhi-ca-phe-bao-lau-nhung-ban-tan-mat-nhin-ky-xem-hat-ca-phe-chua" title="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?" tabindex="0">
                                    <img
                                        class="imageload lazyload loaded"
                                        src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                        data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                        alt="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?"
                                        data-was-processed="true"
                                    />
                                </a>
                            </div>

                            <div class="content-blog">
                                <h3>
                                    <a href="/nham-nhi-ca-phe-bao-lau-nhung-ban-tan-mat-nhin-ky-xem-hat-ca-phe-chua" title="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?" tabindex="0">
                                        Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?
                                    </a>
                                </h3>
                                <div class="posts">
                                    <p>
                                        Cốc cafe vị đăng đắng, lẫn thêm chút ngọt bùi của sữa đặc sao mà gây nghiện đến thế. Không chỉ cuốn hút ở mùi vị, một cốc cafe sáng còn giúp ngày mới tràn đầy năng lượng với người trẻ, sẵn sàng ch...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_item" >
                        <div class="itemblog_big">
                            <div class="thumb">
                                <a class="image-blog scale_hover" href="/uong-1-4-tach-ca-phe-moi-ngay-giup-benh-nhan-ung-thu-keo-dai-su-song" title="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống" tabindex="0">
                                    <img
                                        class="imageload lazyload loaded"
                                        src="//bizweb.dktcdn.net/100/415/010/articles/untitled-5.jpg?v=1608884590463"
                                        data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-5.jpg?v=1608884590463"
                                        alt="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống"
                                        data-was-processed="true"
                                    />
                                </a>
                            </div>

                            <div class="content-blog">
                                <h3>
                                    <a href="/uong-1-4-tach-ca-phe-moi-ngay-giup-benh-nhan-ung-thu-keo-dai-su-song" title="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống" tabindex="0">
                                        Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống
                                    </a>
                                </h3>
                                <div class="posts">
                                    <p>
                                        Uống từ một đến bốn tách cà phê mỗi ngày có thể giúp bệnh nhân ung thư đại trực tràng giai đoạn cuối sống lâu hơn và làm chậm sự tiến triển của bệnh. Phát hiện này được các nhà khoa học rút ra từ ...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_item">
                        <div class="itemblog_big">
                            <div class="thumb">
                                <a
                                    class="image-blog scale_hover"
                                    href="/dung-coc-giay-dung-ca-phe-nong-thu-ban-uong-se-khong-chi-la-cafein-ma-con-day-ap-nhung-thu-dang-so-nay"
                                    title="Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này"
                                    tabindex="0"
                                >
                                    <img
                                        class="imageload lazyload loaded"
                                        src="//bizweb.dktcdn.net/100/415/010/articles/untitled-3.jpg?v=1608884547463"
                                        data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-3.jpg?v=1608884547463"
                                        alt="Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này"
                                        data-was-processed="true"
                                    />
                                </a>
                            </div>

                            <div class="content-blog">
                                <h3>
                                    <a href="/dung-coc-giay-dung-ca-phe-nong-thu-ban-uong-se-khong-chi-la-cafein-ma-con-day-ap-nhung-thu-dang-so-nay" title="Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này" tabindex="0">
                                        Dùng cốc giấy đựng cà phê nóng, thứ bạn uống đầy ắp những thứ đáng sợ này
                                    </a>
                                </h3>
                                <div class="posts">
                                    <p>
                                        Đối với nhiều người, một ngày mới chỉ có thể khởi đầu tốt đẹp bằng một tách cà phê nóng. Nhờ cafein, bộ não dường như không thể nhận được tín hiệu "mệt mỏi", từ đó tạo cho con người ta một nguồn n...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_item">
                        <div class="itemblog_big">
                            <div class="thumb">
                                <a class="image-blog scale_hover" href="/nham-nhi-ca-phe-bao-lau-nhung-ban-tan-mat-nhin-ky-xem-hat-ca-phe-chua" title="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?" tabindex="0">
                                    <img
                                        class="imageload lazyload loaded"
                                        src="https://bizweb.dktcdn.net/100/415/010/articles/untitled-2.jpg?v=1608884443517"
                                        data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-1.jpg?v=1608884901087"
                                        alt="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?"
                                        data-was-processed="true"
                                    />
                                </a>
                            </div>

                            <div class="content-blog">
                                <h3>
                                    <a href="/nham-nhi-ca-phe-bao-lau-nhung-ban-tan-mat-nhin-ky-xem-hat-ca-phe-chua" title="Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?" tabindex="0">
                                        Nhâm nhi cà phê bao lâu nhưng bạn tận mắt nhìn kỹ xem hạt cà phê chưa?
                                    </a>
                                </h3>
                                <div class="posts">
                                    <p>
                                        Cốc cafe vị đăng đắng, lẫn thêm chút ngọt bùi của sữa đặc sao mà gây nghiện đến thế. Không chỉ cuốn hút ở mùi vị, một cốc cafe sáng còn giúp ngày mới tràn đầy năng lượng với người trẻ, sẵn sàng ch...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_item" >
                        <div class="itemblog_big">
                            <div class="thumb">
                                <a class="image-blog scale_hover" href="/uong-1-4-tach-ca-phe-moi-ngay-giup-benh-nhan-ung-thu-keo-dai-su-song" title="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống" tabindex="0">
                                    <img
                                        class="imageload lazyload loaded"
                                        src="//bizweb.dktcdn.net/100/415/010/articles/untitled-5.jpg?v=1608884590463"
                                        data-src="//bizweb.dktcdn.net/100/415/010/articles/untitled-5.jpg?v=1608884590463"
                                        alt="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống"
                                        data-was-processed="true"
                                    />
                                </a>
                            </div>

                            <div class="content-blog">
                                <h3>
                                    <a href="/uong-1-4-tach-ca-phe-moi-ngay-giup-benh-nhan-ung-thu-keo-dai-su-song" title="Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống" tabindex="0">
                                        Uống 1-4 tách cà phê mỗi ngày giúp bệnh nhân ung thư kéo dài sự sống
                                    </a>
                                </h3>
                                <div class="posts">
                                    <p>
                                        Uống từ một đến bốn tách cà phê mỗi ngày có thể giúp bệnh nhân ung thư đại trực tràng giai đoạn cuối sống lâu hơn và làm chậm sự tiến triển của bệnh. Phát hiện này được các nhà khoa học rút ra từ ...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
    <!--section 5 -->
<section class="awe-section-7">
    <div class="section_picture">
        <div class="ins_content slickpicture slick-initialized slick-slider">
            <div aria-live="polite" class="slick-list draggable" >
                <div class="slick-track" role="listbox"style="opacity: 1;width: 1690px;transform: translate3d(0px, 0px, 0px);" >
                    <div class="item slick-slide slick-active" style="width: 338px;">
                        <a class="img_" href="#" title="Ảnh 2" tabindex="0">
                            <img class="lazyload img-responsive loaded" src="https://bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_1.jpg?1620009248327" data-src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_2.jpg?1620009248327" alt="Template Tea House" data-was-processed="true">
                        </a>
                    </div>
                    <div class="item slick-slide slick-active" style="width: 338px;">
                        <a class="img_" href="#" title="Ảnh 2" tabindex="0">
                            <img class="lazyload img-responsive loaded" src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_2.jpg?1620009248327" data-src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_2.jpg?1620009248327" alt="Template Tea House" data-was-processed="true">
                        </a>
                    </div>
                    <div class="item slick-slide slick-active" style="width: 338px;">
                        <a class="img_" href="#" title="Ảnh 3" tabindex="0">
                            <img class="lazyload img-responsive loaded" src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_3.jpg?1620009248327" data-src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_3.jpg?1620009248327" alt="Template Tea House" data-was-processed="true">
                        </a>
                    </div>
                    <div class="item slick-slide slick-active"style="width: 338px;" >
                        <a class="img_" href="#" title="Ảnh 4" tabindex="0">
                            <img class="lazyload img-responsive loaded" src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_4.jpg?1620009248327" data-src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_4.jpg?1620009248327" alt="Template Tea House" data-was-processed="true">
                        </a>
                    </div>
                    <div class="item slick-slide slick-active" style="width: 338px;">
                        <a class="img_" href="#" title="Ảnh 5" tabindex="0">
                            <img class="lazyload img-responsive loaded" src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_5.jpg?1620009248327" data-src="//bizweb.dktcdn.net/thumb/large/100/415/010/themes/818624/assets/picture_5.jpg?1620009248327" alt="Template Tea House" data-was-processed="true">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section 6 -->
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".a").click(function(){
                alert("The paragraph was clicked.");
            });
        });
    </script>
@endsection
@endsection
