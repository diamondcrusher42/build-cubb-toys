@extends('layouts.app')

@section('content')
    <main id="home">
        <section class="project-carousel">
            @include('includes.project-slider')
        </section>
        <section class="cta-boxes">
            <div class="container">
                <div class="cta-boxes">
                    <div class="cta-box green">
                        <div class="content">
                            <div class="title">Subscribe</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mollis, ex vitae feugiat ornare, ante velit.</div>
                            <a href="#" class="button">Subscribe now</a>
                        </div>
                        <div class="bg-icon"></div>
                    </div>
                    <div class="cta-box blue">
                        <div class="content">
                            <div class="title">Projects</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mollis, ex vitae feugiat ornare, ante velit.</div>
                            <a href="#" class="button">Show all projects</a>
                        </div>
                        <div class="bg-icon first"><img src="/img/blue-brick.png"></div>
                        <div class="bg-icon second"><img src="/img/blue-brick.png"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
