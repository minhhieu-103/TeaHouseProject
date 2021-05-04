{{--<form method="post">--}}
{{--    <h1>Login</h1>--}}
{{--    <input name="email" placeholder="Username" type="email" required="">--}}
{{--    <input name="password" placeholder="Password" type="password" required="">--}}
{{--    <button>Submit</button>--}}
{{--    {{ csrf_field() }}--}}
{{--</form>--}}
{{--<style type="text/css">--}}
{{--    form {--}}
{{--        box-sizing: border-box;--}}
{{--        width: 260px;--}}
{{--        margin: 100px auto 0;--}}
{{--        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);--}}
{{--        padding-bottom: 40px;--}}
{{--        border-radius: 3px;--}}
{{--    }--}}
{{--    form h1 {--}}
{{--        box-sizing: border-box;--}}
{{--        padding: 20px;--}}
{{--    }--}}

{{--    input {--}}
{{--        margin: 40px 25px;--}}
{{--        width: 200px;--}}
{{--        display: block;--}}
{{--        border: none;--}}
{{--        padding: 10px 0;--}}
{{--        border-bottom: solid 1px #1abc9c;--}}
{{--        transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);--}}
{{--        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);--}}
{{--        background-position: -200px 0;--}}
{{--        background-size: 200px 100%;--}}
{{--        background-repeat: no-repeat;--}}
{{--        color: #0e6252;--}}
{{--    }--}}
{{--    input:focus, input:valid {--}}
{{--        box-shadow: none;--}}
{{--        outline: none;--}}
{{--        background-position: 0 0;--}}
{{--    }--}}
{{--    input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {--}}
{{--        color: #1abc9c;--}}
{{--        font-size: 11px;--}}
{{--        transform: translateY(-20px);--}}
{{--        visibility: visible !important;--}}
{{--    }--}}

{{--    button {--}}
{{--        border: none;--}}
{{--        background: #1abc9c;--}}
{{--        cursor: pointer;--}}
{{--        border-radius: 3px;--}}
{{--        padding: 6px;--}}
{{--        width: 200px;--}}
{{--        color: white;--}}
{{--        margin-left: 25px;--}}
{{--        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);--}}
{{--    }--}}
{{--    button:hover {--}}
{{--        transform: translateY(-3px);--}}
{{--        box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);--}}
{{--    }--}}
{{--</style>--}}
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div id="container">
    <div id="left">
        <h1 id="welcome">Welcome <img src="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/logo.png?1612509872226" alt="">
        </h1>

        <p id="lorem">
            Tea House hiện là chuỗi cửa hàng đồ uống lớn nhất tại Việt Nam.<br>
            Những sản phẩm từ Tea House đang như một cơn bão rất nhanh chóng<br>
            lan rộng ra xung quanh những nước Châu Á.<br>
            Đi đến đâu sản phẩm của Tea House cũng nhận được sự yêu quý của khách hàng các nước.<br>
            Đây cũng là loại trà có hương vị khác biệt nhất, đủ tiêu chuẩn <br>
            và là thương hiệu đồ uống duy nhất để đưa <br>
            vào giới thiệu tại Shanghai World Expo 2010.
        </p>

    </div>
    <div id="right">
        <h1 id="login">LogIn</h1><br>
        <form method="post">
        <input type="email" name="email" class="client-info" required>
        <label for="email">Email</label>
        <input type="password" name="password" class="client-info" required>
        <label for="password">Password</label>
                <button class=" btn social btn-success" style="background: green;color: white">Submit</button>
                {{ csrf_field() }}
        </form>
{{--        <button class="social" id="facebook">connect with facebook</button>--}}
{{--        <button class="social" id="google">connect with google</button>--}}
        <Button class="btn social btn-primary" style="background: blue; color: white"><a href="/register/customer" style="text-decoration: none;
color: white">REGISTER</a></Button>
    </div>
</div>
<style>
    * {
        margin: 0;
        padding: 0;
        outline: none;
    }

    :root {
        --main-color: #fff;
        --second-color: #347deb;
        --box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        --facebook-color: rgb(60, 90, 154);
        --google-color: rgb(220, 74, 61);
    }

    html {
        height: 100%;
    }
    body {
        background-image: linear-gradient(310deg, #df98fa, #9055ff);
        font-family: sans-serif;
    }

    #container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: var(--main-color);
        width: 1200px;
        height: 800px;
        border-radius: 10px;
        display: grid;
        grid-template-columns: repeat(2, 50%);
        box-shadow: var(--box-shadow);
        transition-duration: 1s;
    }

    #left, #right {
        margin: auto;
        width: 95%;
        height: 96%;
        border-radius: 10px;
    }

    #left {
        background-image: url("https://images.unsplash.com/photo-1615400014497-55726234cccb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYxNzg4Njg0Ng&ixlib=rb-1.2.1&q=85");
        background-size: cover;
        background-position: center;
        box-shadow: var(--box-shadow);
    }
    #welcome, #lorem {
        margin: 20px;
        text-shadow: var(--box-shadow);
    }
    #welcome {
        font-size: 20px;
        font-weight: 300;
        margin-top: 330px;
        text-shadow: var(--box-shadow);
    }

    #login {
        padding-top: 35%;
        text-align: center;
        text-transform: uppercase;
        font-weight: 100;
        text-shadow: var(--box-shadow);
    }
    .client-info {
        display: block;
        margin: 20px auto;
        width: 60%;
        height: 50px;
        border: solid #999 1px;
        border-radius: 5px;
        text-indent: 15px;
        transition: all 200ms;
        box-shadow: var(--box-shadow);
    }
    .client-info:focus {
        width: 80%;
    }
    label {
        position: absolute;
        margin: -76px 130px;
        font-size: 12px;
        white-space: nowrap;
        background: #fff;
        padding: 0 5px;
        color: #999;
        transition: all 200ms;
        text-shadow: var(--box-shadow);
    }
    #email:focus ~ label[for="email"] {
        margin: -76px 70px;
    }
    #password:focus ~ label[for="password"] {
        margin: -76px 70px;
    }
    #submit {
        border: none;
        background-color: #9055ff;
        color: white;
        width: 60%;
    }
    #submit:hover {
        background-color: #df98fa;
    }

    .social {
        background-color: #fff;
        display: block;
        margin: 10px auto;
        width: 70%;
        height: 50px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        transition-duration: 200ms;
        box-shadow: var(--box-shadow);
        text-shadow: var(--box-shadow);
    }
    #facebook {
        border: solid var(--facebook-color) 1px;
        color: var(--facebook-color);
    }
    #facebook:hover {
        background-color: var(--facebook-color);
        color: white;
    }
    #google {
        border: solid var(--google-color) 1px;
        color: var(--google-color);
    }
    #google:hover {
        background-color: var(--google-color);
        color: white;
    }

    @media (max-width: 1250px) {

        #container {
            width: 600px;
            display: block;
        }
        #left {
            display: none;
        }
        #right {
            margin-top: 16px;
            background-image: url("https://images.unsplash.com/photo-1615400014497-55726234cccb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYxNzg4Njg0Ng&ixlib=rb-1.2.1&q=85");
            background-size: cover;
            background-position: center;
            box-shadow: var(--box-shadow);
        }

    }

    @media (max-height: 850px) {

        #container {
            width: 1000px;
            height: 600px;
        }
        #login {
            padding-top: 20%;
        }
        #welcome {
            margin-top: 240px;
            font-size: 20px;
        }
        #lorem {
            font-size: 15px;
        }

    }
</style>
<script>
    /* Work in proggress */
    document.getElementById('see-button').addEventListener('click', evt => {
        document.getElementById('blur-work').style.display = 'none';
    })
    /* Work in proggress */
</script>
