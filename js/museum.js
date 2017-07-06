(function ($) {

    $('#panel1').addClass('focus');
    $(window).scrollTop(0);

    var scrollTo = function(id){
        $('.concept.focus').removeClass('focus');
        $('.concept#panel'+id).addClass('focus');

        var offset = $('.concept#panel'+panel).offset().top;
        $(window).scrollTop(offset);
        prevScroll = offset;

        $(".bottom a").css("opacity", "0.5");
        $(".bottom a:nth-of-type("+id+")").css("opacity", "1");
        panel = id;
    };


    var panel = 1, prevScroll = 0, stop = 0;

    $("body").on("scroll mousewheel touchmove", function(e) {
        //if ($(window).width() < 800) return;


        if(stop === 1) {
            //e.preventDefault();
            return;
        }

        var st = $(this).scrollTop();

        console.log(prevScroll, st)
        if(st >= prevScroll){
            console.log("next");
            nextSlide();
        }
        else{
            console.log("PREV")
            prevSlide();
        }
    });

    $(".bottom a:nth-of-type("+panel+")").css("opacity", "1");



    $(".bottom a").click(function(e){
        e.preventDefault();
        e.stopPropagation();

        scrollTo($(this).index() + 1);
    });

    $(".bottom .arrow").click(function(){
        nextSlide();
    });

    var nextSlide = function(){
        panel ++;
        if(panel > 4) panel = 1;
        scrollTo(panel);

        stop = 1;
        setTimeout(function(){
            stop = 0;
        }, 1000);
    }

    var prevSlide = function(){
        if(panel > 1) panel --;
        console.log(panel);
        scrollTo(panel);

        stop = 1;
        setTimeout(function(){
            stop = 0;
        }, 1000);
    }

})(jQuery)