@extends('layouts.main')

@section('content')
    <div class="contact-us landing-layout">
        <div class="landing-layout--heading">
            <div class="container">
                <div class="landing-layout--heading-image">
                    <img src="{{ url('/') }}/images/thank-you.png" alt="">
                </div>
                <div class="landing-layout--heading-title">
                    <h3>
                        Благодарим ви за вашето собщение!
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="landing-layout--section">
                <div class="landing-layout--section-content">
                    Вашето съобщение ще бъде обработено колкото се може по-скоро. След което ще се свържем с вас.
                </div>

                <div class="landing-layout--section-content">
                    <a href="{{ url('/') }}">Обратно към начална страница</a>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="gQWU7jK6"></script>    
@endsection