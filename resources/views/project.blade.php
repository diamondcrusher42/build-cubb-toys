@extends('layouts.app')

@section('content')
    <main id="project">
        <section class="project-summary">
            <div class="container">
                <div class="content">
                    <div class="gallery">
                        <div class="current-image swiper">
                            @include('includes.gallery-loop')
                        </div>
                        <div class="thumbnails swiper">
                            @include('includes.gallery-loop')
                        </div>
                    </div>
                    <div class="summary">
                        <div class="header">
                            <h1>Grand Dinosaurs 6v1</h1>
                            <div class="time-left">
                                <div id="project-count-down" class="tick">
                                    <div class="tick-groups" data-repeat="true" data-transform="preset(d, h, m, s) -> delay">
                                        <div class="tick-group">
                                            <div data-key="value">
                                                <span data-view="flip"></span>
                                            </div>
                                            <div data-key="label" data-view="text" class="tick-label"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="short-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum tortor vitae quam porttitor aliquam lacinia sed ipsum. In hac habitasse platea dictumst. Mauris bibendum nunc vel euismod suscipit. Curabitur vehicula magna id neque commodo, dictum vulputate magna condimentum. Aliquam accumsan fringilla convallis. Fusce tellus dui, venenatis eget maximus ac, faucibus eu sapien.</div>
                        <div class="bottom-part">
                            <div class="author"><span>Created by <strong>Adis</strong></span></div>
                            <div class="money"><span>Money raised<strong>70.000 €</strong></span></div>
                        </div>
                    </div>
                    <div id="support-project-cta">
                        <span class="text">Support this project</span>
                        <div class="bg-icon first"></div>
                        <div class="bg-icon second"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-tabs">
            <div class="container">
                <div class="tabs">
                    <span class="tab active">Project description</span>
                    <span class="tab">Creator updates</span>
                    <span class="tab">Ask creator</span>
                </div>
                <div class="tabs-content">
                    <div class="tab-content">
                        Random content
                    </div>
                </div>
            </div>
        </section>
        <section class="other-projects">
            <div class="container">
                <h2>Other projects</h2>
                <div class="project-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="carousel-slider-animate-opacity">
                                    <div class="image">
                                        <img src="./images/grand-dinosaurs.png" alt="">
                                    </div>
                                    <div class="slide-content">
                                        <h2>Grand Dinosaurs</h2>
                                        <p>Build your own Grand Dinosaur collection, with this 6in1 Dinosaur Toy Set</p>
                                        <div class="bottom-part">
                                            <div class="author"><span>Created by <strong>Adis</strong></span></div>
                                            <div class="money"><span>Money raised<strong>70.000 €</strong></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slider-animate-opacity">
                                    <div class="image">
                                        <img src="./images/grand-dinosaurs.png" alt="">
                                    </div>
                                    <div class="slide-content">
                                        <h2>Grand Dinosaurs</h2>
                                        <p>Build your own Grand Dinosaur collection, with this 6in1 Dinosaur Toy Set</p>
                                        <div class="bottom-part">
                                            <div class="author"><span>Created by <strong>Adis</strong></span></div>
                                            <div class="money"><span>Money raised<strong>70.000 €</strong></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slider-animate-opacity">
                                    <div class="image">
                                        <img src="./images/grand-dinosaurs.png" alt="">
                                    </div>
                                    <div class="slide-content">
                                        <h2>Grand Dinosaurs</h2>
                                        <p>Build your own Grand Dinosaur collection, with this 6in1 Dinosaur Toy Set</p>
                                        <div class="bottom-part">
                                            <div class="author"><span>Created by <strong>Adis</strong></span></div>
                                            <div class="money"><span>Money raised<strong>70.000 €</strong></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slider-animate-opacity">
                                    <div class="image">
                                        <img src="./images/grand-dinosaurs.png" alt="">
                                    </div>
                                    <div class="slide-content">
                                        <h2>Grand Dinosaurs</h2>
                                        <p>Build your own Grand Dinosaur collection, with this 6in1 Dinosaur Toy Set</p>
                                        <div class="bottom-part">
                                            <div class="author"><span>Created by <strong>Adis</strong></span></div>
                                            <div class="money"><span>Money raised<strong>70.000 €</strong></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
