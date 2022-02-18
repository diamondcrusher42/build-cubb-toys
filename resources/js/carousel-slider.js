// eslint-disable-next-line
import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';

function createSlider3D(selector) {
  
  const swiperEl = document.querySelector(selector + ' .swiper');

  if (!swiperEl) {
    return;
  }

  // init main swiper
  const swiper = new Swiper(swiperEl, {
    modules: [Autoplay, Navigation, Pagination],
    grabCursor: true,
    watchSlidesProgress: true,
    loop: true,
    loopedSlides: 5,
    slidesPerView: 'auto',
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3000
    },
    on: {
      // eslint-disable-next-line
      progress(swiper) {
        const scaleStep = 0.175;
        const zIndexMax = swiper.slides.length;
        for (let i = 0; i < swiper.slides.length; i += 1) {
          const slideEl = swiper.slides[i];
          const slideProgress = swiper.slides[i].progress;
          const absProgress = Math.abs(slideProgress);
          let modify = 1;
          if (absProgress > 1) {
            modify = (absProgress - 1) * 0.3 + 1;
          }
          const opacityEls = slideEl.querySelectorAll(
            '.carousel-slider-animate-opacity',
          );
          const translate = `${slideProgress * modify * 40}%`;
          const scale = 1 - absProgress * scaleStep;
          const zIndex = zIndexMax - Math.abs(Math.round(slideProgress));
          slideEl.style.transform = `translateX(${translate}) scale(${scale})`;
          slideEl.style.zIndex = zIndex;
          if (absProgress >= 3) {
            slideEl.style.opacity = 0;
          } else {
            slideEl.style.opacity = 1;
          }

          opacityEls.forEach((opacityEl) => {
            opacityEl.style.opacity = 1 - absProgress / 3;
          });
        }
      },
      // eslint-disable-next-line
      setTransition(swiper, duration) {
        for (let i = 0; i < swiper.slides.length; i += 1) {
          const slideEl = swiper.slides[i];
          const opacityEls = slideEl.querySelectorAll(
            '.carousel-slider-animate-opacity',
          );
          slideEl.style.transitionDuration = `${duration}ms`;
          opacityEls.forEach((opacityEl) => {
            opacityEl.style.transitionDuration = `${duration}ms`;
          });
        }
      },
    },
  });

  return swiper;
}

function createSlider(selector) {
  const swiperEl = document.querySelector(selector + ' .swiper');

  if (!swiperEl) {
    return;
  }

  const swiper = new Swiper(swiperEl, {
    modules: [Autoplay],
    watchSlidesProgress: true,
    loop: true,
    slidesPerView: 3,
    spaceBetween: 16,
    autoplay: {
      delay: 3000
    },
    on: {
      progress(swiper) {
        for (let i = 0; i < swiper.slides.length; i++) {
          const slideEl = swiper.slides[i];
          const slideProgress = swiper.slides[i].progress;

          if (slideProgress > 0) {
            slideEl.style.opacity = 1 - slideProgress;
          } else if (slideProgress < -2) {
            slideEl.style.opacity = 3 - Math.abs(slideProgress);
          } else {
            slideEl.style.opacity = 1;
          }
        }
      },
      setTransition(swiper, duration) {
        for (let i = 0; i < swiper.slides.length; i++) {
          const slideEl = swiper.slides[i];
          slideEl.style.transition = 'opacity ' + duration + 'ms linear';
        }
      }
    }
  });
}

export { createSlider3D, createSlider }
