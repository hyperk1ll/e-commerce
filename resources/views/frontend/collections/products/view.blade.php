@extends('layouts.app')

@section('title')
{{ $product->meta_title }}
@endsection

@section('meta_keyword')
{{ $product->keyword }}
@endsection

@section('meta_description')
{{ $product->meta_description }}
@endsection

<div class="content-wrapper">
@section('content')
</div>

<div>
    <livewire:frontend.product.view :category="$category" :product="$product"/>
</div>


@endsection