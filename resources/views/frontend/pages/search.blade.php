@extends('layouts.app')

@section('title', 'Search Products')

@section('content')

{{-- <div class="py-3 py-md-5 bg-light"> --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Search Results</h4>
            <div class="underline mb-4"></div>
        </div>
        
        @forelse ($searchProducts as $productItem)
        <div class="col-6 col-md-3">
            <div class="product-card">
                @if($productItem->productImages->count()>0)
                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                    <div class="product-card-img">
                            <img src="{{ asset($productItem->productImages[0]->image) }}" class="w-100 h-100" alt="{{$productItem->name}}">
                    </div>
                </a>
                @endif
            </div>
            <div class="product-card-body">
                {{-- <p class="product-brand">{{$productItem->brand}}</p> --}}
                <h5 class="product-name">
                    <a href="{{url('/collections/'.$productItem->category->slug.'/'.$productItem->slug)}} ">
                        {{ $productItem->name }}
                    </a>
                </h5>
            </div>
        </div>
        @empty
            <div class="col-md-12">
                <h5>No Product Available
            </div>
        @endforelse
        </div>
    </div>
</div>
    
{{-- </div> --}}

@endsection