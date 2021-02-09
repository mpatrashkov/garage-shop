<div class="product">
    <div class="product--imageWrapper">
        <img class="product--image" src="{{ Voyager::image( $product->image ) }}">
    </div>
    <div class="product--title">
        {{ $product->name }}
    </div>
    <div class="product--price">
        @if ($product->discount > 0)
        <span class="product--price-old">
            {{ $product->price }}лв
        </span>
        <span class="product--price-new">
            {{ $product->price - $product->discount }}лв
        </span>

        <div class="product--discount">
            -{{ ceil(100 * $product->discount / $product->price) }}%
        </div>
        @else
        {{ $product->price }}лв
        @endif
    </div>
    {{-- <button > --}}
    <a class="product--shop btn btn__primary" href={{ route("product.detail", $product->id) }} style="text-decoration: none; display: block;">
        <span class="mobile-hidden">Поръчай</span>
        <span class="material-icons">add_shopping_cart</span>
    </a>
    {{-- </button> --}}
</div>