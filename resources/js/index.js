const currentPath = window.location.pathname;
const segmentPath = currentPath.split('/').filter(Boolean);
const currentPage = segmentPath[0] ? segmentPath[0] : 'home';

$.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

(async () => {
   switch (currentPage) {
   case 'home':
      await import('./pages/home');
      break;
   case 'detail':
      await import('./pages/detail');
      break;
   }
})();
