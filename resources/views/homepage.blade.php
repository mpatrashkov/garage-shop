@extends('layouts.main')

@section('content')
<div class="homepage default-layout">
    <div class="default-layout--heading">
        <div class="container">
            <div class="default-layout--heading-image">
                <img class="fit" src='{{ Voyager::image(setting("site.image")) }}' />
            </div>
            <div class="default-layout--heading-title">
                <div>
                    {{ setting("site.description") }}

                    <button class="btn btn__primary">За нас</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="default-layout--section">
            <div class="default-layout--section-title">
                Промоции
            </div>
            <x-products-carousel :products="$promotions"></x-products-carousel>
        </div>
    </div>

    <div class="default-layout--heading">
        <div class="container">
            <div class="homepage--facebook">
                <div class="fb-page homepage--facebook-widget" data-href="https://www.facebook.com/facebook" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/facebook">Facebook</a>
                    </blockquote>
                </div>
                <div class="homepage--facebook-title">
                    <div>Харесайте страницата ни във Facebook!</div>
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