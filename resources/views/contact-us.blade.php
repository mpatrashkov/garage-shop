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
                <div class="default-layout--section-title">
                    Форма за контакт
                </div>

                <div class="default-layout--section-content">
                    <x-contact-form></x-contact-form>
                </div>
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
    </div>
@endsection

@section('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="gQWU7jK6"></script>    
@endsection