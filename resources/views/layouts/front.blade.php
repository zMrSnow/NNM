<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/bootstrap4/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>@yield("title", "NekoNoMagic - prekladateľská skupina")</title>
</head>
<body>

<header>


    <div class="clearfix"></div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand" href="#">NekoNoMagic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("front.home")}}">Domov <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("front.anime")}}">Anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Vyhľadávanie">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Hľadať</button>
            </form>
        </div>
    </nav>

</header>

<div class="container alerts">
    <div class="alert alert-danger" role="alert">
        Tak vitajte na našej prerobenej stránke, dufame ze sa vam bude páčiť.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
        </button>
    </div>
</div>


@yield("content")



<footer>
    <div class="clearfix"></div>
    <div class="row justify-content-between container-fluid">
        <div class=" center">
            @yield("footer", "Footer")
        </div>
    </div>
</footer>

<script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="{{asset("js/bootstrap4/bootstrap.min.js")}}"></script>
@yield("js")
</body>
</html>