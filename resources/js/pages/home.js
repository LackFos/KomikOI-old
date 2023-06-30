import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.esm.browser.min.js';
import { config } from '../config/swiper';

$(document).ready(function () {
   new Swiper('#rekomendasi', config.rekomendasi);
   new Swiper('#populer', config.populer);

   $('.genre-button-more').click(function(){
      $('#genre-list').toggleClass('aktif');
   });
});