const startHome = () => {
    // INIT SWIPER TOP HERO
    var banner = new Swiper(".swiper-banner", {
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        on: {
            slideChange: function() {
                var index = banner.realIndex + 1;
                $(".index").html("0" + index);
            }
        }
    });
    // COUNTER SLIDERS
    $(".total").html("0" + $(".swiper-banner .swiper-slide").length);

    // INIT PARALLAX
    $(".parallax").parallax();

    // INIT SWIPER TESTEMONIALS
    var testemonials = new Swiper(".swiper-testemonials", {
        autoHeight: true,
        navigation: {
            nextEl: ".swiper-testemonials-next",
            prevEl: ".swiper-testemonials-prev"
        }
    });

    // MODAL
    $('.modal').modal();
};

$(document).on("scroll", function() {
    if ($(document).scrollTop() > 100) {
        $(".menu").addClass("menusticky");
    } else {
        $(".menu").removeClass("menusticky");
    }
});

var $menuRight = $(".pushmenu-right");
var $nav_list = $("#sidebartoggle");

$nav_list.click(function() {
    $(this).toggleClass("active");
    $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
    $menuRight.toggleClass("pushmenu-open");

    if ($(this).hasClass("active")) {
        $("#sidebartoggle").html('<i class="material-icons">close</i>');
    } else {
        $("#sidebartoggle").html('<i class="material-icons">menu</i>');
    }
});

$(".pushmenu > a").click(function() {
    $nav_list.toggleClass("active");
    $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
    $menuRight.toggleClass("pushmenu-open");

    if ($(this).hasClass("active")) {
        $("#sidebartoggle").html('<i class="material-icons">close</i>');
    } else {
        $("#sidebartoggle").html('<i class="material-icons">menu</i>');
    }
});