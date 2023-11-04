@extends('layouts.app')

@section('title', 'MTU Catalog')

@section('content')
@include('layouts.inc.frontend.navbar')
@include('layouts.inc.frontend.slider')

@include('layouts.inc.frontend.client')
@include('layouts.inc.frontend.review')
<div class="overlay">
<div class="popup">
  <div class="contentBox">
      <div class="close">

      </div>
      <div class="imgBx">
          <img src="{{asset('/assets/img/gift.png')}}" alt="">
      </div>
      <div class="content">
          <div class="a">
              <h3>Welcome!</h3>
              <p>As a client, you can only view products from the catalog. If anything catches your eye, please contact us!</p>
              <a href="#"> Continue to catalog</a>
          </div>
      </div>
  </div>
</div>
</div>

<section id="services" class="services section-bg">
  <div class="container">
    <div class="section-title "data-aos="fade-up">
      <h2>Categories</h2>
      <p>Below are some categories that we have!</p>
    </div>

    <div class="row">
      @foreach ($categories as $categoryItem)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos=zoom-in data-aos-delay="100">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset($categoryItem->image) }}" alt="{{ $categoryItem->name }}" class="w-100">
            </div>
            <h4><a href="{{ url('/collections/'.$categoryItem->slug) }}">{{ $categoryItem->name }}</a></h4>
            <p>{{ $categoryItem->description }}</p>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
@include('layouts.inc.frontend.howto')
@include('layouts.inc.frontend.contact')

@endsection


