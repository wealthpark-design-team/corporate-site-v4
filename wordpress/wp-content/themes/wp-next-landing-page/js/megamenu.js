// ナビゲーションの背景色の変化
$(function () {
	var header = $('.navigation--common--top');
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 0) {
			header.addClass('navigation--scroll');
		} else {
			header.removeClass('navigation--scroll');
		}
	});
});

// グロナビの開閉
$(function () {
	$('.menu-container--pc .menu__lv1 .menu__lv1Parent').on('click', function () {
		$(this).toggleClass('menu__lv1Parent--active');
		$('.headerBg').removeClass('headerBg--active');
		$(this).siblings('menu__lv1Parent').removeClass('menu__lv1Parent--active');
		$(this).next('.menu-container--pc .menu__lv1Open').fadeToggle(200);
		$(this).next('.menu__lv1Open').siblings('.menu__lv1Open').fadeOut(200);
		$('.menu-container--pc .menu__lv1 .menu__lv1Parent')
			.not($(this))
			.next('.menu-container--pc .menu__lv1 .menu__lv1Open')
			.fadeOut(200);
		$('.menu-container--pc .menu__lv1 .menu__lv1Parent')
			.not($(this))
			.removeClass('menu__lv1Parent--active');
	});
	$('.headerBg').on('click', function () {
		$(this).toggleClass('headerBg--active');
		$(this).toggleClass('menu__lv1Parent--active');
		$(this).siblings('menu__lv1Parent').removeClass('menu__lv1Parent--active');
		$(this).next('.menu-container--pc .menu__lv1Open').fadeToggle(200);
		$(this).next('.menu__lv1Open').siblings('.menu__lv1Open').fadeOut(200);
		$('.menu-container--pc .menu__lv1 .menu__lv1Parent')
			.not($(this))
			.next('.menu-container--pc .menu__lv1 .menu__lv1Open')
			.fadeOut(200);
		$('.menu-container--pc .menu__lv1 .menu__lv1Parent')
			.not($(this))
			.removeClass('menu__lv1Parent--active');
	});
});
$(function () {
	$('.menu-container--pc .menu__lv1 .menu__lv1Parent').on('click', function () {
		$('.menu__lv1Parent--active').each(function () {
			if ('menu__lv1Parent--active' == 'menu__lv1Parent--active') {
				$('.headerBg').addClass('headerBg--active');
			} else {
				$('.headerBg').removeClass('headerBg--active');
			}
		});
	});
});

//ハンバーガーメニューのnavの表示
$(function () {
	$('.menu__hamburger').on('click', function () {
		$(this).toggleClass('menu__hamburger--active');
		$('.menu__list').fadeToggle(200);
		$('.navigation--common').toggleClass('navigation--commonActive');
	});
});

//navのアコーディオン表示
$(function () {
	$('.menu-container--sp .menu__lv1 .menu__lv1Parent').on('click', function () {
		$(this).toggleClass('menu__lv1Parent--active');
		$(this).siblings('menu__lv1Parent').removeClass('menu__lv1Parent--active');
		$(this).next('.menu-container--sp .menu__lv1Open').slideToggle(200);
		$(this).next('.menu__lv1Open').siblings('.menu__lv1Open').slideUp();
	});
});

// NAVIGATION WITH DROPDOWN
$(function () {
	// burger
	$('.menu__burger').on('click', function () {
		$(this).toggleClass('menu__burger--active');
		$('.menu__list--mobile').fadeToggle(300);
	});
	// dropdown
	$('.menu__dropdown-toggle').on('click', function () {
		$(this).toggleClass('menu__dropdown-toggle--active');
		$(this).next('.menu__dropdown').slideToggle(300);
	});
});
