@extends('layouts/app')

@section('content')

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="1000">
            <img src="{{asset('images/slider/one.jpg')}}" class="d-block w-100 slider mx-auto mt-5" alt="...">
        </div>
        <div class="carousel-item" data-interval="1000">
            <img src="{{asset('images/slider/two.jpg')}}" class="d-block w-100 slider mx-auto mt-5" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/slider/three.jpg')}}" class="d-block w-100 slider mx-auto mt-5" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="servercontainer mx-auto mt-2">
    <div class="d-flex flex-column rounded">
        <div class="logincontainer mb-1 p-2">
            @if (Auth::guard('player')->check() != 1)
            <div class="d-flex flex-column">

                <div class="mx-auto">
                    <img src="{{asset('images/ragna3.png')}}" alt="ragna" class="logologin">
                </div>

                <div class="serverinformation mx-auto">
                    Member Login
                </div>

                <div class="d-flex m-3">
                    <form action="{{ route('login.authenticate') }}" method="POST">
                        @csrf

                        <div class="customtextbox mb-2">
                            <label for="username" class="customtextforlabel">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="customtextbox mb-3">
                            <label for="Password" class="customtextforlabel">Password</label>
                            <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn customforbutton">Sign In</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
        <div class="logincontainer">
            <div class="fb-page" data-href="https://www.facebook.com/MemeRepostIndonesia/" data-tabs="timeline"
                data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true"
                data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/MemeRepostIndonesia/" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/MemeRepostIndonesia/">Meme Repost Indonesia</a></blockquote>
            </div>
        </div>
    </div>

    <div class="container rounded">
        <div class="d-flex justify-content-center">
            <a href="#"><img src="{{asset('images/ragna3.png')}}" alt="ragna" class="logocontent"></a>
        </div>

        <div class="serverinformation">
            Server Rates
        </div>

        <div>
            <ul class="descriptionserver">
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">8000x Base Experience</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">8000x Job Experience</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">1000x Drop Rates</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">10% Normal Card | 5% MvP Card
                </li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">1% Rare Boss Card</li>
            </ul>
        </div>

        <div class="serverinformation mt-2">
            Basic Information
        </div>

        <div>
            <ul class="descriptionserver">
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Modified PK Server</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Pure 2-2 Transcendent Classes
                </li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Max Levels: 255 (Base) and 100
                    (Job)</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">10% Normal Card | 5% MvP Card
                </li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">1% Rare Boss Card</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">IMax Zeny: 2,000,000,000</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Server Timezone: GMT + 8</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Main Language: English</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Max party size: 30 members</li>
            </ul>
        </div>

        <div class="serverinformation mt-2">
            Game And Host
        </div>

        <div>
            <ul class="descriptionserver">
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Multi-client: Enabled</li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Adelay System (Anti-No
                    Delay/Speedhack)
                </li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Gepard Shield Protected
                </li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">DDoS Protection and Mitigation
                </li>
                <li><img src="{{asset('images/poring.gif')}}" alt="" class="bulletgif">Internet/Network speed: 1GB/sec
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection