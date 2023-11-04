@extends('layouts.app')

@section('title')
{{ $category->name }}
@endsection

@include('layouts.inc.frontend.navbar2')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

    <ol>
    <li><a href="{{ url('/') }}" style="text-decoration: none; color:black;">Home</a></li>
    <li><a href="{{ url('/collections/'.$category->slug) }}" style="text-decoration: none; color:black;">{{ $category->name }}</a></li>
    </ol>
    <h2>Our Products</h2>

    </div>
</section><!-- End Breadcrumbs -->

            @livewire('frontend.product.index', ['category' => $category])

        </div>
    </div>
</div>
{{-- </div> --}}


@endsection