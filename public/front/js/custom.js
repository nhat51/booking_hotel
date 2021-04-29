(function($) {
	"use strict";

/* ----------------------------
    preloader
    ------------------------------ */

$(window).on('load', function(){
	$('#preloader').delay(300).fadeOut('slow',function(){
	$(this).remove();
	});
});

/* ----------------------------
    Top Scroll
    ------------------------------ */

var offset = 220;
var duration = 500;
jQuery(window).on('scroll', function() {
	if (jQuery(this).scrollTop() > offset) {
		jQuery('.scroll-top').fadeIn(duration);
	}
	else {
		jQuery('.scroll-top').fadeOut(duration);
	}
});
jQuery('.scroll-top').on('click', function() {
	event.preventDefault();
	jQuery('html, body').animate({scrollTop: 0}, duration);
	return false;
})

/* ----------------------------
	@module       Copyright
	@description  Evaluates the copyright year
    ------------------------------ */

var currentYear = (new Date).getFullYear();
	$(document).ready(function () {
		$(".current-year").text((new Date).getFullYear());
});

    /* ----------------------------
            Datepicker
            ------------------------------ */
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    /* check in */
    var checkin = $('#check-in').datepicker({

        beforeShowDay: function(date) {
            return date.valueOf() >= now.valueOf();
        },
        autoclose: true

    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);

        }
        $('#check-out')[0].focus();
    });

    /* check out */
    var checkout = $('#check-out').datepicker({
        beforeShowDay: function(date) {
            if (!checkin.datepicker("getDate").valueOf()) {
                return date.valueOf() >= new Date().valueOf();
            } else {
                return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
        autoclose: true

    }).on('changeDate', function(ev) {});

/* Date of Birth */
$('#datepickerdob').datepicker({
	uiLibrary: 'bootstrap4',
    format:'yyyy/mm/dd'
});

/* ----------------------------
    venobox
    ------------------------------ */

$('.venobox').venobox();

/* ----------------------------
    popular hotel carousel
    ------------------------------ */

$('.popular-hotel-carousel').owlCarousel({
	loop: true,
	margin: 15,
	dots:false,
	items: 4,
	nav: true,
	autoplay:true,
	navText : ['<i class="fas fa-long-arrow-alt-left"></i>','<i class="fas fa-long-arrow-alt-right"></i>'],
	responsiveClass: true,
	responsive: {
	  0: {
		items: 1
	  },
	  576: {
		items: 2
	  },
	  767: {
		items: 2
	  },
	  768: {
		items: 3
	  },
	  1000: {
		items: 4
	  }
	}
})

/* ----------------------------
    testimonial carousel
    ------------------------------ */

$('.testimonial-carousel').owlCarousel({
	loop: true,
	margin: 15,
	dots:false,
	items: 2,
	nav: true,
	autoplay:true,
	navText : ['<i class="fas fa-long-arrow-alt-left"></i>','<i class="fas fa-long-arrow-alt-right"></i>'],
	responsiveClass: true,
	responsive: {
	  0: {
		items: 1
	  },
	  576: {
		items: 1
	  },
	  767: {
		items: 1
	  },
	  768: {
		items: 2
	  },
	  1000: {
		items: 2
	  }
	}
})

/* ----------------------------
    partner
    ------------------------------ */

$('.partner-carousel').owlCarousel({
	loop: true,
	margin: 10,
	dots:false,
	nav: false,
	autoplay:true,
	responsiveClass: true,
	responsive: {
	  0: {
		items: 2
	  },
	  767: {
		items: 3
	  },
	  768: {
		items: 3
	  },
	  1000: {
		items: 6,
		loop: true
	  }
	}
})

/* ----------------------------
    list box carousel
    ------------------------------ */

$('.list-box-carousel').owlCarousel({
	loop: true,
	margin: 10,
	dots:false,
	nav: true,
	autoplay:true,
	items: 1,
	responsiveClass: true,
	responsive: {
	  0: {
		items: 1
	  },
	  767: {
		items: 2
	  },
	  768: {
		items: 1
	  },
	  1000: {
		items: 1,
		loop: true
	  }
	}
})

/* ----------------------------
    list box carousel
    ------------------------------ */

$('.detail-page-gallery-carousel').owlCarousel({
	loop: true,
	margin: 10,
	dots:false,
	nav: true,
	autoplay:true,
	items: 1,
	responsiveClass: true
})

})(jQuery);

/* ----------------------------
    range slider
    ------------------------------ */
var rangeSlider = $(".price-range"),
    minamount = $("#minamount"),
    maxamount = $("#maxamount"),
    minPrice = rangeSlider.data('min'),
    maxPrice = rangeSlider.data('max'),
    minValue = rangeSlider.data('min-value') !== '' ? rangeSlider.data('min-value') : minPrice,
    maxValue = rangeSlider.data('max-value') !== '' ? rangeSlider.data('max-value') : maxPrice;

rangeSlider.slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minValue, maxValue],
    slide: function (event, ui) {
        minamount.val('₫' + ui.values[0]);
        maxamount.val('₫' + ui.values[1]);
    }
});
minamount.val('₫' + rangeSlider.slider("values", 0));
maxamount.val('₫' + rangeSlider.slider("values", 1));
