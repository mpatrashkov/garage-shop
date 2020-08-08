<div class="product">
    <div class="product--imageWrapper">
        <img class="product--image" src="{{ Voyager::image( $product->image ) }}">
    </div>
    <div class="product--title">
        {{ $product->name }}
    </div>
    <div class="product--price">
        {{ $product->price }}лв
    </div>
    <button class="product--shop btn btn__primary">
        Купи
    </button>
</div>