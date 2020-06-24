@extends('layouts.main')

@section('content')
    <div class="contact-us default-layout">
        <div class="default-layout--heading">
            <div class="container">
                <div class="default-layout--heading-image">
                    <h2>Свържете се с нас</h2>
                </div>
                <div class="default-layout--heading-title">
                    <div>
                        Чувстайте се свободни да попитате!
                        Ще се радваме да отговорим на вашият въпрос или запитване колкото можем по-скоро.
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="default-layout--section">
                <div class="default-layout--section-title flex align-items-center justify-content-center">
                    <span class="material-icons">location_on</span>
                    Намерете ни
                </div>
                <div class="default-layout--section-content">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="350" id="gmap_canvas" src="https://maps.google.com/maps?ll=42.50479259999999,27.4626361&q=Бургас&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>undefined<a href="undefined">undefined</a>undefined</div><style>.mapouter{position:relative;text-align:right;height:350px;width:800px;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:800px;}</style></div>
                </div>

                <div class="default-layout--section-title flex align-items-center justify-content-center">
                    <span class="material-icons mat-icons-mr">local_post_office</span>
                    Свържете се с нас
                </div>

                <div class="default-layout--section-content">
                    <x-contact-form></x-contact-form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="gQWU7jK6"></script>    
@endsection