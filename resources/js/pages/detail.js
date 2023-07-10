$(document).ready(function () {
   // More Button
   $('#more-button').click(function() {
      $('.detail-info').toggleClass('active');
   });

   $('#sort-button').click(function(e){
      const $sortType = $(e.target);

      $('.chapterbox-list').toggleClass('reverse');
      if($sortType.text() == 'Terakhir') {
         $sortType.text('Pertama');
      } else {
         $sortType.text('Terakhir');
      }

   
   });

   // ChapterBox
   const $chapterInput = $('#chapterbox-input');
   const $chapterList = $('.chapterbox-list');
   const $chapterItem = $('.chapter-link');

   // Input OnChange
   $chapterInput.on('input', function(e) {
      const chapterNumber = e.target.value;
      const $selectedChapter = findChapterElement(chapterNumber);
      
      $chapterItem.removeClass('highlight');
      if ($selectedChapter.length) {
         $selectedChapter.addClass('highlight');
         const elementScrollTop = $selectedChapter.offset().top - $chapterList.offset().top + $chapterList.scrollTop();
         $chapterList.scrollTop(elementScrollTop);
      }
   });

   // Input onEnter
   $chapterInput.on('keydown', function(e) {
      if (e.keyCode === 13) {
         const chapterNumber = e.target.value;
         const $selectedChapter = findChapterElement(chapterNumber);
         const chapterURL = $selectedChapter.attr('href');

         if(chapterURL) {
            window.location.href = chapterURL;
         }
      }
   });    

   function findChapterElement(chapterNumber) {
      return $(`.chapter-link[data-chapternumber="${chapterNumber}"]`);
   }
});