$(window).bind("resize", function () {
	if ($(this).width() < 450) {
		$('.swiper-banner').addClass('swiper-container-1');
		$('.swiper-slider').addClass('swiper-container-1');
		$('.swiper-brand').addClass('swiper-container-4');
		$('.swiper-item').addClass('swiper-container-2');
		$('.swiper-ncrpoint').addClass('swiper-container-3');
		$('.swiper-filter-sport').addClass('swiper-container-2-narrow');
        $('.swiper-product-color').addClass('swiper-container-3');
	} else if ($(this).width() < 900) {
		$('.swiper-banner').addClass('swiper-container-1');
		$('.swiper-slider').addClass('swiper-container-1');
		$('.swiper-brand').addClass('swiper-container-6');
		$('.swiper-item').addClass('swiper-container-3');
		$('.swiper-ncrpoint').addClass('swiper-container-6');
		$('.swiper-filter-sport').addClass('swiper-container-3');
        $('.swiper-product-color').addClass('swiper-container-4');
	} else {
		$('.swiper-banner').addClass('swiper-container-1');
		$('.swiper-slider').addClass('swiper-container-3');
		$('.swiper-brand').addClass('swiper-container-8');
		$('.swiper-item').addClass('swiper-container-4');
		$('.swiper-ncrpoint').addClass('swiper-container-6');
		$('.swiper-filter-sport').addClass('swiper-container-4-narrow');
        $('.swiper-product-color').addClass('swiper-container-5');
	}
}).trigger('resize');

// =============================================== SWIPER CLASS =============================================================


var swiper = new Swiper('.swiper-container-1', {
	slidesPerView: 1,
	spaceBetween: 30,
	slidesPerGroup: 1,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-2', {
	slidesPerView: 2,
	spaceBetween: 30,
	slidesPerGroup: 2,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-3', {
	slidesPerView: 3,
	spaceBetween: 30,
	slidesPerGroup: 3,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-4', {
	slidesPerView: 4,
	spaceBetween: 30,
	slidesPerGroup: 4,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-5', {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 5,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiper = new Swiper('.swiper-container-6', {
	slidesPerView: 6,
	spaceBetween: 30,
	slidesPerGroup: 6,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-7', {
	slidesPerView: 7,
	spaceBetween: 30,
	slidesPerGroup: 7,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-8', {
	slidesPerView: 8,
	spaceBetween: 30,
	slidesPerGroup: 8,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

// ========================================== SWIPER AUTOPLAY CLASS =========================================================
var swiper = new Swiper('.swiper-container-4', {
	slidesPerView: 4,
	spaceBetween: 30,
	slidesPerGroup: 4,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

});
var swiper = new Swiper('.swiper-container-2', {
	slidesPerView: 2,
	spaceBetween: 30,
	slidesPerGroup: 2,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

});
var swiper = new Swiper('.swiper-container-3', {
	slidesPerView: 3,
	spaceBetween: 30,
	slidesPerGroup: 3,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

});

var swiper = new Swiper('.swiper-container-1', {
	slidesPerView: 1,
	spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-2', {
	slidesPerView: 2,
	spaceBetween: 30,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-4', {
	slidesPerView: 4,
	spaceBetween: 30,
	slidesPerGroup: 4,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-5', {
	slidesPerView: 5,
	spaceBetween: 30,
	slidesPerGroup: 5,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

});

var swiper = new Swiper('.swiper-container-6', {
	slidesPerView: 6,
	spaceBetween: 30,
	slidesPerGroup: 6,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

});

// ========================================== SWIPER NARROW CLASS ===========================================================

var swiper = new Swiper('.swiper-container-2-narrow', {
	slidesPerView: 2,
	spaceBetween: 5,
	slidesPerGroup: 2,

	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-3-narrow', {
	slidesPerView: 3,
	spaceBetween: 5,
	slidesPerGroup: 3,
	loop: true,
	loopFillGroupWithBlank: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

var swiper = new Swiper('.swiper-container-4-narrow', {
	slidesPerView: 4,
	spaceBetween: 5,
	slidesPerGroup: 4,
	loop: true,
	loopFillGroupWithBlank: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});