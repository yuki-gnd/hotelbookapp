<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>

    <style>
        body {
            background-color:#222;
        }
        header {
            background-color: #fff;
        }
        main {
            background-color: #fff;
        }
        footer {
            background-color: #fff;
            text-align: right;
        }
        h1 {
            
        }
        .nav_box {
            display: flex;
        }
        .nav_items {
            list-style: none;
            display: flex;
        }
        .nav_items li {
            margin: 10px;
        }
        .reservation {
            background-color: maroon;

        }
        
        /* #basicinfo{
            background-color: #222;
            overflow:hidden;
        }
        #basicinfo .hotelinfo {
            display: block;
            padding: 50px 0 0 0;
            margin: 0 -30px 0 0;
            color: #fff;
            vertical-align: top;
            font-size: 0;
            width: 100%;
        }
        #basicinfo .wrap {
            display: block;
            padding: 0;
            margin: 0 auto;
            vertical-align: top;
            width: 86%;
            max-width: 960px;
        }
        #basicinfo .hotelinfo .col {
            display: inline-block;
            width: 50%;
            padding: 0 30px 0 0;
            margin: 0 0 50px 0;
            vertical-align: top;
            font-size: 18px;
        }
        #basicinfo .hotelinfo .col img{
            width:100%;
        }
    @media screen and (max-width: 767px) {
        #basicinfo .wrap {
            width: 100%;
        }
        #basicinfo .hotelinfo .col {
            width:76%;
            margin:0 auto 30px;
            padding:0;
            display: block;
        }
        #basicinfo .hotelinfo .col img{
            margin:0 0 30px;
        }
    } */
    </style>
</head>
<body>
        <header>
            <div class="nav">
                <h1 class="logo">ホテルグループ</h1>
                <div class="nav_box">
                    <ul   ul class="nav_items">
                        <li><a href="#"></a></li>
                        <li class="guest"><a href="/hotel/guest">GUEST REGISTRATION</a></li>
                        <li class="reservation"><a href="/hotel/booking">RESERVATION</a></li>
                    </ul>
                </div>
            </div>
            <div class="top_img_show">
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            Copyright Hotel Group. all rights reserved.
        </footer>
</body>
</html>