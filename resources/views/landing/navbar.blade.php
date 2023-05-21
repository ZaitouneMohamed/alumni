@include('landing.auth.register')
@include('landing.auth.login')
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('images/IFIAG.png') }}" alt="/"
                            style="height: 154px;">
                    </div>
                    <div class="col-8 text-center">

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="/">Home</a></li>
                            {{-- <li class="has-children">
                                <a href="category.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="#">Search Result</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Blog Single</a></li>
                                    <li><a href="#">Category</a></li>
                                    
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('EvenetsList.list') }}">Evenement</a></li>
                            <li><a href="{{ route('offres.list') }}">Offres</a></li>
                            <li><a href="{{ route('ActualiteList.list') }}">Actuality</a></li>
                            @auth
                                <li><a href="{{ route('chat') }}">Chat</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                <li><a href="/profile">profile</a></li>
                            @endauth
                            @guest
                                <li><a data-bs-toggle="modal" data-bs-target="#registerForm">Register</a></li>
                                <li><a data-bs-toggle="modal" data-bs-target="#loginForm">login</a></li>
                            @endguest
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
