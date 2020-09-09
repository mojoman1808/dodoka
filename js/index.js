'use strict';


function scrollToTop() {
    $("html, body").animate({
        scrollTop: $("body").offset().top
    }, 500);
}

function send() {
    var fd = new FormData(document.getElementById("message-form"));
    $.ajax({
        type: "POST",
        data: fd,
        url: "messagehandler.php",
        contentType: false,
        processData: false,
        success: function (response) {

            if (response == 0) {
                //$("#message-form")[0].reset();
                $("#message-box").removeClass("badnews");
                $("#message-box").addClass("goodnews");

                $(".close-cross").addClass("cross-goodnews");
                $(".close-cross").removeClass("cross-badnews");

                $(".message-box").addClass("expand-message");

                $("#message").html("Nachricht wurde erfolgreich versendet");
                //$("#message-form").reset();
            } else {
                $("#message-box").removeClass("goodnews");
                $("#message-box").addClass("badnews");

                $(".close-cross").removeClass("cross-goodnews");
                $(".close-cross").addClass("cross-badnews");

                $(".message-box").addClass("expand-message");

                $("#message").html(response);
            }
        }
    });
}

/* close message */
$("#close-message-box").click(function () {
    $(".message-box").removeClass("expand-message");
    $(".message-box").removeClass("goodnews");
    $(".message-box").removeClass("badnews");
});

/*cookiebar*/
if (document.cookie.indexOf("cookiesagreed=1") != -1) {
    console.log('cookie, yo');
    $(".cookiebar").hide();
} else {
    console.log('cookie, no');
    $(".cookiebar").prependTo("body");
    $(".cookiebar").show();
}

function cookieagree() {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 3600 * 1000 * 24 * 365;
    now.setTime(expireTime);
    var tempExp = "Wed, 31 Oct 2012 08:50:17 GMT";
    document.cookie = "cookiesagreed=1;expires=" + now.toGMTString() + ";path=/";
    $(".cookiebar").slideUp();
}




// button - lightbox

$('.econ').click(function (e) {
    e.preventDefault();

    $(document).keydown(function (event) {
        console.log(this);

        if (event.key === 'Escape') {
            $('#overlay').remove();
            $('#overlay-container').remove();
        }
    });

    let overlay = $.parseHTML('<div id="overlay"></div>');
    $('#vision').append(overlay);

    let image = $.parseHTML('<img id="overlay-image"></img>');
    let src = $('.gallery-item1').attr('href');
    $(image).attr('src', src);
    $(image).click(function () {
        $('#overlay').remove();
        $('#overlay-container').remove();
        $('#overlay-image').remove();
    });

    let container = $.parseHTML('<div id="overlay-container"></div>');
    $(container).click(function () {
        $('#overlay').remove();
        $('#overlay-container').remove();
        $('#overlay-image').remove();
    });
    $(container).append(image);

    $('#vision').append(container);
});

$('.suggest').click(function (e) {
    e.preventDefault();
    $(document).keydown(function (event) {
        console.log(this);

        if (event.key === 'Escape') {
            $('#overlay').remove();
            $('#overlay-container').remove();
        }
    });

    let overlay = $.parseHTML('<div id="overlay"></div>');
    $('#vision').append(overlay);

    let image = $.parseHTML('<img id="overlay-image"></img>');
    let src = $('.gallery-item2').attr('href');
    $(image).attr('src', src);
    $(image).click(function () {
        $('#overlay').remove();
        $('#overlay-container').remove();
        $('#overlay-image').remove();
    });
    let container = $.parseHTML('<div id="overlay-container"></div>');
    $(container).click(function () {
        $('#overlay').remove();
        $('#overlay-container').remove();
        $('#overlay-image').remove();
    });
    $(container).append(image);

    $('#vision').append(container);
});

$('.realize').click(function (e) {
    e.preventDefault();
    $(document).keydown(function (event) {
        console.log(this);

        if (event.key === 'Escape') {
            $('#overlay').remove();
            $('#overlay-container').remove();
        }
    });

    let overlay = $.parseHTML('<div id="overlay"></div>');
    $('#vision').append(overlay);

    let image = $.parseHTML('<img id="overlay-image"></img>');
    let src = $('.gallery-item3').attr('href');
    $(image).attr('src', src);
    $(image).click(function () {
        $('#overlay').remove();
        $('#overlay-container').remove();
        $('#overlay-image').remove();
    });
    let container = $.parseHTML('<div id="overlay-container"></div>');
    $(container).click(function () {
        $('#overlay').remove();
        $('#overlay-container').remove();
        $('#overlay-image').remove();
    });
    $(container).append(image);

    $('#vision').append(container);
});

// ______________________________________________________________

// // hamburger toggle
// $(document).ready(function () {
//     $('.hamburger').on('click', function () {
//         $('header #main-nav ul').toggleClass('open');
//     });

//     $('header #main-nav ul li').on('click', function () {
//         $('header #main-nav ul').removeClass('open');
//     });
// });

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


// Störfaktoren

$('.stoerfaktoren').hide();
// $('.stoer').click(function () {
//     $('.stoerfaktoren').toggle();
// });


//  NAVBAR SCROLL-EFFEKT


$(document).ready(function ($) {

    scrollToTop();

    $('.hamburger').on('click', function () {
        $('header #main-nav ul').toggleClass('open');
    });

    $('header #main-nav ul li').on('click', function () {
        $('header #main-nav ul').removeClass('open');
    });

    // Scrolle ich gerade?
    var scrolling = false;

    // Wie triggern wir das Scroll-Event?
    $(window).on('scroll', function () {
        if (!scrolling) {
            scrolling = true;
            hide_sub_menu();
        }

    });

    // Verstecken des Headers
    function hide_sub_menu() {
        var aktuelle_pos = $('header').offset().top;

        if (aktuelle_pos > 200) {
            $('header').addClass('zu');
        } else {
            $('header').removeClass('zu');
        }
        scrolling = false;
    }
});