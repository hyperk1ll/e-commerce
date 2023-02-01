<div>
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
        </div>
        <div class="col-md-9">

            <div class="row">
                @forelse ($products as $productItem)
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if ($productItem->quantity > 0)
                                <label class="stock bg-success">In Stock</label>
                            @else
                                <label class="stock bg-danger">Out of Stock</label>
                            @endif

                            @if ($productItem->productImages->count() > 0)
                            <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                            @endif
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">{{ $productItem->brand }}</p>
                            <h5 class="product-name">
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                {{ $productItem->name }}
                            </a>
                            </h5>
                            @if($productItem->selling_price != $productItem->original_price)
                            <div>
                                <span class="selling-price"><?php echo "Rp " . number_format("$productItem->selling_price", 0, ",", "."); ?> </span>
                                <span class="original-price"><?php echo "Rp " . number_format("$productItem->original_price", 0, ",", "."); ?></span>
                            </div>
                            @else
                            <div>
                                <span class="selling-price"><?php echo "Rp " . number_format("$productItem->selling_price", 0, ",", "."); ?> </span>
                            </div>
                            @endif
                            <div class="mt-2">
                                <a href="" class="btn btn1"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-md-12">
                        <h4>No Products Available for {{ $category->name }}</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>


