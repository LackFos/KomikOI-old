import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const currentPath = window.location.pathname;
const segmentPath = currentPath.split('/').filter(Boolean);
const currentPage = segmentPath[0] ? segmentPath[0] : 'home';

switch(currentPage) {
case 'home':
   import('./pages/home');
   break;
case 'detail':
   import('./pages/detail');
   break;
}