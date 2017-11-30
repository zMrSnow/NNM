@extends("layouts.front")


@section("title", "$anime->title - NekoNoMagic.sk")

@section("content")

    <main class="container anime-info">
        <h1 class="hide-overflow-y text-center">{{$anime->title}}</h1>
        <div class="row justify-content-around">
            <img src="{{$anime->img}}" alt="" class="img-responsive" height="400" style="padding-left: 10px">
            <ul class="col-md-5">
                <li><b>Názov anime:</b> {{$anime->title}}</li>
                <li><b>Rok vydania anime:</b> {{$anime->year}}</li>
                <li><b>Začiatok vysielania:</b> {{$anime->start}}</li>
                <li><b>Koniec vysielania:</b> {{$anime->stop}}</li>
                <br>
                <li><b>Obsah:</b> {{$anime->description}}</li>
                <ul>
                    <br>
                    <li><b>Žánre: </b></li>
                    @forelse($anime->getGenres as $genre)
                        <li class="badge badge-danger">{{$genre->name}}</li>
                    @empty
                        <li class="badge badge-danger">Žánre neboli ešte pridané</li>
                    @endforelse
                </ul>
            </ul>
            <div class="clearfix"></div>


        </div>

        <p class="text-center">
            <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                Ukážka - Triler
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body text-center">
                <iframe height="550" src="https://www.youtube.com/embed/{{$anime->triler}}" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>

        <table class="table table-dark table-hover table-edited">
            <tbody>
            @forelse($anime->getStreams as $item)

                <tr class="clickable-row text-left" data-href="{{route("anime.show", $anime->id)}}">
                    <th scope="row" style="width: 2%; color: #899496;">{{$item->episode}}.</th>
                    <th scope="row" style="width: 70%; color: #899496;">{{$item->name}}</th>
                    <td style="width: 6%; color: #1D80A0;">
                        <a href="{{$item->link_stream}}" target="_blank">
                            <span class="fa fa-play btn btn-outline-success clickable-row" data-href="">
                                Online
                            </span>
                        </a>
                    </td>
                    <td style="width: 6%; color: #CCC20D;">
                        <a href="{{$item->link_mega}}" target="_blank">
                            <span class="fa fa-download btn btn-outline-primary">
                                Mega.co.nz
                            </span>
                        </a>
                    </td>
                    <td style="width: 8%;">
                        <a href="{{$item->link_ulozto}}" target="_blank">
                            <span class="fa fa-download btn btn-outline-primary">
                                Ulož.to
                            </span>
                        </a>
                    </td>
                    <td style="width: 6%; color: #33CC08;">
                        <a href="" target="_blank">
                            <span class="fa fa-file-text-o btn btn-outline-danger">
                                Titulky
                            </span>
                        </a>
                    </td>
                </tr>

            @empty
                <h1 class="text-center hide-overflow-y">Toto anime ešte nemá pridané epizódy.</h1>
            @endforelse
            </tbody>
        </table>
        <form class="starrating risingstar d-flex justify-content-center flex-row-reverse col-md-12 ">
            <input type="radio" id="star5" name="rating" value="5"/>
            <label for="star5" title="5 hviezdičky"></label>
            <input type="radio" id="star4" name="rating" value="4"/>
            <label for="star4" title="4 hviezdičky"></label>
            <input type="radio" id="star3" name="rating" value="3"/>
            <label for="star3" title="3 hviezdičky"></label>
            <input type="radio" id="star2" name="rating" value="2"/>
            <label for="star2" title="2 hviezdičky"></label>
            <input type="radio" id="star1" name="rating" value="1"/>
            <label for="star1" title="1 hviezdička"></label>
        </form>
        <p class="text-center">
            Preklady a streamy niesu umiestnené na našom servery, nenesieme žiadnu
            zodpovednosť za poršenie autorkých práv, na našom servery je iba text popripade iframe ktory nieje na nasom
            webe!
            Prípadne sťažnosti smerujte na server kde sa danné média nachádzaju. Ďakujeme!
        </p>
        <p class="text-center">
            <a href="https://en.wikipedia.org/wiki/HTML_element#Frames">Čo je iframe? </a>
            <a href="https://en.wikipedia.org/wiki/Defense_Contract_Management_Agency">DMCA? </a>
        </p>
    </main>



@endsection

@section("js")


@endsection
