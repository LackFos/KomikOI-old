export const config = {
   rekomendasi: {
      effect: 'fade',
      loop: true,
      slidesPerView: 1,
      spaceBetween: 8,
      autoplay: {
         delay: 5000,
         disableOnInteraction: false
      },
      navigation: {
         prevEl: '#rekomendasi-prev',
         nextEl: '#rekomendasi-next'
      }
   },
 
   populer: {
      slidesPerView: 3,
      spaceBetween: 7,
      navigation: {
         prevEl: '#populer-prev',
         nextEl: '#populer-next'
      },
      breakpoints: {
         768: {
            slidesPerView: 4,
         },
         992: {   
            slidesPerView: 6,
         },
         1400: {
            slidesPerView: 8,
         },
      },  
   }
};