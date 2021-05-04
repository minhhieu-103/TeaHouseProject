@extends('layouts.main')
@section('title', 'Liên hệ')
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

                            <li><strong><span>Giới Thiệu</span></strong></li>
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="page_contact section">
            <div class="container">
                <div class="wrapcontactin">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="wrapcontact">
                                <div class="iFrameMap">
                                    <div id="contact_map" class="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.5298608896287!2d107.60158541481289!3d16.448686688647506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a16f2cae9b41%3A0xf32ed3cc8b48a4d9!2zNiBraWV0IDQzIEjhu5MgxJDhuq9jIERpIHThu5UgMTEsIEFuIEPhu7F1LCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1619579809540!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 right_col">
                            <div class="section right_contact">
                                <div class="heading cleafix a-center">
                                    <h2 class="a-center">
                                        GỬI THÔNG TIN CHO CHÚNG TÔI
                                    </h2>
                                </div>
                                <p class="des_1">
                                    Hãy liên hệ ngay với chúng tôi để nhận được nhiều ưu đãi hấp dẫn dành cho bạn!
                                </p>
                                <div class="time_work">
                                    <div class="itemfooter cont">
                                        <div class="r">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div><b>Địa chỉ:</b> 10/4 Tôn Thât Dương Trị, Phường An Cựu, TP Huế</div>
                                        </div>
                                        <div class="r">
                                            <i class="fas fa-envelope"></i>
                                            <div><b>Email:</b> <a href="mailto:hellocafein@gmail.com">mailinh13a@gmail.com</a></div>
                                        </div>
                                        <div class="r">
                                            <i class="fas fa-phone"></i>
                                            <div><b>Hotline:</b> <a class="fone" href="tel:18006750">0965 198 897</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pagelogin" class="margin-bottom-50">
                                    <form accept-charset="utf-8" action="/contact" id="contact" method="post">
                                        <input name="FormType" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-8effec885c7b4d8da753e0d02369b15b" name="Token" value="03AGdBq25w-Yjht8tQP56Jqd5IHj8xaSR-6k9gQhJHlIMJBHlhB3WC9U0wRYEyHNg5rOvq50q4ASeBt_O2s3cCtw0Njn-sqOVmMXGXFSg56YJGTlIf-rYpQPvPYN8x4X-fg9RdhHCBfeAVSrJ9GN9GiIW4dEG2mVl0v-BwxIfbAkE9eMxMF12ivv0NZxwovR33IElfVwmIUHaPosuxZZFM0HdKxSZa6gAITtDN58vwuQBjyvpDu8E7M9uhcg4TCRUbdcvWh74SMx8ECFzTq1K2nBSebgEDGLWm5AIC3wHsamkDZ3ziAIxTOzkdNOoBEoeRuws7XGh_GRnbw7TPhKQJY4dK-BwNFMljLxU1UnAY0BohOTOAcRhaD_pYjzaO8WPySCHV9Fci6JTxRD1meaCv2zztMOltg_rrobaO44kxPmW6oQp0BKaFZ9v2XItYnCHJcpLmGR23aXLaxqXCuggQbYs3Y6Z4FOyzKw"><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                                        <script>
                                            grecaptcha.ready(function() {
                                                grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
                                                    .then(function(token) {
                                                        document.getElementById("Token-8effec885c7b4d8da753e0d02369b15b").value = token
                                                    });
                                            });
                                        </script>


                                        <div class="form-signup clearfix">
                                            <div class="row group_contact">
                                                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <input placeholder="Họ và tên*" type="text" class="form-control  form-control-lg" required="" value="" name="contact[Name]">
                                                        </fieldset>
                                                        <fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <input placeholder="Email*" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" id="email1" class="form-control form-control-lg" value="" name="contact[email]">
                                                        </fieldset>
                                                        <fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <input type="number" placeholder="Điện thoại*" name="contact[phone]" class="form-control form-control-lg" required="">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <fieldset>
                                                    <textarea placeholder="Nội dung*" name="contact[body]" id="comment" class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                                                </fieldset>
                                                <fieldset>
                                                    <button type="submit" class="margin-top-20 btn btn-main btn-primary bg_gradient btn-lienhe">Gửi thông tin</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .iFrameMap iframe {
            width: 100% !important;
            height: 700px;
        }.wrapcontactin .time_work .r .fas {
             width: 30px;
             text-align: left;
             font-size: 18px;
             color: #4d8a54;
             display: block;
             float: left;
             height: 24px;
             line-height: 24px;
         }
        .group_contact fieldset input {
            padding: 0 20px;
            margin-bottom: 20px;
            color: #282828;
        }button.margin-top-20.btn.btn-main.btn-primary.bg_gradient.btn-lienhe {
             /* padding: 20px; */
             border-radius: 0;
             font-family: "Quicksand",sans-serif;
             border: 1px #4d8a54 solid;
             background: #4d8a54;
             color: #fff;
             padding: 0px 40px;
             font-weight: 700;
             font-size: 17px;
             display: inline-block;
             border-radius: 30px;
             position: relative;
             height: 50px !important;
             line-height: 50px !important;
             padding-top: 20px;
         }
        .wrapcontactin .time_work .r {
            width: 100%;
            float: left;
            margin-bottom: 20px;
        }input.form-control.form-control-lg {
             border-radius: 30px !important;
             font-size: 21px;
             font-weight: 500;
         }.wrapcontact {
              padding-bottom: 22px;
          }
        .group_contact fieldset {
            padding: 0 15px;
            border: none;
            width: 100%;
            padding-bottom: 20px;
        }button.margin-top-20.btn.btn-main.btn-primary.bg_gradient.btn-lienhe:hover{
             background: #fff;
             border-color: #4d8a54;
             color: #4d8a54;
         }.group_contact .content-area {
             min-height: 100px;
             padding: 10px 15px;
             border-radius: 30px !important;
             resize: none;
         }.group_contact fieldset {
              padding: 0 15px;
              border: none;
              width: 100%;
          }
    </style>
@endsection
