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
    <title>
        @yield("title", "NekoNoMagic - prekladateľská skupina")
    </title>
</head>
<body>

<header>


    <div class="clearfix"></div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand" href="{{route("front.home")}}">NekoNoMagic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
            @if(Auth::check())
                <div class="pull-right">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href=""><i class="icon-cog"></i> Preferences</a></li>
                                <li><a href=""><i class="icon-envelope"></i> Contact Support</a></li>
                                <li class="divider"></li>
                                <li><a href=""><i class="icon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            @else
                <ul class="navbar-nav  text-white flex-md-row ">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="modal" data-target="#loginModal">Prihlásiť sa</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-toggle="modal" data-target="#registerModal">Registrácia</a>
                    </li>
                </ul>
            @endif

            @include("auth.loginModal")
            @include("auth.registerModal")

            {{--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Vyhľadávanie">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Hľadať</button>
            </form>--}}
        </div>
    </nav>

</header>


@yield("slider")

<div class="container alerts">
    <div class="alert alert-danger" role="alert">
        Tak vitajte na našej prerobenej stránke, dufame ze sa vam bude páčiť.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
        </button>
    </div>
    @if(count($errors) > 0)
        @forelse($errors->all() as $error)
            <div class="alert alert-warning hide-overflow-y" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="text-dark">&times;</span>
                </button>
            </div>
        @empty
        @endforelse
    @endif
    @if(session('registered'))
        <div class="alert alert-success hide-overflow-y" role="alert">
            {{session('registered')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-dark">&times;</span>
            </button>
        </div>
    @endif
</div>


@yield("content")


<footer>
    <div class="clearfix"></div>
    <div class="row justify-content-around container-fluid" style="margin-bottom: 25px">
        @yield("footer")
        <a href="https://www.toplist.cz">
            <script language="JavaScript" type="text/javascript">
                <!--
                document.write('<img src="https://toplist.cz/count.asp?id=1770149&logo=mc&http=' +
                    escape(document.referrer) + '&t=' + escape(document.title) +
                    '&wi=' + escape(window.screen.width) + '&he=' + escape(window.screen.height) + '&cd=' +
                    escape(window.screen.colorDepth) + '" width="88" height="60" border=0 alt="TOPlist" />');
                //-->
            </script>
            <noscript>
                <img src="https://toplist.cz/count.asp?id=1770149&logo=mc" border="0" alt="TOPlist" width="88"
                     height="60"/>
            </noscript>
        </a>
    </div>
</footer>


<script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="{{asset("js/bootstrap4/bootstrap.min.js")}}"></script>
<script>
    $('.carousel').carousel({
        interval: 10000
    })
</script>

@include("layouts.chat")
@yield("js")
</body>
</html>