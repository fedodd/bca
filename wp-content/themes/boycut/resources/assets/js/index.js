/* import menuTabs from './tabs';
import move from './vendor/move' */
/* tabLinks, tabImages, tabs */
import toggle from './toggle';

const toggleBlockCut = ['popupCut'];
toggle('.button.is__cut', toggleBlockCut, ['formCut']);
toggle('PopupCloseCut', toggleBlockCut);

const toggleBlockEnroll = ['popupEnroll'];
toggle('.button.is__enroll', toggleBlockEnroll, ['formEnroll']);
toggle('PopupCloseEnroll', toggleBlockEnroll);

$(document).ready(function () {
  $('.banner-sliders').slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: true,
    pauseOnHover: false,
    pauseOnDotsHover: true,
    speed: 500,
    autoplaySpeed: 5000,
    dotsClass: 'slider-dots'
  });
});

$(document).ready(function () {
  $('.program-slider').slick({
    dots: true,
    customPaging: function (slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<a>' + (i+1) + '</a>';
    },
    arrows: false,
    infinite: true,
    autoplay: false,
    pauseOnHover: false,
    pauseOnDotsHover: true,
    speed: 500,
    autoplaySpeed: 5000,
    dotsClass: 'program-dots'
  });
});

$(document).ready(function () {
  $('.teacher-slider').slick({
    arrows: true,
    dots: true,
    infinite: true,
    autoplay: false,
    pauseOnHover: false,
    pauseOnDotsHover: true,
    speed: 500,
    autoplaySpeed: 5000,
    nextArrow: '<button type="button" class="slick-next teacher-next"></button>',
    prevArrow: '<button type="button" class="slick-prev teacher-prev"></button>',
    dotsClass: 'slider-dots is__teacher'
  });
});

/* gallery */

$(document).ready(function () {
  $('.gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    },
    zoom: {
      enabled: true,
      duration: 300,
      easing: 'ease-in-out'
    },
    retina: {
      ratio: 1,
      replaceSrc: function (item, ratio) {
        return item.src.replace(/\.\w+$/, function (m) { return '@2x' + m; });
      }
    }
  });
});
