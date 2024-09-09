$("#Header").load("layout/header.html");
$("#Footer").load("layout/footer.html");


$(window).on('load', function () {
    var str = location.href.toLowerCase();
    $("#menu>li>a").each(function () {
        var thisHref = this.href.toLowerCase();
        if (str.indexOf(thisHref) > -1) {
            $("#menu li a.active").removeClass("active");
            $(this).parent().addClass("active");
        }
    });
});

// blogslider start
$('.event-slider').slick({
    dots: true,
    arrows: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1100,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
        }
    },
    {
        breakpoint: 900,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 500,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
        }
    }
    ]
});

// blogslider end

// review slider

$('.reviews-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    // centerMode: true,
    // centerPadding: '450px',
    responsive: [{
        breakpoint: 1025,
        settings: {
            slidesToShow: 1,
            centerPadding: '0px',
            slidesToScroll: 1,
            infinite: true,
            dots: false
        }
    },
    {
        breakpoint: 600,
        settings: {
            centerPadding: '0px',
            slidesToShow: 1,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 480,
        settings: {
            centerPadding: '0px',
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    ]
});

// video-slider start
$('.video-slider').slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1100,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
        }
    },
    {
        breakpoint: 900,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false
        }
    },
    {
        breakpoint: 500,
        settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
        }
    }
    ]
});

// video-slider end


// wow animation js 

$(function () {
    new WOW().init();
});


// responsive menu js 

$(function () {
    $('#menu').slicknav();
});



// slick slider in tabs js start

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += "active";
}


// slick slider in tabs js end



// search button js

(function ($) {

    $.fn.searchBox = function (ev) {

        var $searchEl = $('.search-elem');
        var $placeHolder = $('.placeholder');
        var $sField = $('#search-field');

        if (ev === "open") {
            $searchEl.addClass('search-open')
        };

        if (ev === 'close') {
            $searchEl.removeClass('search-open'),
                $placeHolder.removeClass('move-up'),
                $sField.val('');
        };

        var moveText = function () {
            $placeHolder.addClass('move-up');
        }

        $sField.focus(moveText);
        $placeHolder.on('click', moveText);

        $('.submit').prop('disabled', true);
        $('#search-field').keyup(function () {
            if ($(this).val() != '') {
                $('.submit').prop('disabled', false);
            }
        });
    }

}(jQuery));

$('.search-btn').on('click', function (e) {
    $(this).searchBox('open');
    e.preventDefault();
});

$('.close').on('click', function () {
    $(this).searchBox('close');
});