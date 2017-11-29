@extends("layouts.front")


@section("title", "$anime->title - NekoNoMagic.sk")

@section("content")

    <main class="container anime-info">
        <h1 class="hide-overflow-y text-center">{{$anime->title}}</h1>
        <div class="row justify-content-around">
            <img src="{{$anime->img}}" alt="" class="img-responsive" height="400">
            <ul>
                <li><b>Názov anime:</b> {{$anime->title}}</li>
                <li><b>Rok vydania anime:</b> {{$anime->year}}</li>
                <li><b>Začiatok vysielania:</b> {{$anime->start}}</li>
                <li><b>Koniec vysielania:</b> {{$anime->stop}}</li>
                <ul>
                    <li>Žánre:</li>
                    <li class="badge badge-danger">Podľa mangy</li>
                    <li class="badge badge-danger">Podľa mangy</li>
                    <li class="badge badge-danger">Podľa mangy</li>
                    <li class="badge badge-danger">Podľa mangy</li>
                    <br>
                    <li class="badge badge-danger">Podľa mangy</li>
                    <li class="badge badge-danger">Podľa mangy</li>
                    <li class="badge badge-danger">Podľa mangy</li>
                </ul>
            </ul>
        </div>

        <table class="table table-dark table-hover table-edited">
            <tbody>
            <tr class="clickable-row text-left" data-href="{{route("anime.show", $anime->id)}}">
                <th scope="row" style="width: 2%; color: #899496;">1.</th>
                <th scope="row" style="width: 70%; color: #899496;">Názov epizódy</th>
                <td style="width: 6%; color: #1D80A0;">
                    <span class="fa fa-play btn btn-outline-success">
                        Online
                    </span>
                </td>
                <td style="width: 6%; color: #CCC20D;">
                    <span class="fa fa-download btn btn-outline-primary">
                        Mega.co.nz
                    </span>
                </td>
                <td style="width: 8%;">
                    <span class="fa fa-download btn btn-outline-primary">
                        Ulož.to
                    </span>
                </td>
                <td style="width: 6%; color: #33CC08;">
                    <span class="fa fa-file-text-o btn btn-outline-info">
                        Titulky
                    </span>
                </td>
            </tr>
            @forelse($anime as $item)

            @empty

            @endforelse
            </tbody>
        </table>
    </main>



@endsection

@section("js")


@endsection
