export default function (elem) {
   if(elem.length) {
      const elemTop = $(elem).offset().top;
      const elemBottom = elemTop + $(elem).height();
      const docViewTop = $(window).scrollTop();
      const docViewBottom = docViewTop + $(window).height();
      return elemTop <= docViewBottom && elemBottom >= docViewTop;
   } else {
      return false;
   }
}