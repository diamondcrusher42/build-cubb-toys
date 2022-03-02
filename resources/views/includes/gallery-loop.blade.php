<div class="swiper-wrapper">
    @foreach($images as $image)
        <div class="swiper-slide">
            <div class="image-container">
                <img src="{{ $image }}">
            </div>
        </div>
    @endforeach
</div>