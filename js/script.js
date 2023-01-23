$(document).ready(function () {
    $menuBar = $("#menuBar");
    $links = $("#links");
    $menuBar = $("#menuBar");

    // On Toggle Menu
    $menuBar.on("click", function () {
        if (!$links.hasClass('display')) {
            this.classList.remove('fa-bars');
            this.classList.add('fa-times');
        } else {
            this.classList.add('fa-bars');
            this.classList.remove('fa-times');
        }
        $links.toggleClass( 'display' );
        $('body').toggleClass('scroll');
    });    
    
    $('nav .links li').on("click", function () {
        if ($links.hasClass('display')) {
            $menuBar.removeClass('fa-times');
            $menuBar.addClass('fa-bars');
            $links.toggleClass( 'display' );
            $('body').toggleClass('scroll');
        }
    });    

    $('.skill-container').each(function() {
        var $element = $(this);
    
        $element.waypoint(function () {
            if ($element.find('.progress div').attr('data-width')) {   
                var i = 0;
                var inter = setInterval(function () {
                    $element.find('.progress div').css({ 'width': ++i + '%' })
                    $element.find('.counter').text(i)
                    if (i == $element.find('.progress div').attr('data-width')) clearInterval(inter);
                }, 10);
            }

            this.destroy()
        }, {
            offset: '112%'
        });
    });
    
    $('.circle-progress').each(function() {
        var $element = $(this);
    
        $element.waypoint(function () {
            if ($element.attr('data-width')) {   
                $element.circleProgress({
                    startAngle : -Math.PI/2,
                    value: $element.attr('data-width'),
                    fill : '#0D479f'
                });
            }
            this.destroy()
        }, {
            offset: '100%'
        });
    });
    

    $('.counter-number').each(function() {
        var $element = $(this);
    
        $element.waypoint(function () {
            if ($element.attr('data-number')) {   
                var i = 0;
                var inter = setInterval(function () {
                    $element.text(++i)
                    if (i == $element.attr('data-number')) clearInterval(inter);
                }, 10);
            }

            this.destroy()
        }, {
            offset: '90%'
        });
    });


    AOS.init({
        once: true
    });

    $(window).scroll(function () {
        var scrollPos = $(document).scrollTop();
        $('nav .links a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.length && refElement.position().top >=0
                && scrollPos > refElement.position().top - $( window ).height() / 2) {
                $('nav .links li').removeClass("active");
                currLink.parent().addClass("active");
            }
            else{
                currLink.parent().removeClass("active");
            }
        });
    });
    
    
});

























