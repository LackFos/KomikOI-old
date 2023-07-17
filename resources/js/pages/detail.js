$(document).ready(function () {
   // More Button
   $('#more-button').click(() => {
      $('.detail-info').toggleClass('active');
   });

   // Sort Button
   $('#sort-button').click((e) => {
      const $sortButton = $(e.target);

      $('.chapterbox-list').toggleClass('reverse');
      $sortButton.text($sortButton.text() == 'Terakhir' ? 'Pertama' :  'Terakhir');
   });

   // Bookmark
   const $bookmark = $('.bookmark');
   const comicId = $bookmark.data('comicId');
   let isBookmarked = $bookmark.data('isBookmarked');

   $bookmark.click(() => {
      if(isBookmarked) {
         $.post(`/bookmark/delete/${comicId}`, () => {
            isBookmarked = 0;
            $bookmark.removeClass('active');
         });
      } else {
         $.post(`/bookmark/add/${comicId}`, () => {
            isBookmarked = 1;
            $bookmark.addClass('active');
         });
      }
   });

   // ChapterBox
   const $chapterInput = $('#chapterbox-input');
   const $chapterList = $('.chapterbox-list');
   const $chapterItem = $('.chapter-link');

   $chapterInput.on('input', (e) => {
      const chapterNumber = e.target.value;
      const $selectedChapter = findChapterElement(chapterNumber);
      
      $chapterItem.removeClass('highlight');
      if ($selectedChapter.length) {
         $selectedChapter.addClass('highlight');
         const elementScrollTop = $selectedChapter.offset().top - $chapterList.offset().top + $chapterList.scrollTop();
         $chapterList.scrollTop(elementScrollTop);
      }
   });

   $chapterInput.on('keydown', (e) => {
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