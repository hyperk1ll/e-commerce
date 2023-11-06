<section id="trending" class="trending section-bg">
    <div class="container">
      <div class="section-title "data-aos="fade-up">
        <h2>Trending Items</h2>
        <p>Below are some items nowdays!</p>
      </div>
  
      @if($trendingProducts)
      <div class="row">
        @foreach ($trendingProducts as $productItem)
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos=zoom-in data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
                <img src="{{ asset($productItem->image) }}" alt="{{ $productItem->name }}" class="w-100">
              </div>
              <h4><a href="{{ url('/collections/'.$productItem->slug) }}">{{ $productItem->name }}</a></h4>
              <p>{{ $productItem->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
  
      @endif
    </div>
  </section>