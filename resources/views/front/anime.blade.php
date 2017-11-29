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
            <tr class="text-left">
                <th style="width: 70%;">Názov anime</th>
                <th style="width: 6%;">Rok</th>
                <th style="width: 6%;">Preložené</th>
                <th style="width: 8%;">Typ</th>
                <th style="width: 10%;">Stav</th>
            </tr>
            </thead>
        </table>
        <?php $leater = 'A'; ?>
        @for($i = 0; $i < 26; $i++)
            @if($leater =="F" || $leater == "I" || $leater == "N")
                <div class="card text-center anime-pismenka hide-overflow-y">
                    <div class="card-header anime-pismenka">
                        <strong>
                            {{$leater}}

                        </strong>
                    </div>
                </div>

                <table class="table table-dark table-hover table-edited">
                    <tbody>
                    @forelse($animes as $anime)

                        @if($anime->title[0] == $leater)
                            <tr class="clickable-row text-left" data-href="{{route("anime.show", $anime->id)}}">
                                <th scope="row" style="width: 70%; color: #899496;">{{$anime->title}}</th>
                                <td style="width: 6%; color: #1D80A0;">{{$anime->year}}</td>
                                <td style="width: 6%; color: #CCC20D;">{{count($anime->getStreams)}}/{{$anime->total_episodes}}</td>
                                <td style="width: 8%;">{{$anime->getType->name}}</td>
                                <td style="width: 10%; color: #33CC08;">{{$anime->getStatus->name}}</td>
                            </tr>
                        @endif
                    @empty

                    @endforelse
                    </tbody>
                </table>
            @endif
            <?php $leater++; ?>
        @endfor

    </div>

@endsection

@section("js")

    <script>
        jQuery(document).ready(function ($) {
            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });
        });
    </script>

@endsection

@section("title", "Domov")