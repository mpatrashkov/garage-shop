@extends('layouts.main')

@section('content')
    <div class="homepage">
        <div class="homepage--heading">
            <div class="container">
                <div class="homepage--heading-image">
                    <img class="fit" src="https://i0.wp.com/auspusi.bg/wp-content/uploads/2015/09/baner2.jpg?fit=2356%2C1061&ssl=1" />
                </div>
                <div class="homepage--heading-title">
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, 
                        inventore blanditiis. Asperiores suscipit quis nulla adipisci culpa 
                        veniam voluptas iste, perferendis error possimus, deleniti aspernatur 
                        provident ea iure deserunt necessitatibus?

                        <button class="btn btn__primary">За нас</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="homepage--section">
                <div class="homepage--section-title">
                    Промоции
                </div>
                <x-products-carousel></x-products-carousel>
            </div>
        </div>

        <div 
            class="fb-page" 
            data-href="https://www.facebook.com/facebook" 
            data-tabs="" 
            data-width="" 
            data-height="" 
            data-small-header="true" 
            data-adapt-container-width="false" 
            data-hide-cover="false" 
            data-show-facepile="true">
            <blockquote 
                cite="https://www.facebook.com/facebook" 
                class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/facebook">Facebook</a>
            </blockquote>
        </div>

        <div class="container">
            <div class="homepage--section">
                <div class="homepage--section-title">
                    Нови предложения
                </div>
                <x-products-carousel></x-products-carousel>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="gQWU7jK6"></script>    
@endsection