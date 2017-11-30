@extends("layouts.front")


@section("title", "Domov")

@extends("front.slider")

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


            </ul>

    </section>
@endsection
