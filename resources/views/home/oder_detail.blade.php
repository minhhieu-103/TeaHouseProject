@extends('layouts.main')
@section('title', 'Danh sach the loai')
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

                        <li><strong><span>{{$products->name}}</span></strong></li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product detail-main">
        <div class="section">
            <div class="detail-product section">
                <div class="bg_product" style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/010/themes/806477/assets/bg-top-product.jpg?1616141527684&quot;);">
                    <div class="container">
                        <div class="row">
                            <div class="product-detail-left product-images col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-5-pro">
                                <div class="wrapbb">
                                    <div class="slider-big-video clearfix margin-bottom-20">
                                        <div class="slider slider-for slick-initialized slick-slider">
                                            <div aria-live="polite" class="slick-list draggable">
                                                <div class="slick-track" role="listbox" style="opacity: 1; width: 980px;">
                                                    <a class="img_bigg slick-slide slick-current slick-active" href="{{ asset('storage'. str_replace('public', '', $products->image))}}" title="Click để xem" rel="lightbox-demo" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option"
                                                       aria-describedby="slick-slide10" style="width: 411px; position: relative; left: 0px; top: -41px; z-index: 999; opacity: 1;">
                                                        <img src="{{ asset('storage'. str_replace('public', '', $products->image))}}" data-src="{{ asset('storage'. str_replace('public', '', $products->image))}}" alt="Trà Phúc bồn tử" data-image="{{ asset('storage'. str_replace('public', '', $products->image))}}"
                                                             class=" mx-auto d-block " data-was-processed="true">
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-lg-7-pro details-pro">
                                <form enctype="multipart/form-data" id="add-to-cart-form" action="{{URL::to('/cart-add',[$products->id])}}"method="post" class="form_background form-inline margin-bottom-0">
                                    <div class="fw w_100">
                                        <div class="title_p clearfix">
                                            <h1 class="title-product">{{$products-> name}}</h1>
                                        </div>
                                        <input type="hidden" class="product_id" value="{{$products->name}}">
                                        <div class="product-summary">
                                            <div class="rte">
                                                <em>{{$products->desc}}</em>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-product">
                                        <div class="box-variant clearfix  hidden ">
                                            <input type="hidden" name="product_id" value="{{$products->id}}">
                                        </div>
                                        <div class="price-box clearfix">

                                            <span class="gia">Giá:</span>
                                            <div class="special-price">
                                                <div class="price-box">
                                                    <input class="qty-input price product-price" value="GIÁ: {{number_format($products ->price)}}₫" >
                                                </div>

                                            </div>
                                            <!-- Giá -->
                                        </div>
                                        <div class="clearfix form-group ">
                                            <div class="custom custom-btn-number show">
                                                <label class="sl section">Số lượng:</label>
                                                <div class="custom input_number_product custom-btn-number form-control">
                                                    <button class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 2 ) result.value--;return false;" type="button"><i class="fas fa-minus"></i></button>
                                                    <input type="text" id="qtym" name="quantity" value="{{$products->qty}}" maxlength="3" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                                    <button class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="btn-mua button_actions clearfix">
                                                <button type="submit"  href="{{route('add-cart',[$products->id])}}" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart" data-id="{{$products->id}}">
{{--                                                    <span class="txt-main text_1">Thêm vào giỏ hàng</span>--}}
                                                    <a href="{{route('add-cart',[$products->id])}}" style="color:black" class="txt-main text_1">Thêm vào giỏ hàng</a>

                                                </button>
                                                <button  type="submit" class="btn fast btn_base btn_add_cart btn-cart  add_to_cart " data-id="{{$products->id}}" title="Thêm vào giỏ hàng"  >
                                                    <a href="{{route('add-cart',[$products->id])}}" style="color:white" class="txt-main text_1">Mua Ngay</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="policy_product">
                                        <p><b>Giao hàng miễn phí:</b> Áp dụng đơn hàng &gt; 200.000đ</p>
                                        <p><b>Thanh toán tại nhà:</b> Nhanh chóng và an toàn</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="tab_h">
                                <div class="section bg_white">
                                    <div class="product-tab e-tabs not-dqtab">
                                        <ul class="tabs tabs-title clearfix">
                                            <li class="tab-link" onclick="openCity(event, 'London')">
                                                <h3>Mô tả sản phẩm</h3>
                                            </li>
                                            <li class="tab-link" onclick="openCity(event, 'Paris')">
                                                <h3>Chính sách bảo hành</h3>
                                            </li>
                                        </ul>

                                        <hr>

                                        <div id="London" class="tabcontent">
                                            <div id="tab-1">
                                                <div class="rte product_getcontent">
                                                    <div id="content">
                                                        <p>Vải là một loại quả được nhiều người yêu thích không chỉ khi ăn quả hay khi chế biến thành món trà vải thơm ngon. Nhân lúc mùa vải đang rộ các bạn hãy thử tự làm cho mình những cốc trà vải thật ngon
                                                            để thưởng thức trong hè nha.</p>
                                                        <p>Nguyên liệu pha trà vải cho 3 người :</p>
                                                        <p>2 gói trà lipton túi lọc</p>
                                                        <p>-300ml nước sôi</p>
                                                        <p>-20g đường ( khoảng 2 thìa canh)</p>
                                                        <p>-1 lon trái vải đóng hộp hoặc 10 quả vải.</p>
                                                        <p>-1 chén đá lạnh</p>
                                                        <p>-Nếu sử dụng vải đóng hộp, khi pha trà vải bạn cho thêm 3 thìa canh nươc vải đóng hộp vào bình trước khi lắc.</p>
                                                        <p>-Đối với trà túi lọc bạn nên chọn loại có mùi nhẹ để không át đi mùi vải.</p>
                                                        <p>-Bạn có thể tạo hương vị cho món trà vải bằng cách cho thêm 1 chút nước cốt chanh hoặc 1 thìa sữa đặc, giảm lượng đường đi nếu muốn.</p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div id="Paris" class="tabcontent" style="display:none">
                                            <div id="tab-2">
                                                <div class="rte">
                                                    Nội dung tùy chỉnh viết ở đây
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Có thể bạn thích -->
                            <div class="section_like clearfix margin-bottom-30 ">
                                <div class="heading clearfix a-center ">
                                    <h2>
                                        <a href="san-pham-noi-bat " title="Có thể bạn thích ">Có thể bạn thích</a>
                                    </h2>
                                </div>
                                <div class="row">
                                    <?php $pro =\App\Model\Product::where('categories_id', '=', 4)->select('*')->get()?>
                                    @foreach($pro as $p)
                                            <div class="col-md-3">
                                                                            <form action="{{route('add-cart', [$p->id])}}" method="post" class="variants product-action" data-id="{{$p->id}}" enctype="multipart/form-data">
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
                                        @endforeach
                                </div>
                            </div>
                            <!-- End Có thể bạn thích-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
