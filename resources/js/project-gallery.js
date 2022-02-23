import Swiper, { Navigation, Thumbs, Controller } from 'swiper';

Swiper.use(Navigation);
Swiper.use(Thumbs);
Swiper.use(Controller);

const currentImage = document.querySelector('main#project .current-image.swiper');
const fullScreen = document.querySelector('main#project .full-screen-swiper-wrap');
const thumbnails = document.querySelector('main#project .thumbnails.swiper');

if (currentImage) {

  const loop = !!thumbnails;

  if (thumbnails) {
    var thumbnailsSwiper = new Swiper(thumbnails, {
      loop: loop,
      spaceBetween: 20,
      slidesPerView: 3,
      breakpoints: {
        512: {
          slidesPerView: 4
        },
        768: {
          slidesPerView: 5
        }
      }
    });
  }

  const currentImageSwiper = new Swiper(currentImage, {
    loop: loop,
    spaceBetween: 20,
    thumbs: {
      swiper: thumbnailsSwiper
    }
  });

  if (fullScreen) {
    document.body.appendChild(fullScreen);

    const fullScreenSwiper = new Swiper('.full-screen-swiper-wrap .swiper', {
      loop: loop,
      navigation: {
        prevEl: fullScreen.querySelector('.prev'),
        nextEl: fullScreen.querySelector('.next')
      }
    });
  
    currentImage.addEventListener('click', function () {
      fullScreen.style.visibility = 'visible';
    });
  
    fullScreen.querySelector('.close').addEventListener('click', function () {
      fullScreen.style.visibility = 'hidden';
    });
  
    currentImageSwiper.controller.control = fullScreenSwiper;
    fullScreenSwiper.controller.control = currentImageSwiper;
  }
}
