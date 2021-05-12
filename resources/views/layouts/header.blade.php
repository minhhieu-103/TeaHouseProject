 <div class="topbar d-none d-lg-block d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6  d-none d-lg-block d-xl-block">
                    <div class="hotline">
                        <p>
                            <i><img src="{{asset('fontend/images/i_phone.png')}}" alt=""></i> Hotline :
                            <a class="fone"> 1800 6759</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block d-xl-block">
                    <div class="header_r">
                        <div class="cartsearch">
                            <div class="searchhd">
                                <span><i><img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/i_search.png?1612509872226" alt="Template Tea House"></i> Tìm kiếm</span>
                                <form action="{{URL::to('/search')}}" method="get" class="input-group search-bar" role="search">
                                    <input type="search" name="search"  placeholder="Tìm kiếm..." class="input-group-field auto-search">
                                    <button type="submit" class="visible_index btn icon-fallback-text">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>

                               @if(Auth::guard('loyal_customer')->user() != NULL )
                            <div class="accout  d-none d-lg-block d-xl-block">
                                <span><i><img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/i_user.png?1612509872226" alt="Template Tea House"></i>Tài khoản</span>
                                      <div class="group_ac">
                                    <a  href="/account"class="btnx" href="" >{{Auth::guard('loyal_customer')->user()->name }}</a>
                                          <div class="logout">

                                                  <a href="{{ url('/logout/customer') }}" class="btn btn-default btn-flat"
                                                     onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                      {{ trans('adminlte_lang::message.signout') }}
                                                  </a>

                                                  <form id="logout-form" action="{{ url('/logout/customer') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                      <input type="submit" value="logout" style="display: none;">
                                                  </form>


                                          </div>

                                </div>

                            </div>
                            @else
                                <div class="accout  d-none d-lg-block d-xl-block ">
                                    <span><i><img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/i_user.png?1612509872226" alt="Template Tea House"></i>Tài khoản</span>
                                    <div class="group_ac">
                                        <a href="/login/customer">Đăng Nhập</a>
                                        <a href="/register/customer">Đăng kí</a>
                                    </div></div>
                            @endif

                            <div class="carthd">

                                <div class="mini-cart text-xs-center">
                                    <div class="heading-cart cart_header">
                                        <a class="img_hover_cart" href="{{'/cart'}}" title="Giỏ hàng">
                                            <div class="icon_hotline">
                                                <i>
                                                    <img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/i_cart.png?1612509872226" alt="Template Tea House">
                                                    <span class="count_item count_item_pr">{{Cart::count()}}</span>
                                                </i>

                                                <span class="bolds cartext hidden-xs">Giỏ hàng</span>
                                            </div>
                                        </a>
                                    </div>
{{--                                    <div class="top-cart-content">--}}
{{--                                        <ul id="cart-sidebar" class="mini-products-list count_li">--}}
{{--                                            <div class="no-item">--}}
{{--                                                <p>Không có sản phẩm nào.</p>--}}
{{--                                            </div>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar-->
    <div class="wrapper  d-sm-block d-md-block ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wrap_main  d-none d-lg-block d-xl-block ">
                        <div class="header-nav">
                            <ul class="item_big nav-left">
                                <li class="nav-item active ">
                                    <a class="a-img" href="/">
                                        <span>Trang chủ</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="a-img" href="{{route('gioi-thieu')}}">
                                        <span>Giới thiệu</span>
                                    </a>
                                </li>
                                {{--                            @php($categories = \Modules\Category\Entities\Category::with('model_machines')->orderByDesc('id')->get())--}}

                                <li class="nav-item ">
                                    <a class="a-img" href="{{URL::to('/products')}}">
                                        <span>Sản phẩm</span><i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="item_small hidden-sm hidden-xs">
                                        @foreach($categories as $c)
                                            <li>
                                                <a href="{{ route('products.show', ['id' => $c->id]) }}" title="">{{$c->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                            <ul class="logo_center">
                                <li class="logo">

                                    <a href="/" class="logo-wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                        <img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/logo.png?1612509872226" alt="logo Template Tea House">
                                    </a>
                                    <a href="/" class="logo-wrapper d-none d-sm-block d-md-block d-lg-none d-xl-none">
                                        <img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/logo.png?1612509872226" alt="logo Template Tea House">
                                    </a>

                                </li>
                            </ul>
                            <ul class="item_big nav-right hidden-xs hidden-sm">
                                <li class="nav-item ">
                                    <a class="a-img" href="{{route('tin-tuc')}}">
                                        <span>Tin tức</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="a-img" href="/menu">
                                        <span>Thực đơn</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="a-img" href="/contact">
                                        <span>Liên hệ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--wrapper-->

 <div class="wraphead_mobile clearfix d-sm-block d-md-block d-lg-none d-xl-none">
     <div class="container">
         <div class="row">
             <div class="col-xl-12 col-lg-12">
                 <div class="header-main">
                     <div class="wrap_main d-sm-block d-md-block d-lg-none d-xl-none">
                         <div class="header-nav">
                             <ul class="logo_center">
                                 <li class="logo">

                                     <a href="/" class="logo-wrapper">
                                         <img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/logo_mobi.png?1619412602301" alt="logo Template Tea House">
                                     </a>

                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="header_r">
                         <div class="cartsearch">
                             <div class="carthd">
                                 <div class="mini-cart text-xs-center">
                                     <div class="heading-cart cart_header">
                                         <a class="img_hover_cart" href="{{'/cart'}}" title="Giỏ hàng">
                                             <div class="icon_hotline">
                                                 <i>
                                                     <img src="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/i_cart.png?1612509872226" alt="Template Tea House">
                                                     <span class="count_item count_item_pr">{{Cart::count()}}</span>
                                                 </i>

                                                 <span class="bolds cartext hidden-xs">Giỏ hàng</span>
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="wrapmenu">
                     <div class="section margin-bottom-10 margin-top-15 a-left">
                         <form action="/search" method="get" class="input-group search-bar" role="search">
                             <input type="text" name="query" value="" autocomplete="off" required="" placeholder="Tìm sản phẩm bạn mong muốn..." class="input-group-field auto-search">
                             <button type="submit" class="visible_index btn icon-fallback-text">
                                 <i class="fa fa-search"></i>
                             </button>
                         </form>
                     </div>
                 </div>

             </div>

         </div>
     </div>
 </div>
 <span class="menubutton d-block d-lg-none d-xl-none"><i class="fas fa-bars" ></i></span>
 <div class="wrapmenu_right d-lg">
     <div class="wrapmenu" id="wrapmenu1">
         <div class="wrapmenu_full menumain_full">
             <div class="containers">
                 <!-- Menu mobile -->
                 <div class="contenttop">
                     <div class="section margin-bottom-10 margin-top-20">

                         <a class="btnx" href="/account/login">Đăng nhập</a>&nbsp;/
                         <a href="/account/register">Đăng ký</a>

                     </div>

                 </div>
                 <div class="menu_mobile">
                     <ul class="ul_collections">

                         <li class="level0 level-top parent">
                             <a href="/">Trang chủ</a>

                         </li>

                         <li class="level0 level-top parent">
                             <a href="/gioi-thieu">Giới thiệu</a>

                         </li>

                         <li class="level0 level-top parent">
                             <a href="/collections/all">Sản phẩm</a>

                             <i class="fa fa-plus"></i>
                             <ul class="level0" style="display:none;">

                                 <li class="level1 ">
                                     <a href="/ca-phe"> <span>Cà phê</span> </a>

                                 </li>

                                 <li class="level1 ">
                                     <a href="/banh-ngot"> <span>Bánh ngọt</span> </a>

                                 </li>

                                 <li class="level1 ">
                                     <a href="/smoothies"> <span>Smoothies</span> </a>

                                 </li>

                                 <li class="level1 ">
                                     <a href="/tra-hoa-qua"> <span>Trà hoa quả</span> </a>

                                 </li>

                             </ul>

                         </li>

                         <li class="level0 level-top parent">
                             <a href="/tin-tuc">Tin tức</a>

                         </li>

                         <li class="level0 level-top parent">
                             <a href="/thuc-don">Thực đơn</a>

                         </li>

                         <li class="level0 level-top parent">
                             <a href="/lien-he">Liên hệ</a>

                         </li>

                     </ul>
                 </div>
             </div>
         </div>

     </div>
 </div>
