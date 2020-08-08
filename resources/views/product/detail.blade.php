@extends('layouts.main')

@section('content')
    <div class="product-layout">
        <div class="container">
            <div class="product-layout--overview">
                <div class="product-layout--overview-title">
                    <h2>{{ $product->name }}</h2>
                </div>
    
                <div class="product-layout--overview-image">
                    <img class="fit" src="{{ Voyager::image( $product->image ) }}" />
                </div>

                <div class="product-layout--overview-description">
                    <div class="product-layout--overview-description-text">
                        {!! $product->description !!}
                    </div>

                    <div class="product-layout--overview-description-price">
                        {!! $product->price !!} {{ config('global.currency') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="default-layout--section">
                <div class="default-layout--section-title">
                    Нови предложения
                </div>
                <x-products-carousel :products="$recent"></x-products-carousel>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="gQWU7jK6"></script>    
@endsection