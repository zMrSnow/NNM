@section('slider')


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-50 center" src="{{asset("img/slider/1.jpg")}}" alt="First slide" height="350" style="transform: scale(2)">
            </div>
            <div class="carousel-item">
                <img class="d-block w-50 center" src="{{asset("img/slider/2.png")}}" alt="First slide" height="350"style="transform: scale(2)">
            </div>
            <div class="carousel-item  hide-overflow-y">
                <img class="d-block w-50 center" src="{{asset("img/slider/3.jpg")}}" alt="First slide" height="350"style="transform: scale(2)">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="background: linear-gradient(to right, rgb(51,51,51), rgba(255,0,0,0));">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="background: linear-gradient(to right, rgba(255,0,0,0), rgb(51,51,51));">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




@endsection