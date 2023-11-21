

  <section class="inner-page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
            @if($category->brands)
            <div class="card">
                <div class="card-header">
                    <h4>Brands</h4>
                </div>
                <div class="card-body">
                    @foreach ($category->brands as $brandItem)
                    <label class="d-block">
                        <input type="checkbox" wire:model="brandInputs" value="{{ $brandItem->name }}"> {{ $brandItem->name }}
                    </label>
                    @endforeach
                </div>
            </div>
            @endif
    
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Price</h4>
                </div>
                <div class="card-body">
                    <label class="d-block mt-2">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low"> High to Low
                    </label>
                    <label class="d-block mt-2">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high"> Low to High
                    </label>
                </div>
            </div>
    
    
        </div>
        <div class="col-md-9">
            <div class="row">
                @forelse ($products as $productItem)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body p-0">
                            @if ($productItem->quantity > 0)
                            <span class="stock bg-success text-white px-2 py-1">In Stock</span>
                            @else
                            <span class="stock bg-danger text-white px-2 py-1">Out of Stock</span>
                            @endif
    
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                @if ($productItem->productImages->count() > 0)
                                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}" class="card-img-top">
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            {{-- <p class="card-text">{{ $productItem->brand }}</p> --}}
                            <h5 class="card-title">{{ $productItem->name }}</h5>
                            @if($productItem->selling_price != $productItem->original_price)
                            <p class="card-text">
                                <span class="selling-price font-weight-bold"><?php echo "Rp " . number_format("$productItem->selling_price", 0, ",", "."); ?> </span>
                                {{-- <span class="original-price text-muted"><?php echo "Rp " . number_format("$productItem->original_price", 0, ",", "."); ?></span> --}}
                            </p>
                            @else
                            <p class="card-text">
                                <span class="selling-price font-weight-bold"><?php echo "Rp " . number_format("$productItem->selling_price", 0, ",", "."); ?> </span>
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12">
                    <h4>No Products Available for {{ $category->name }}</h4>
                </div>
                @endforelse
    </div>
  </section>
        </div>
    </div>
</div>