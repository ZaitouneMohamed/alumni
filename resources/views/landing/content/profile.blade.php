@extends('landing.master')

@section('content')
    <section class="section posts-entry ">
        <div class="container ">
            <div class="row g-3"style="margin-left: 450px">
                <div class="text-center">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="{{ asset('assets/landing/images/person_1.jpg') }} " alt="Image"
                                        class="img-fluid">
                                </a>
                                <span class="date">{{ auth()->user()->first_name }}
                                    {{ auth()->user()->last_name }}</span>
                                <h2><a href="#">{{ auth()->user()->phone }}</a></h2>
                                @if (auth()->user()->hasRole('etudiant'))
                                    <h2><a href="#">{{ auth()->user()->fillier }}</a></h2>
                                @else
                                @endif
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
