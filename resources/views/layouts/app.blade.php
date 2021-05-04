<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea House</title>
    <link rel="icon" href="//bizweb.dktcdn.net/100/415/010/themes/806477/assets/favicon.png?1612509872226" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <link rel="stylesheet" href="{{asset('fontend/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/teahouse.css')}}" />
    <link rel="stylesheet" href="{{asset('fontend/css/detail.css')}}" />
    <link rel="stylesheet" href="{{asset('fontend/css/cart.css')}}" />
    <link rel="stylesheet" href="{{asset('fontend/css/news.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('fontend/css/introduce.css')}}" />
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>


</head>

<body>

@include('layouts.header')
@include('flash-message');


    @yield('content')
@include('layouts.footer')

</body>

<script>
    $(document).ready(function() {
        $(".btn_booknow").click(function() {
            alert("The paragraph was clicked.");
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW " crossorigin="anonymous "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('fontend/js/main.js')}}"></script>
<script src="{{asset('fontend/js/custom.js')}}"></script>
<script src="{{asset('fontend/slick/slick.js')}}"></script>
<script src="{{asset('fontend/js/owl.carousel.min.js')}}"></script>

{{--<script src="{{asset('fontend/js/cus.js')}}"></script>--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
{{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>--}}
<script>
    $(document).ready(function() {
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
        });
    });

    $(document).ready(function(){
        $("p").click(function(){
            alert("The paragraph was clicked.");
        });
    });





</script>
</html>
