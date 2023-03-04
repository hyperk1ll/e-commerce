<div>
    {{-- <div class="py-3 py-md-5 bg-light"> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-5 mt-3">
                <div class="bg-white border border-dark">
                    @if($product->productImages)
                    <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img">
                    @else
                    No Image Added
                    @endif
                </div>
            </div>
            <div class="col-md-7 mt-3">
                <div class="product-view">
                    <h4 class="product-name">
                        {{ $product->name }}
                    </h4>
                    <hr>
                    <p class="product-path">
                        Home / {{ $product->category->name }} / {{ $product->name }}
                    </p>
                    @if($product->selling_price != $product->original_price)
                        <div>
                            <span class="selling-price"><?php echo "Rp " . number_format("$product->selling_price", 0, ",", "."); ?> </span>
                            <span class="original-price"><?php echo "Rp " . number_format("$product->original_price", 0, ",", "."); ?></span>
                        </div>
                        @else
                        <div>
                            <span class="selling-price"><?php echo "Rp " . number_format("$product->selling_price", 0, ",", "."); ?> </span>
                        </div>
                    @endif

                    @if($product->quantity > 0)
                        <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                    @else
                        <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                    @endif
                    <div class="mt-3">
                        <h5 class="mb-0">Small Description</h5>
                        <p>
                            {{!! $product->small_description !!}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header bg-white">
                        <h4>Description</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            {{!! $product->description !!}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</div>
