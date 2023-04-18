const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    //pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });