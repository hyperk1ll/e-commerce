@extends('layouts.app')

@section('title', 'All Categories')

@section('content')

@include('layouts.inc.frontend.slider')

@include('layouts.inc.frontend.client')
    
<section id="services" class="services section-bg">
  <div class="container">
    <div class="section-title "data-aos="fade-up">
      <h2>Categories</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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

@include('layouts.inc.frontend.contact')

@endsection


