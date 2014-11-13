/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//TODO add smooth scroll between page links
//plugin
jQuery.fn.topLink = function(settings) {
    settings = jQuery.extend({
        min: 1,
        fadeSpeed: 200
    }, settings);
    return this.each(function() {
        //listen for scroll
        var el = $(this);
        el.hide(); //in case the user forgot
        $(window).scroll(function() {
            if($(window).scrollTop() >= settings.min)
            {
                el.fadeIn(settings.fadeSpeed);
            }
            else
            {
                el.fadeOut(settings.fadeSpeed);
            }
        });
    });
};


//Theme scripts
jQuery(document).ready(function($){
    $('form').idealforms({
      rules: {
        'first_name': 'required'
      }

    });

    $('#top-link').topLink({
        min: 400,
        fadeSpeed: 500
    });

    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    //enable scrollspy
    //$('#top-nav').scrollspy()

    //$('.carousel').carousel()
    $('.bj-tooltip').tooltip();

    //add some responsive stuff
    //TODO modify to meet more common conventions, simplify and reduce resolutions

    var width = $(window).width();

    if ((width >= 1860)) {

        $('body').addClass('screen-xlarge');

    }else if ((width > 1560) && (width <= 1850)){

        $('body').addClass('screen-large');
    }
    else if((width > 1160) && (width <= 1550)){

        $('body').addClass('screen-medium');
    }
    else if ((width >= 920 ) && (width <= 1150)){

        $('body').addClass('screen-default');

    } else if ((width >= 768) && (width <= 1012)){

        $('body').addClass('tablet-landscape mobile');
        console.log('mobile') ;

    }else if ((width >= 481) && (width <= 767)){

        $('body').addClass('tablet-portrait');

    } else if ((width <= 480)){

        $('body').addClass('mobile-phone, phone');

    }


    //custom scroll scripts
    $(function() {
        $('a[href*=#]:not([href=#])').click(function(e) {
            e.preventDefault();
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });


})
