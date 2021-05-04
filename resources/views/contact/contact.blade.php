<div id=":dz" class="ii gt"><div id=":dy" class="a3s aiL "><div style=",Helvetica Neue,Helvetica,sans-serif;line-height:14pt;padding:20px 0px;font-size:14px;max-width:580px;margin:0 auto"><div class="adM">
            </div><div style="padding:0 10px;margin-bottom:25px"><div class="adM">

                </div><p>Xin chào {{$c_name}}</p>
                <p>Cảm ơn Anh/chị đã đặt hàng tại <strong>Template Tea House <img  style="width: 125px " src="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/logo.png?1612509872226" alt=""></strong></p>
                <p>Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.</p>
            </div>
            <hr>
            <div style="padding:0 10px">

                <table style="width:100%;border-collapse:collapse;margin-top:20px">
                    <thead>
                    <tr>
                        <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Thông tin mua hàng</th>
                        <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Địa chỉ nhận hàng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="padding-right:15px">
                            <table style="width:100%">
                                <tbody>

                                <tr>
                                    <td>{{$customer->name}}</td>
                                </tr>


                                <tr>
                                    <td style="word-break:break-word;word-wrap:break-word"><a  style="color: blue" href="mailto:{{$customer->email}}" target="_blank">{{$customer->email}}</a></td>
                                </tr>


                                <tr>
                                    <td>{{$customer->phone}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table style="width:100%">
                                <tbody>

                                <tr>
                                    <td>{{$customer->name}}</td>
                                </tr>


                                <tr>
                                    <td style="word-break:break-word;word-wrap:break-word;text-transform: uppercase">
                                    {{$customer->address}}
                                </tr>


                                <tr>
                                    <td>{{$customer->phone}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="width:100%;border-collapse:collapse;margin-top:20px">
                    <thead>
                    <tr>
                        <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Phương thức thanh toán</th>
                        <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Phương thức vận chuyển</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="padding-right:15px">Thanh toán khi giao hàng (COD)</td>
                        <td>

                            Giao hàng tận nơi<br>

                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div style="margin-top:20px;padding:0 10px">
                <div style="padding-top:10px;font-size:medium"><strong>Thông tin đơn hàng</strong></div>
                <table style="width:100%;margin:10px 0">
                    <tbody><tr>
                        <td style="width:50%;padding-right:15px">Mã đơn hàng: #{{$customer->id}}</td>
                        <td style="width:50%">Ngày đặt hàng: {{$order->created_at}}</td>
                    </tr>
                    </tbody></table>
                <ul style="padding-left:0;list-style-type:none;margin-bottom:0">

                    <li>
                        <table style="width:100%;border-bottom:1px solid #e4e9eb">
                            <tbody>

                        @foreach(Cart::content()->toArray() as $row)
                            <tr>
                                <td style="width:100%;padding:25px 10px 0px 0" colspan="2">
                                    <div style="float:left;width:80px;height:80px;border:1px solid #ebeff2;overflow:hidden">

                                        <img style="max-width:100%;max-height:100%" width="100px" src="{{asset(str_replace('public', '', $row['options'][0]))}}" alt="" class="CToWUd">


                                    </div>
                                    <div style="margin-left:100px">
                                        <a style="color:#357ebd;text-decoration:none"  >{{$row['name']}}</a>
                                        <p style="color:#678299;margin-bottom:0;margin-top:8px">
                                            Mặc định
                                        </p>
                                        <p style="color:#678299;margin-bottom:0;margin-top:8px">SKU:</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:70%;padding:5px 0px 25px">
                                    <div style="margin-left:100px">
                                       {{ number_format($row['price'])}} đ <span style="margin-left:20px">x {{$row['qty']}}</span>
                                    </div>
                                </td>
                                <td style="text-align:right;width:30%;padding:5px 0px 25px">
                                    {{number_format($row['subtotal'])}} đ</td>
                            </tr>

                        @endforeach
                            </tbody>

                        </table>
                    </li>

                </ul>
                <table style="width:100%;border-collapse:collapse;margin-bottom:50px;margin-top:10px">
                    <tbody><tr>
                        <td style="width:20%"></td>
                        <td style="width:80%">
                            <table style="width:100%;float:right">
                                <tbody>
                                <tr>
                                    <td style="padding-bottom:10px">Giá trừ khuyến mãi:</td>
                                    <td style="font-weight:bold;text-align:right;padding-bottom:10px">
                                        {{Cart::tax(0)}} đ</td>
                                </tr>
                                <tr style="border-top:1px solid #e5e9ec">
                                    <td style="padding-top:10px">Thành tiền</td>
                                    <td style="font-weight:bold;text-align:right;font-size:16px;padding-top:10px ;color: red">
                                        {{Cart::total(0)}} đ</td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
            <div style="clear:both"></div>

            <div style="clear:both"></div>
            <div style="padding:0 10px">

                <p style="height:50px">
      <span style="float:left;margin-top:14px;margin-right:10px">Để kiểm tra trạng thái đơn hàng, Anh/chị vui
        lòng:</span><span style="margin-top:25px;float:left"><span style="padding:14px 35px;background:#357ebd"><a  style="color: white; text-decoration: none" href="http://127.0.0.1:8000/login/customer">Đăng nhập vào tài khoản</a></span></span>
                </p>

                <div style="clear:both"></div>
                <p style="margin:30px 0">Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại <a href="mailto:hellocafein@gmail.com" style="color:#357ebd" target="_blank">mailinh13a@gmail.com</a></p>
                <p style="text-align:right"><i>Trân trọng,</i></p>
                <p style="text-align:right"><strong>Ban quản trị cửa hàng Template Tea House</strong></p>
            </div>
        </div><img src="https://ci5.googleusercontent.com/proxy/LN6IKfpHdSmDnE5QtdhWJeybgyGHdTopoMfzKIo21aKXoFlYlusOVBiEyIMasmEKLfjmzFD298MW3qEpTvlxKdCpICd4choSKeUvS8P7y3koMe-VyIt6elfMyJDI3LMp4eDVdqH_iOFoHn_h8fPARbCfEyOD2qq_9HqKODdxC4uoe7dqGMBIl2loO3CRe_MkHdqAz0rFWQtuU_eRy4zWhHw2l3_h25q2C-HWPxzN0lLKwwX-1FT-MtylBOA9qYaL_Klmv4GRFKej1Djp0KjILyXasjtmHl27F38B08oZESzUvHtTJ8ufd8j3uPu-i91xuZjystzIRN2X-gATYXM_GX2BDLsCZ9ZLRM-iVNH2cSKakzYxn9mQQA6AShW-w6SARB4uz3HdW5fuzXSP0erjZZGSkZLqGw=s0-d-e1-ft#https://u670255.ct.sendgrid.net/wf/open?upn=PTrgccgS8rkPCBH1fHRtRR5SqxtTrDDSSEJ92bVnGVELJdVY5dyLi92aWV2t3y1gK5yevvs-2Bk1bPtE7d7teAwwEg9Lc28RMZEz58zKbKi-2FM-2FExGCSfaN99S0hQiImSBvbzNOVPUPrZJJVDEOVyJagkxtV33ETw2PEJJFABfLhUTYC0-2FjUrHbTDnc8zkbjHqqr5UbD0ql1RcSTppYxntCNDe8pNruo9Uuk0TeUAtJMVc-3D" alt="" width="1" height="1" border="0" style="height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important" class="CToWUd"><div class="yj6qo"></div><div class="adL">
        </div></div></div>
