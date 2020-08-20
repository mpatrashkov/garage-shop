<div>
    {{-- <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                @foreach ($products as $product)    
                    <li class="glide__slide">
                        <x-product :product="$product"></x-product>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>
    </div> --}}

    <carousel :per-page="4">
        @foreach ($products as $product)    
            <slide>
                <div class="productCarousel--product">
                    <x-product :product="$product"></x-product>
                </div>
            </slide>
        @endforeach
    </carousel>
</div>