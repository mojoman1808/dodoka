
/* scroll to */
function scrollToDiv(div) {

    $("html, body").animate({
        scrollTop: $("#" + div + "").offset().top
    }, 500);

    // $("#menu-icon").removeClass("change");
    // $(".menu").removeClass("change");
}


/* parallax effect */
(function ($) {

    var parallaxBoxes = $(document).find(".parallax");

    var parallax = function () {

        for (var i = 0; i < parallaxBoxes.length; i++) {

            var bodyScroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

            parallaxbox = parallaxBoxes[i];
            parentParallax = $(parallaxbox).parent();
            distance = parentParallax.offset().top;

            parallaxScroll = Math.round((((bodyScroll - distance) / 700) * (700 - 350)) * 0.9);
            parallaxbox.style.transform = "translate3d(0px, " + parallaxScroll + "px, 0px)";
        };
    };
    (function loop() {
        requestAnimationFrame(loop);
        parallax();
    })();

})(jQuery);