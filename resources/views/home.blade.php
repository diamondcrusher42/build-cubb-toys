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
                            <div class="text">Click here to subscribe and be the first to find out when we launch new projects and contests with cool prizes from our creators.</div>
                            <a href="#" class="button">Subscribe now</a>
                        </div>
                        <div class="bg-icon"></div>
                    </div>
                    <div class="cta-box blue">
                        <div class="content">
                            <div class="title">Projects</div>
                            <div class="text">Check out and explore all the latest ideas our creators have build. You can show your support, follow your favorite creators or contribute to help bring amazing projects to reality.</div>
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
