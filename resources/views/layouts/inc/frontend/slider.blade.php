{{-- Carousel --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            
    <div class="carousel-inner">

        @foreach ($sliders as $key => $sliderItem)
        <div class="carousel-item {{$key == 0 ? 'active':''}}active">
            @if($sliderItem->image)
            <img class="d-block w-100" src="{{asset("$sliderItem->image")}}" alt="First slide">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$sliderItem->title}}</h5>
                <p>{{$sliderItem->description}}</p>  
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    {{-- End of Carousel --}}