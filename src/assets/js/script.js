// 01.Loader
// 02.Tap to top
// 04.Favourite add 
// 09.Mouseup
// 12.Sidebar open/close
// 13.Header
// 15.Footer
// 18.Expand search

/*=====================
    1.Loader
 ==========================*/

 $(window).on('load', function() {
    setTimeout(function() {
        $('.loading-text').fadeOut('slow');
    }, 500);
    $('.loading-text').remove('slow');
    setTimeout(function() {
        $('.pre-loader').fadeOut('slow');
    }, 1000);
    $('.pre-loader').remove('slow');
});


/*========================
  2. Tap to top js
  ==========================*/
$(document).ready(function() {
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 600) {
            $('.tap-top').fadeIn();
        } else {
            $('.tap-top').fadeOut();
        }
    });
    $('.tap-top').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});

/*=====================
  4. Favourite add js
==========================*/

$(".favourite-btn").on("click", function() {
    $(this).toggleClass("active");
});

/*========================
  9. Mouseup js
==========================*/

$(document).mouseup(function(e) {

    // sidebar 
    var sidebar = $(".fixed-sidebar");
    if (!sidebar.is(e.target) &&
        sidebar.has(e.target).length === 0) {
        $(".fixed-sidebar").removeClass("show");
        $("body").removeClass("sidebar-overlay");
    }


    // searchbar 
    var searchbar = $(".search-box");
    if (!searchbar.is(e.target) &&
        searchbar.has(e.target).length === 0) {
        $(".search-box").removeClass("show");
    }

});

/*=====================
 12.  Sidebar open/close js
 ==========================*/
$("#nav-sidebar").on("click", function() {
    $(".fixed-sidebar").addClass("show");
    $("body").addClass("sidebar-overlay");
});


/*=====================
 13. Header js
 ==========================*/
var window_width = jQuery(window).width();
if ((window_width) < '576') {
    $('.header-btn').on('show.bs.dropdown', function() {
        $("body").addClass("header-overlay");
    })
}

$(".navbar-toggler").on("click", function() {
    $(".navbar .overlay-bg").addClass("show");
    $(".navbar-collapse").addClass("show");
    $('body').css({
        'overflow': 'hidden',
    });
});

$(".navbar .back-btn").on("click", function() {
    $(".navbar .overlay-bg").removeClass("show");
    $(".navbar-collapse").removeClass("show");
    $('body').css({
        'overflow': 'auto',
    });
});



// profile page js 

/*=====================
 15. Footer js
 ==========================*/

var contentwidth = jQuery(window).width();
if ((contentwidth) < '767') {
    jQuery('.footer-title h4').append('<span class="according-menu"><i class="fas fa-chevron-down"></i></span>');
    jQuery('.footer-title').click(function() {
        jQuery('.footer-title').removeClass('active');
        jQuery('.footer-content').slideUp('normal');
        if (jQuery(this).next().is(':hidden') == true) {
            jQuery(this).addClass('active');
            jQuery(this).find('span').replaceWith('<span class="according-menu"><i class="fas fa-chevron-up"></i></span>');
            jQuery(this).next().slideDown('normal');
        } else {
            jQuery(this).find('span').replaceWith('<span class="according-menu"><i class="fas fa-chevron-down"></i></span>');
        }
    });
    jQuery('.footer-content').hide();
} else {
    jQuery('.footer-content').show();
}


/*=====================
  18. Expand search js 
 ==========================*/
 $(".xs-search .icon-search").on("click", function() {
    $(this).parents(".xs-search").addClass("open-full");
});

$(".xs-search .icon-close").on("click", function() {
    $(this).parents(".xs-search").removeClass("open-full");
});

$(".search-type").on("click", function() {
    $(this).parents(".search-box").addClass("show");
});

$(".search-box .icon-close").on("click", function() {
    $(this).parents(".search-box").removeClass("show");
});
