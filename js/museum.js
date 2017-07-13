(function ($) {



    var scrollTo = function(id){
        if(panel > 7) panel = 7;


        $('.concept.focus').removeClass('focus focusfooter');
        $('.concept#panel'+id).addClass('focus');
        if(panel == 7) $('.concept#panel6').addClass('focusfooter');

        $("#navigation a").css("opacity", "0.5");
        $("#navigation a:nth-of-type("+id+")").css("opacity", "1");
        panel = id;
    };


    var panel = 1, prevScroll = 0, stop = 1;

    scrollTo(1);

    $(document).on("scroll", function(e) {
        var st = $(this).scrollTop();

        var id = Math.ceil(st / $("#panel1").height()) + 1;

        if ($(window).width() < 800) id = Math.ceil(st / $(window).height()) + 1;

        scrollTo(id);

        if(id > 1) $(".bottom .arrow").fadeIn();
        else $(".bottom .arrow").fadeOut();
    });

    $("#navigation a:nth-of-type("+panel+")").css("opacity", "1");

    $("#navigation a").click(function(e){
        e.preventDefault();
        e.stopPropagation();

        var offset = $('.concept#panel'+($(this).index() + 1)).offset().top;
        $(window).scrollTop(offset);
    });

    $(".bottom .arrow, #panel1 .button").click(function(e){
        e.preventDefault();
        e.stopPropagation();

        panel ++;
        if(panel > 7) panel = 1;

        var offset = $('.concept#panel'+panel).offset().top;
        $(window).scrollTop(offset);
    });


})(jQuery)
