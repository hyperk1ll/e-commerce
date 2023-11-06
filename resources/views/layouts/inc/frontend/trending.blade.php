<section id="trending" class="trending section-bg">
    <div class="container">
      <div class="section-title "data-aos="fade-up">
        <h2>Trending Items</h2>
        <p>Below are some popular items nowdays!</p>
      </div>
  
      @if($trendingProducts)
      <div class="row owl-carousel owl-theme trending-product">
        @foreach ($trendingProducts as $productItem)
          <div class=" d-flex align-items-stretch " data-aos=zoom-in data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}" class="w-100">
              </div>
              <h4><a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">{{ $productItem->name }}</a></h4>
              <p>{{ $productItem->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
  
      @endif
    </div>
  </section>

  @section('script')

  <script>
    $('.trending-product').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
  </script>

  @endsection