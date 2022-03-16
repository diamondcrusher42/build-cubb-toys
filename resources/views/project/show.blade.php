@extends('layouts.app')

@section('content')
    <main id="project" data-id="{{ $project->id }}">
        <section class="project-summary">
            <div class="container">
                <div class="content">
                    <div class="gallery">
                        <div class="current-image swiper">
                            @include('includes.gallery-loop', ['images' => $project->images])
                        </div>
                        <div class="thumbnails swiper">
                            @include('includes.gallery-loop', ['images' => $project->images])
                        </div>
                        <div class="author-money-mobile">
                            <div class="author"><span>Created by <strong>{{ $project->author }}</strong></span></div>
                            <div class="money"><span>Money raised<strong>{{ $project->money_raised }}</strong></span></div>
                        </div>
                    </div>
                    <div class="summary">
                        <div class="header">
                            <h1>{{ $project->title }}</h1>
                            <div class="time-left">
                                <div id="project-count-down" class="tick" data-date="{{ $project->end_date }}">
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
                        <div class="short-desc">{{ $project->short_description }}</div>
                        <div class="bottom-part">
                            <div class="author"><span>Created by <strong>{{ $project->author }}</strong></span></div>
                            <div class="money"><span>Money raised<strong>{{ $project->money_raised }}</strong></span></div>
                        </div>
                        <div id="support-project-cta">
                            <span class="text">Support this project</span>
                            <div class="bg-icon first"></div>
                            <div class="bg-icon second"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="support-project">
            <div class="container">
                <div class="support-box">
                    <h2>Support this project</h2>
                    <div class="description">
                        <p>Our platform enables anyone to become a supporter or investor in the project. Your pledge will help directly fund the product and its creator.</p>
                        <p>You can fund the project in 2 ways, as a supporter, where you receive a discount for the preorder, or as an investor, where we reward you with interest and a free product.</p>
                    </div>
                    <div class="support-tiers">
                        <div class="tier supporter" data-amount="{{ round($project->supporter_price) }}">
                            <div class="title">Supporter</div>
                            <div class="details">
                                <div class="text">
                                    <div class="investment-amount">
                                        <span>Preorder</span>
                                        <span class="amount">{{ round($project->supporter_price) }} €</span>
                                    </div>
                                    <div class="investment-reward">
                                        <span class="bigger">50%</span>
                                        <span>discount on product</span>
                                    </div>
                                </div>
                                <div class="invest-button">Invest now</div>
                            </div>
                        </div>
                        <div class="tier gold" data-amount="1000">
                            <div class="title">Gold investor</div>
                            <div class="details">
                                <div class="text">
                                    <div class="investment-amount">
                                        <span>Invest</span>
                                        <span class="amount">1.000 €</span>
                                    </div>
                                    <div class="investment-reward">
                                        <span class="bigger">110%</span>
                                        <span>funds</span>
                                        <span class="light">+</span>
                                        <span class="bigger">FREE</span>
                                        <span>product</span>
                                    </div>
                                </div>
                                <div class="invest-button">Invest now</div>
                            </div>
                        </div>
                        <div class="tier platinum" data-amount="5000">
                            <div class="title">Platinum investor</div>
                            <div class="details">
                                <div class="text">
                                    <div class="investment-amount">
                                        <span>Invest</span>
                                        <span class="amount">5.000 €</span>
                                    </div>
                                    <div class="investment-reward">
                                        <span class="bigger">120%</span>
                                        <span>funds</span>
                                        <span class="light">+</span>
                                        <span class="bigger">FREE</span>
                                        <span>product</span>
                                    </div>
                                </div>
                                <div class="invest-button">Invest now</div>
                            </div>
                        </div>
                        <div class="tier diamond" data-amount="10000">
                            <div class="title">Diamond investor</div>
                            <div class="details">
                                <div class="text">
                                    <div class="investment-amount">
                                        <span>Invest</span>
                                        <span class="amount">10.000 €</span>
                                    </div>
                                    <div class="investment-reward">
                                        <span class="bigger">130%</span>
                                        <span>funds</span>
                                        <span class="light">+</span>
                                        <span class="bigger">FREE</span>
                                        <span>product</span>
                                    </div>
                                </div>
                                <div class="invest-button">Invest now</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-tabs">
            <div class="container">
                <div class="tabs">
                    <div class="tab active">
                        <span class="title">Project description</span>
                        <div class="tab-content">
                            {!! $project->description !!}
                        </div>
                    </div>
                    <div class="tab">
                        <span class="title">Creator updates</span>
                        <div class="tab-content">
                            {!! $project->creator_updates !!}
                        </div>
                    </div>
                    <div class="tab" style="display: none">
                        <span class="title">Ask creator</span>
                        <div class="tab-content">
                            <p>Ask....</p>
                        </div>
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
                            @foreach($otherProjects as $otherProject)
                                <div class="swiper-slide project-card">
                                    <a href="/project/{{ $otherProject->slug }}" class="carousel-slider-animate-opacity">
                                        <div class="image">
                                            <img src="{{ $otherProject->images[0] }}" alt="">
                                        </div>
                                        <div class="slide-content">
                                            <span class="title">{{ $otherProject->title }}</span>
                                            <p>{{ $otherProject->short_description }}</p>
                                            <div class="bottom-part">
                                                <div class="author"><span>Created by <strong>{{ $otherProject->author }}</strong></span></div>
                                                <div class="money"><span>Money raised<strong>{{ $otherProject->money_raised }}</strong></span></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
