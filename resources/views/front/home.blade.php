@extends("layouts.front")


@section("title", "Domov")

@section("content")

    {{--<div class="container">
        <div class="card text-center">
            <div class="card-header">
                <strong>
                    <span class="fa fa-heart"></span>
                    Čo prekládáme a čo plánujeme
                </strong>
            </div>
        </div>
    </div>--}}


    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <strong>
                    <span class="fa fa-newspaper-o"></span>
                    Najnovšie preklady
                </strong>
            </div>
        </div>
    </div>

    <section class="container">

            <ul class="row d-flex center justify-content-around text-center">

            @for($i = 0; $i < 4; $i++)

                <li class="news-box col-xs-12 col-sm-12 col-md-5">
                    <btitle class="hide-overflow-y col-xs-12 col-sm-12 col-md-5">Card title</btitle>
                    <article class="row">
                        <img src="{{asset("img/anime/12675B.jpg")}}" alt="" height="240px" class="col-6">
                        <div class="col-6">
                            <div class="card-body">
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-success btn-outline-success">
                                    <span class="fa fa-newspaper-o"></span>
                                    Viac info
                                </a>
                            </div>
                        </div>
                    </article>

            @endfor
            </ul>

    </section>
@endsection
