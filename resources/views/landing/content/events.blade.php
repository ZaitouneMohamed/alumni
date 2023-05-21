@extends("landing.master")
@section("content")
    

<section class="section posts-entry">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Evenement List</h2>
            </div>
        </div>
        <div class="row g-3">
            <div>
                <div class="row g-3">
                    @foreach ($events as $item)
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
                {{ $events->links(  ) }}
            </div>
        </div>
    </div>
</section>
@endsection