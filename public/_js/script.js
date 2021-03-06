function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

/* cookie.JS
 ========================================================*/
include('/_js/jquery.cookie.js');

/* Easing library
 ========================================================*/
include('/_js/jquery.easing.1.3.js');

/* PointerEvents
 ========================================================*/
;
(function ($) {
    if(isIE() && isIE() < 11){
        include('/_js/pointer-events.js');
        $('html').addClass('lt-ie11');
        $(document).ready(function(){
            PointerEventsPolyfill.initialize({});
        });
    }
})(jQuery);

/* Stick up menus
 ========================================================*/
;
(function ($) {
    var o = $('html');
        include('/_js/tmstickup.js');

        $(document).ready(function () {
            $('#stuck_container').TMStickUp({})
        });
})(jQuery);

/* ToTop
 ========================================================*/
;
(function ($) {
    var o = $('html');
        include('/_js/jquery.ui.totop.js');

        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop fa fa-angle-up'
            });
        });
})(jQuery);

/* EqualHeights
 ========================================================*/
;
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('/_js/jquery.equalheights.js');
    }
})(jQuery); 

/* Copyright Year
 ========================================================*/
;
(function ($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);


/* Superfish menus
 ========================================================*/
;
(function ($) {
    include('/_js/superfish.js');
})(jQuery);

/* Navbar
 ========================================================*/
;
(function ($) {
    include('/_js/jquery.rd-navbar.js');
})(jQuery);


/* Google Map
 ========================================================*/
(function ($) {
    var o = document.getElementById("google-map");
    if (o) {
        include('//maps.google.com/maps/api/js?sensor=false');
        include('/_js/jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap({
                    styles: [{
                        "stylers": [
                            {
                                "hue": "#ff1a00"
                            },
                            {
                                "invert_lightness": true
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 33
                            },
                            {
                                "gamma": 0.5
                            }
                        ]
                    },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#2D333C"
                                }
                            ]
                        }]
                });
            }
        });
    }
})
(jQuery);

;
(function ($) {
    var o = $('.map');
    if (o.length > 0) {
        if ($(window).width() > 1199) {
            var bp = $(window).outerWidth();
            var bp1 = bp - 1200;
            var bp2 = bp1/2;
            var bp3 = bp2 + 456;

            o.css('left', bp3);
        }

        $(window).resize(function () {
            if ($(window).width() > 1199) {
                var bp = $(window).outerWidth();
                var bp1 = bp - 1200;
                var bp2 = bp1/2;
                var bp3 = bp2 + 456;

                o.css('left', bp3);
            }
        });
    }

})(jQuery);

(function ($) {
    var o = document.getElementById("google-map-2");
    if (o) {
        include('//maps.google.com/maps/api/js?sensor=false');
        include('/_js/jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap({
                    styles: [{
                        "stylers": [
                            {
                                "hue": "#ff1a00"
                            },
                            {
                                "invert_lightness": true
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 33
                            },
                            {
                                "gamma": 0.5
                            }
                        ]
                    },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#2D333C"
                                }
                            ]
                        }]
                });
            }
        });
    }
})
(jQuery);

;
(function ($) {
    var o = $('.map');
    if (o.length > 0) {
        if ($(window).width() > 1199) {
            var bp = $(window).outerWidth();
            var bp1 = bp - 1200;
            var bp2 = bp1/2;
            var bp3 = bp2 + 456;

            o.css('left', bp3);
        }

        $(window).resize(function () {
            if ($(window).width() > 1199) {
                var bp = $(window).outerWidth();
                var bp1 = bp - 1200;
                var bp2 = bp1/2;
                var bp3 = bp2 + 456;

                o.css('left', bp3);
            }
        });
    }

})(jQuery);

/* WOW
 ========================================================*/
;
(function ($) {
    var o = $('html');

    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
            include('/_js/wow.js');

            $(document).ready(function () {
                new WOW().init();
            });
    }
})(jQuery);

/* Mailform
=============================================*/
;(function ($) {
    include('/_js/mailform/jquery.form.min.js'); 
    include('/_js/mailform/jquery.rd-mailform.min.js');
})(jQuery);

/* Orientation tablet fix
 ========================================================*/
$(function () {
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');

/* Parallax
 =============================================*/
;
(function ($) {
    include('/_js/jquery.rd-parallax.js');
})(jQuery);

/* Responsive Tabs
 ========================================================*/
;
(function ($) {
    var o = $('.resp-tabs');
    if (o.length > 0) {
        include('/_js/jquery.responsive.tabs.js');

        $(document).ready(function () {
            o.easyResponsiveTabs();
        });
    }
})(jQuery);

