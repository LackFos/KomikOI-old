function getHalamanSekarang(url) {
   const urlObj = new URL(url);
   urlObj.search = '';
   const segmenUrl = urlObj.pathname.split('/').filter(Boolean);
   const halamanSekarang = segmenUrl[0];
   return halamanSekarang && !halamanSekarang.startsWith('#') ? halamanSekarang : 'home';
}
 
const halamanSekarang = getHalamanSekarang(window.location.href);
export default halamanSekarang;