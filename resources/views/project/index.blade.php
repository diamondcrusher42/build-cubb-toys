@extends('layouts.app')

@section('content')
    <main id="projects">
        <div class="container">
            <div class="grid">
            @foreach($projects as $project)
                <div class="project-card">
                    <a href="/project/{{ $project->slug }}" class="carousel-slider-animate-opacity">
                        <div class="image">
                            <img src="{{ $project->images[0] }}" alt="">
                        </div>
                        <div class="slide-content">
                            <span class="title">{{ $project->title }}</span>
                            <p>{{ $project->short_description }}</p>
                            <div class="bottom-part">
                                <div class="author"><span>Created by <strong>{{ $project->author }}</strong></span></div>
                                <div class="money"><span>Money raised<strong>{{ $project->money_raised }}</strong></span></div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection