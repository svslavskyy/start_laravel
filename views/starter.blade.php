<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="@yield('start')" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/bootstrap/app.php') }}"  rel="stylesheet">
    <link href="{{ asset('/bootstrap/cache/bootstrap-grid.css/bootstrap-grid,min.css') }}"  rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-grid.css') }}"  rel="stylesheet">
    <title>$Title$</title>
</head>
<body>
<div class="hedder">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{asset('/img/1.png')}}">
                    </div>
                    <div class="col-sm-4">
                        <p class="hedder_text"> – Общественная организация творчества</p>

                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="/index/page=landing">
                            Главная
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="/index/page=news">
                            Новости
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            Проекты
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            О нас
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            ru
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            <img src="{{asset('/img/sr.png')}}" class="img1">

                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 div1">
                <div class="row div1">
                    <div class="col-sm-12">
                        <img src="{{asset('/img/1footer.png')}}" class="imgsf">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="/index/page=landing">

                        Главная
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="/index/page=news">

                        Новости
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            Проекты
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            О нас
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a>
                            ru
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('/img/leter.png')}}" class="imgf1">
                    </div>
                    <div class="col-sm-4">
                        <img src="{{asset('/img/3.png')}}" class="imgf">
                    </div>
                    <div class="col-sm-4">
                        <img src="{{asset('/img/4.png')}}" class="imgf">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer2">
    <p>
        Copyright © 2020 goldenharp.com.ua
    </p>
</div>

</body>
</html>

