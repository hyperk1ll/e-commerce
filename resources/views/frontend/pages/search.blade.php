@extends('layouts.app')

@section('title', 'Search Products')

@include('layouts.inc.frontend.navbar2')

@section('content')

{{-- <div class="py-3 py-md-5 bg-light"> --}}
<div class="content-wrapper">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}" style="text-decoration: none; color:black;">Home</a></li>
                <li><a href="" style="text-decoration: none; color:black;">Results</a></li>
            </ol>
            <h2>Results</h2>
        </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
            <div class="row">
                @forelse ($searchProducts as $productItem)
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos=zoom-in data-aos-delay="100">
                        <div class="card">
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                @if($productItem->productImages->count()>0)
                                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{$productItem->name}}" class="card-img-top">
                                @endif
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">{{ $productItem->name }}</a></h5>
                                <p class="card-text">{{ $productItem->brand }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <h5>No Product Available</h5>
                    </div>
                @endforelse
            </div>
            </div>
        </div>
    </div>
</div>
    
{{-- </div> --}}

@endsection