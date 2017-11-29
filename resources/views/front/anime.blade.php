@extends("layouts.front")


@section("content")

    <div class="card text-center anime-abeceda hide-overflow-y">
        <div class="card-header anime-abeceda ">
            <?php $leater = 'A'; ?>
            @for($i = 0; $i < 26; $i++)
                <a href="#anime-{{$leater}}"><strong>{{$leater}}</strong></a>
                <?php $leater++; ?>
            @endfor
        </div>
    </div>



    <div class="clearfix"></div>

    <div class="container-fluid">
        <table class="table table-dark table-hover table-edited">
            <thead>
            <tr>
                <th style="width: 74%;">Názov anime</th>
                <th style="width: 6%;">Rok</th>
                <th style="width: 6%;">Preložené</th>
                <th style="width: 8%;">Typ</th>
                <th style="width: 6%;">Stav</th>
            </tr>
            </thead>
        </table>


        <div class="card text-center anime-pismenka">
            <div class="card-header anime-pismenka">
                <strong>
                    N
                </strong>
            </div>
        </div>

        <table class="table table-dark table-hover table-edited">
            <tbody>
            <tr>
                <th scope="row" style="width: 74%; color: #899496;">Natsume Yuujinchou Roku</th>
                <td style="width: 6%; color: #1D80A0;">2017</td>
                <td style="width: 6%; color: #CCC20D;">11/15</td>
                <td style="width: 8%;">Tv Séria</td>
                <td style="width: 6%; color: #33CC08;">Prebieha</td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection

@section("title", "Domov")