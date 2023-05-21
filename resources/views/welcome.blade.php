@extends('landing.master')

@section('content')
    <section class="section bg-light">
        <div class="container">

            <div class="row retro-layout">
                @foreach (\App\Models\Post::where('type', 1)->orderBy('id', 'DESC')->take(6)->get() as $item)
                    <div class="col-4">
                        <a href="{{ route('post.show', $item) }}" class="h-entry mb-30 v-height gradient">

                            <div class="featured-img"
                                style="background-image: url('assets/landing/images/img_2_horizontal.jpg');"></div>

                            <div class="text">
                                <span class="date">{{ $item->created_at->format('F d , Y ') }}</span>
                                <h2>{{ $item->title }}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Offre</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{route('offres.list')}}" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div>
                    <div class="row g-3">
                        @foreach (\App\Models\Post::where('type', 2)->orderBy('id', 'DESC')->take(3)->get() as $item)
                            <div class="col-md-4">
                                <div class="blog-entry">
                                    <a href="{{route('post.show',$item)}}" class="img-link">
                                        <img src="{{ asset('assets/landing/images/img_1_sq.jpg') }} " alt="Image"
                                            class="img-fluid">
                                    </a>
                                    <span class="date">{{ $item->created_at->format('F d , Y ') }}</span>
                                    <h2><a href="">{{ Str::limit($item->title, 20, '...') }}</a></h2>
                                    <p>{{ Str::limit($item->body, 100, '...') }}</p>
                                    <p><a href="{{route('post.show',$item)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-md-3">
                <ul class="list-unstyled blog-entry-sm">
                    <li>
                        <span class="date">Apr. 14th, 2022</span>
                        <h3><a href="">Don’t assume your user data in the cloud is safe</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </li>

                    <li>
                        <span class="date">Apr. 14th, 2022</span>
                        <h3><a href="">Meta unveils fees on metaverse sales</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </li>

                    <li>
                        <span class="date">Apr. 14th, 2022</span>
                        <h3><a href="">UK sees highest inflation in 30 years</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </li>
                </ul>
            </div> --}}
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row">
                @foreach (\App\Models\Post::where('type', 3)->orderBy('id', 'DESC')->take(4)->get() as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-entry">
                            <a href="{{route('post.show',$item)}}" class="img-link">
                                <img src="{{ asset('assets/landing/images/img_1_horizontal.jpg') }} " alt="Image"
                                    class="img-fluid">
                            </a>
                            <span class="date">{{ $item->created_at->format('F d , Y ') }}</span>
                            <h2><a href="">{{ $item->title }}</a></h2>
                            <p>{{ Str::limit( $item->description , 20, '...') }}.</p>
                            <p><a href="{{route('post.show',$item)}}" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End posts-entry -->


    <section class=" pull-down section-item" style="background-color:#F1F1F1;">
        <div class="container space-container">
            <div class="space-top space-bottom">
                <div class="row-fluid">

                    <div id="widget14" class="col-xs-12 span12 widget widget-static-page">
                        <div class="widget-v-container">


                            <div class="widget-content">
                                <div class="richedit_wrap">
                                    <div class="row home-widget-chiffre">
                                        <div class="col-4 span4 space-top-medium" style="text-align: center;"><a
                                                href="#">
                                                <p style="line-height:1;"><i class="af-font-icon-degree-light cl-secondary"
                                                        style="font-size:44px;"></i></p>
                                                <p
                                                    style="margin-bottom: 8px; font-size: 44px; font-weight: bold; line-height: 1;">
                                                    {{ \App\Models\User::count() }}</p>
                                                <p style="font-size:16px;text-transform:uppercase;line-height:1;"><span
                                                        style="font-size: 14px;">Alumni</span></p>
                                            </a></div>
                                        <div class="col-4 span4 space-top-medium" style="text-align:center;">
                                            <p style="line-height:1;"><a href="/agenda"><i
                                                        class="af-font-icon-calendar-light cl-secondary"
                                                        style="font-size:44px;"></i></a></p>
                                            <p
                                                style="margin-bottom: 8px; font-size: 44px; font-weight: bold; line-height: 1;">
                                                <a href="#">{{ \App\Models\Post::where('type', 3)->count() }}</a>
                                            </p>
                                            <p style="font-size:16px;text-transform:uppercase;line-height:1;">Événements</p>
                                        </div>
                                        <div class="col-4 span4 space-top-medium" style="text-align:center;">
                                            <p style="line-height:1;"><a href="/page/carrieres"><i
                                                        class="af-font-icon-partnership-light cl-secondary"
                                                        style="font-size:44px;"></i></a></p>
                                            <p
                                                style="margin-bottom: 8px; font-size: 44px; font-weight: bold; line-height: 1;">
                                                <a
                                                    href="#">{{ \App\Models\Post::where('type', 2)->count() }}</a>
                                            </p>
                                            <p style="font-size:16px;text-transform:uppercase;line-height:1;">offres
                                                d'emploi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <script type="text/javascript">
                                ! function() {
                                    // If instance of twttr dont exist, reload twitter widgets
                                    if (typeof twttr !== 'undefined') {
                                        twttr.widgets.load();
                                    }
                                }();
                            </script>
                            <script type="text/javascript">
                                ! function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>

                    </div>
                    <script type="text/javascript">
                        YAHOO.util.Event.onDOMReady(function() {
                            var current_section = new Section({
                                id: 'widget14',
                                url: '/taglib/sectionupdate/update?updatelist=widget14:action://static/index/show',
                                notag: false,
                                webroot: '',
                                urlparams: "tpl=widget-static-page-home&alias=statistiques-hp-deconnectee&widget_home=1&full=1&show_title=1&rightcolumn=&side=&icon=&show_widget_front_header=1&widget_home=true&uid=6469da609cf35",
                                replace_notag: true
                            });

                            current_section.request.setStaticParam("sectionid", "widget14");
                            addCustomTag('section', 'widget14', current_section);
                        })
                    </script>

                </div>
            </div>
        </div>
    </section>
    <section class=" pull-down section-item" style="background-color:#F1F1F1;">
        <main>
            <!-- Element inclus dans la page -->
            <section>
                <div id="maMap"></div>
            </section>
        </main>
        <style>
            #maMap {
                width: 100%;
                height: 400px;
                padding: 10px;
                background-color: grey;
            }
        </style>
        <script>
            window.addEventListener("load", function(event) {
                var map = L.map("maMap"); /* the id of the tag used for map injection */
                // Pour trouver vos coordonnées : https://www.coordonnees-gps.fr/
                // Paramètre de map.setView : map.setView([latitude, longitude],zoom)
                map.setView([33.975455243098004, -6.8545206606138125], 12);

                // --- We add a layer based on OpenStreetMap ---
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 30,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                // --- We add a circle to the map ---
                var circle = L.circle([33.975455243098004, -6.8545206606138125], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 200
                }).addTo(map);

                // --- We add a marker, with events, to the map ---
                var marker = L.marker([33.975455243098004, -6.8545206606138125])
                    .bindPopup("La medina de Rabat" + " " +{{ \App\Models\User::where('paye',"rabat")->count() }} )
                    .addTo(map);
                marker.on("mouseover", function(event) {
                    this.openPopup();
                });
                var circle = L.circle([33.583047644608094, -7.6048631483179125], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 200
                }).addTo(map);

                // --- We add a marker, with events, to the map ---
                var marker = L.marker([33.583047644608094, -7.6048631483179125])
                    .bindPopup("La medina de Casablana" + " " +{{ \App\Models\User::where('paye',"casablanca")->count() }})
                    .addTo(map);
                marker.on("mouseover", function(event) {
                    this.openPopup();
                });
                var circle = L.circle([46.581138291903116, 2.506012808912607], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 200
                }).addTo(map);

                // --- We add a marker, with events, to the map ---
                var marker = L.marker([46.581138291903116, 2.506012808912607])
                    .bindPopup("La city de france"  + " " +{{ \App\Models\User::where('paye',"france")->count() }} )
                    .addTo(map);
                marker.on("mouseover", function(event) {
                    this.openPopup();
                });
                marker.on("mouseout", function(event) {
                    this.closePopup();
                });
            });
        </script>
    </section>
@endsection
@section("style")
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
@endsection