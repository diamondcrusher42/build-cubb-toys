<div class="carousel-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($projects as $project)
            <div class="swiper-slide">
                <a href="/project/{{ $project->slug }}" class="carousel-slider-animate-opacity">
                    <div class="image">
                        <img src="{{ $project->images[0] }}" alt="">
                    </div>
                    <div class="slide-content">
                        <h2>{{ $project->title }}</h2>
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
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
