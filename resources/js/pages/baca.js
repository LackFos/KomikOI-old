import isOnView from '../helpers/isOnView';

$(document).ready(function () {
   let chapterCounter = 1;
   let nextChapter = $('#next-chapter').attr('href');
   let contentEnd = $('#end-indicator');

   if (contentEnd.length) {
      $(window).on('load scroll', handleScroll);
   }
   
   function handleScroll() {
      if (isOnView(contentEnd)) {
         contentEnd.remove();
         if (chapterCounter <= 5) {
            $.get({
               url: nextChapter,
               success: function (response) {
                  updateChapter(response);
                  chapterCounter++;
               },
            });
         } else {
            window.location.href = nextChapter;
         }
      }
   }

   function updateChapter(nextPage) {
      const chapterTitle = $(nextPage).find('h1').text();
      const chapterBanner = $(nextPage).find('.chapter-banner').removeClass('hide');
      const content = $(nextPage).find('.content');

      $('#content-end').remove();
      $('.baca').append(chapterBanner);
      $('.baca').append(content);

      window.history.pushState({}, '', nextChapter);
      document.title = `Komik ${chapterTitle} Bahasa Indonesia - KomikOI`;

      nextChapter = $('#next-chapter').attr('href');  
      contentEnd = $('#end-indicator');
   }
});
