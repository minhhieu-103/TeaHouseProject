{{--<h3> Xin chào {{$c_name}}</h3>--}}
{{--<p>Cảm ơn Anh/chị đã đặt hàng tại <strong>Template Tea House <img  style="width: 125px " src="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/logo.png?1612509872226" alt=""></strong></p>--}}
{{--<p>Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.</p>--}}
{{--<h3> Mã đơn hàng : {{$order->customer->id}}</h3>--}}
{{--<h3> Ngày đơn hàng : {{$order->created_at}}</h3>--}}
{{--<hr>--}}
{{--<H1 style="color: red;text-align: center" class="text-center">Chi tiết đơn hàng</H1>--}}
{{--<table  border="1" cellpadding="10" cellspacing="0" width="100%">--}}
{{--    <thead style="background: green;color:white;">--}}
{{--    <tr>--}}
{{--                <th width="5%">STT</th>--}}
{{--        <th width="25%">Tên Sản Phẩm</th>--}}
{{--        <th width="15%">Giá</th>--}}
{{--        <th width="14%">Số lượng</th>--}}
{{--        <th width="10%">Tổng</th>--}}
{{--        --}}{{--                            <th width="10%"><a href="{{URL::to('cart/destroy')}}" style="color: red"><i class="fas fa-trash-alt"></i></a></th>--}}
{{--    </tr>--}}
{{--    </thead>--}}


{{--        <tbody>--}}

{{--        <?php  $stt = 1;?>--}}
{{--        @foreach(Cart::content() as $row)--}}

{{--        --}}{{--                            {{dd($row)}}--}}
{{--        <tr style=" font-family: cursive;--}}
{{--        font-weight: 700;--}}
{{--        padding-right: 5px;--}}
{{--        font-size: 16px;">--}}
{{--            <td style="font-family: cursive;--}}
{{--text-align: left;--}}
{{--font-size: 18px;">{{$stt}}</td>--}}
{{--            <td style="font-family: cursive;--}}


{{--text-align: left;--}}

{{--font-size: 18px;--}}
{{--">{{$row->name}}</td>--}}
{{--            <td style="font-family: cursive;--}}
{{--text-align: left;--}}
{{--font-size: 18px;text-align: center;--}}
{{--">{{number_format($row->price)}} đ</td>--}}

{{--            <td><img width="100px" src="{{$row->options[0]}}" alt=""></td>--}}
{{--            --}}{{--                            <td> <p><img src="{{asset(('storage/'.$row->image.'jpg'))}}" class="img-responsive" width="50"></p></td>--}}
{{--            <td style="margin-left: 2px;font-family: cursive;--}}
{{--text-align: left;--}}
{{--font-size: 18px;--}}
{{--"><input  style="width: 100%;text-align: center" class="text-center "value="{{$row->qty}}"min="1" max="50"></td>--}}
{{--            <td style="text-align: center;">{{ number_format($row->subtotal) }} đ</td>--}}
{{--        </tr>--}}
{{--        <?php $stt++;?>--}}
{{--        @endforeach--}}

{{--        </tbody>--}}

{{--</table>--}}

{{--<table class="table float-right" style="float: right ;padding:20px">--}}
{{--    <tbody><tr style=" font-family: cursive;--}}
{{--        font-weight: 700;--}}
{{--        padding-right: 5px;--}}
{{--        font-size: 16px;">--}}
{{--        <td class="total-text f-left">Tổng tạm tính :</td>--}}
{{--        <td class="txt-right totals_price price_end f-right" style="font-family: cursive;--}}


{{--text-align: left;--}}

{{--font-size: 18px;--}}
{{--color: red;">{{Cart::subtotal(0)}} đ</td>--}}
{{--    </tr>--}}
{{--    <tr style=" font-family: cursive;--}}
{{--        font-weight: 700;--}}
{{--        padding-right: 5px;--}}
{{--        font-size: 16px;">--}}
{{--        <td class="total-text f-left" style="font-family: cursive;--}}


{{--text-align: left;--}}

{{--font-size: 18px;--}}
{{--">Giảm giá(5%):</td>--}}
{{--        <td class="txt-right totals_price price_end f-right" style="font-family: cursive;--}}


{{--            text-align: left;--}}

{{--            font-size: 18px;color: red">{{Cart::tax(0)}} đ</td>--}}
{{--    </tr>--}}
{{--    <tr style=" font-family: cursive;--}}
{{--        font-weight: 700;--}}
{{--        padding-right: 5px;--}}
{{--        font-size: 16px;">--}}
{{--        <td class="total-text f-left">Tổng tiền :</td>--}}
{{--        <td class="txt-right totals_price price_end f-right" style="font-family: cursive;--}}


{{--text-align: left;--}}

{{--font-size: 18px;--}}
{{--color: red;">{{ Cart::total(0) }} đ</td>--}}
{{--    </tr>--}}

{{--    </tbody></table>--}}
{{--    <p style="padding:0 10px"> Ghi chú</p>--}}

{{--<div style="padding:58px 10px">--}}

{{--    <p style="height:50px">--}}
{{--      <span style="float:left;margin-top:14px;margin-right:10px">Để kiểm tra trạng thái đơn hàng, Anh/chị vui--}}
{{--        lòng:</span><span style="margin-top:25px;float:left"><span style="padding:14px 35px;background:#357ebd"><a href="http://127.0.0.1:8000/login/customer" style="font-size:16px;text-decoration:none;color:#fff" target="_blank">Đăng nhập vào tài khoản</a></span></span>--}}
{{--    </p>--}}

{{--    <div style="clear:both"></div>--}}
{{--    <p style="margin:30px 0">Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại <a href="mailto:mailinh13a@gmail.com" style="color:#357ebd" target="_blank">mailinh13a@gmail.com</a></p>--}}
{{--    <p style="text-align:right"><i>Trân trọng,</i></p>--}}
{{--    <p style="text-align:right"><strong>Ban quản trị cửa hàng Template Tea House</strong></p>--}}
{{--</div>--}}
