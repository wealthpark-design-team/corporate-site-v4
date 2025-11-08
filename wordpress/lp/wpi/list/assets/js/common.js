const setHeaderHeight = () => {
  //初期化
  $(':root').css('--header-height', 'auto');

  //header高さ取得
  const headerHeight = $('.header').innerHeight();

  //CSS変数定義
  $(':root').css('--header-height', headerHeight + 'px');
}

$(window).on('load resize', function () {
  setHeaderHeight();
});


$(window).on('load', function () {

  $(".header-hum-btn").click(function () {
    $(this).toggleClass('active');
  });
  $(".header-nav__link").click(function () {
    $(".header-hum-btn").removeClass('active');
    $('.header-nav').removeClass('header-nav_open');
    $('.header-hum-btn__bar_top').removeClass('header-hum-btn__bar_top_open');
    $('.header-hum-btn__bar_bottom').removeClass('header-hum-btn__bar_bottom_open');
    $('.header-hum-btn__bar_middle').removeClass('header-hum-btn__bar_middle_open');
  });
});

$("a[href^='#']").click(function () {
  var speed = 500; // スクロール速度(ミリ秒)
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $('html').animate({ scrollTop: position }, speed, 'swing');
  return false;
});

$(window).on("resize load", function () {
  var h = 0;
  $('.front-discount-list__item_left').css('height', 'auto');
  $('.front-discount-list__item_right').css('height', 'auto');

  $('.front-discount-list__item_left').each(function (index, element) {
    var h = $(this).outerHeight();
    var h2 = $('.front-discount-list__item_right').eq(index).outerHeight()
    if (h < h2) {
      h = h2;
    }

    $(this).css('height', h);
    $('.front-discount-list__item_right').eq(index).css('height', h);
  });
});


$(window).on('load scroll', function () {
  var doch = $(document).innerHeight(); //ページ全体の高さ
  var winh = $(window).innerHeight(); //ウィンドウの高さ
  var bottom = doch - winh - 400; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
  if ($(window).scrollTop() > 300 && $(window).scrollTop() < bottom) {
    $(".bottom-nav").fadeIn();
  }
  if (bottom <= $(window).scrollTop() || $(window).scrollTop() <= 300) {
    //一番下までスクロールした時に実行
    $(".bottom-nav").fadeOut();
  }
});



$('.front-func-voice__list').slick({
  dots: true,
  centerMode: true,
  infinite: true,
  autoplaySpeed: 3000,
  autoplay: true,
  variableWidth: true
});


/*★★★★★★★★★★★★★★★★★★★★★★★★

 アコーディオン

★★★★★★★★★★★★★★★★★★★★★★★★*/
$('.front-faq-top').click(function () {
  if ($(this).next().is(":hidden")) {
    $('.front-faq-bottom', this).slideUp(200);
    $(this).next().slideDown(200);
    $(this).addClass('front-faq-top_open');
  } else {
    $(this).next().slideUp(200);
    $(this).removeClass('front-faq-top_open');
  };
});


/*★★★★★★★★★★★★★★★★★★★★★★★★

 ヘッダーバー sticky

★★★★★★★★★★★★★★★★★★★★★★★★*/


$('.header').clone().addClass('header_sticky').removeClass('header_origin').appendTo('body');
var showClass = 'header_sticky_show';


$(window).on('load scroll', function () {

  var value = $(this).scrollTop();
  if (value > 600) {

    $(".header_sticky").addClass(showClass);


  } else {
    $(".header_sticky").removeClass(showClass);
  }

});



$(function () {
  // #で始まるリンクをクリックした場合
  $('a[href^="#"]').click(function () {
    // スクロールの速度
    let speed = 400;
    // スクロールタイプ
    let type = 'swing';
    // href属性の取得
    let href = $(this).attr("href");
    // 移動先の取得（hrefが#indexならトップ$(html)に、）
    let target = $(href == "#index" ? 'html' : href);
    // 移動先のポジション取得
    let position = target.offset().top;
    // animateでスムーススクロール
    $('body,html').animate({ scrollTop: position }, speed, type);
    return false;
  });
});

$(function () {
  $('a[href^="#"]').click(function () {
    let speed = 400;
    let type = 'linear';
    let href = $(this).attr("href");
    let target = $(href == "#index" ? 'html' : href);
    let position = target.offset().top;
    $('body,html').animate({ scrollTop: position}, speed, type);
    return false;
  });
});



$(window).on('load', function () {
$('.header_origin .header-hum-btn').on('click', function () {
  $('.header_origin .header-hum-btn__bar_top').toggleClass('header-hum-btn__bar_top_open');
  $('.header_origin .header-hum-btn__bar_middle').toggleClass('header-hum-btn__bar_middle_open');
  $('.header_origin .header-hum-btn__bar_bottom').toggleClass('header-hum-btn__bar_bottom_open');

  $('.header_origin .header-nav').toggleClass('header-nav_open');
});
$('.header_sticky .header-hum-btn').on('click', function () {
  $('.header_sticky .header-hum-btn__bar_top').toggleClass('header-hum-btn__bar_top_open');
  $('.header_sticky .header-hum-btn__bar_middle').toggleClass('header-hum-btn__bar_middle_open');
  $('.header_sticky .header-hum-btn__bar_bottom').toggleClass('header-hum-btn__bar_bottom_open');

  $('.header_sticky .header-nav').toggleClass('header-nav_open');

});

});
