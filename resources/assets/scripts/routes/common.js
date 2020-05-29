export default {
  init() {
    // JavaScript to be fired on all pages
    this.HomeSlider();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },

  HomeSlider(){
    $('.homeslide').slick({
      dots: true,
      // infinite: true,
      speed: 1000,
      // slidesToShow: 1,
      // centerMode: true,
      // variableWidth: true,
      autoplay: false,
      // responsive: true
    });
    // console.log('hello there'); 
  },
};
