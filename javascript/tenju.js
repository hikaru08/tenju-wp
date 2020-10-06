window.onload = function(){

  // ハンバーガーメニュー
  jQuery(document).on('click', '.toggle', function(){
    jQuery('.toggle').toggleClass('active');
    jQuery('.navi').toggleClass('active');
  });


  // footer閉会ボタン
  jQuery(document).on('click', '.footer__btn', function(){
    jQuery('.footer').toggleClass('hidden');
    jQuery('.footer__btn').toggleClass('hidden');
  });

  // トップに戻るボタン
  var pagetop = jQuery('.return-top');
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 500) {
        pagetop.fadeIn();
    } 
    else {
        pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
      jQuery('body, html').animate({ scrollTop: 0 }, 500);
      return false;
  });
};