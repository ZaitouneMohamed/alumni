@extends('landing.master')

@section('content')
    @include('landing.auth.login')

    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('assets/landing/images/hero_5.jpg');">

        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $post->title }}</h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 me-3 d-inline-block"><img
                                    src="{{ asset('assets/landing/images/person_1.jpg') }} " alt="Image"
                                    class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By {{ $post->user->first_name }} {{ $post->user->last_name }}
                            </span>
                            <span>&nbsp;-&nbsp; February 10, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            {!! html_entity_decode($post->body) !!}
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                    </div>
                    <div class="pt-5 comment-wrap">
                        <h3 class="mb-5 heading">{{ $post->comments->count() }} Comments</h3>
                        <ul class="comment-list">
                            @foreach ($post->comments as $item)
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ asset('assets/landing/images/person_1.jpg') }}"
                                            alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $item->user->first_name }} {{ $item->user->last_name }}</h3>
                                        <div class="meta">{{ $item->created_at }}</div>
                                        <p>{{ $item->body }}</p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            @auth
                                <form action="{{ route('addComment', $post->id) }}" class="p-5 bg-light" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" name="body" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>
                                </form>
                            @endauth
                            @guest
                                <input type="submit" value="please login" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#loginForm">
                            @endguest
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="sidebar-search-form">
                            <span class="bi-search"></span>
                            <input type="text" class="form-control" id="s"
                                placeholder="Type a keyword and hit enter">
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{ asset('assets/landing/images/person_2.jpg') }}" alt="Image Placeholder"
                                class="img-fluid mb-3">
                            <div class="bio-body">
                                <h2>{{ $post->user->first_name }} {{ $post->user->last_name }}</h2>
                                <p class="mb-4">
                                    @if ($post->user->hasRole('encien'))
                                        encien
                                    @elseif ($post->user->hasRole('recruteur'))
                                        {{ $post->user->company_name }}
                                    @endif
                                </p>
                                <p><a href="#" class="btn btn-primary btn-sm rounded px-2 py-2">Read my bio</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>


    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-uppercase text-black">More Blog Posts</div>
            </div>
            <div class="row">
                @foreach (\App\Models\Post::where('type', 1)->orderBy('id', 'DESC')->take(4)->get() as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-entry">
                            <a href="{{ route('post.show', $item) }}" class="img-link">
                                <img src="{{ asset('assets/landing/images/img_1_horizontal.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <span class="date">{{ $item->created_at->format('F d , Y ') }}</span>
                            <h2><a href="single.html">{{ $item->title }}</a></h2>
                            <p><a href="{{ route('post.show', $item) }}" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
