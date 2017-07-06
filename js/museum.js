$(document).ready(function(){
    $(document).scroll(function(){
        if($(window).width() < 800) return;
        var topScroll = $(window).scrollTop();
        var heightWindow = $(window).height();
        var nbStrate = topScroll / heightWindow;

        var strate1 = nbStrate / 0.5;

        if(strate1 < 1){
            var height = 300 + (100 * strate1);
            var transform = 50 * strate1;
            var padding = 150 - (80 * strate1);
            $(".concept img.iPhone").css({"height":"calc(100% - "+height+"px)", "transform":"translate("+transform+"%, -50%)", "right":transform+"%"});
            $(".strate1").show().css("opacity", 1-strate1);
            $("#bg1").css("opacity", 1-strate1);
            $(".concept div.center.strate2").show().css("opacity", strate1);
            $("#logo").show().css("opacity", 1-strate1);
            $(".logo2").show().css("opacity", strate1);

        }
        else{
            $(".concept img.iPhone").css({"height":"calc(100% - 400px)", "transform":"translate(50%, -85%)", "right":"50%"})
            $(".strate1").fadeOut();
            $("#bg1").css("opacity", 0);
            $("#logo").show().css("opacity", 0);
            $(".logo2").show().css("opacity", 1);

            if(nbStrate > 2.5){
                $("#bg3").css("opacity", 1);
                $(".concept div.center.strate3").fadeOut();
                $(".concept div.center.strate4").fadeIn();
            }
            else if(nbStrate > 2){
                $("#bg3").css("opacity", (nbStrate-2) * 2);
                $(".concept div.center.strate3").show().css("opacity", 1-(nbStrate-2) * 2);
                $(".concept div.center.strate4").show().css("opacity", (nbStrate-2) * 2);
            }
            else{
                $("#bg3").css("opacity", 0);
                $(".concept div.center.strate4").fadeOut();


                if(nbStrate > 1.5){
                    $("#bg2").css("opacity", 1);
                    $(".concept div.center.strate2").fadeOut();
                    $(".concept div.center.strate3").fadeIn();
                }
                else if(nbStrate > 1){
                    $("#bg2").css("opacity", (nbStrate-1)*2);
                    $(".concept div.center.strate2").show().css("opacity", 1-(nbStrate-1)*2);
                    $(".concept div.center.strate3").show().css("opacity", (nbStrate-1)*2);
                }
                else{
                    $("#bg2").css("opacity", 0);
                    $(".concept div.center.strate2").fadeIn();
                    $(".concept div.center.strate3").fadeOut();
                }
            }

            if(nbStrate > 3) $(".bottom .arrow").css("transform", "rotate(90deg) translateY(50%) scaleX(-1)");
            else $(".bottom .arrow").css("transform", "rotate(90deg) translateY(50%)");

            $(".bottom h3").css("opacity", 0);
        }

        var index = Math.ceil(topScroll / heightWindow) + 1;
        $(".strate2, .strate4").css("margin-top", -(topScroll / 70 )+"px")
        $(".strate1, .strate3").css("margin-top", (topScroll / 70 )+"px")
    });

    // $(".concept div.center button").click(function(e){
    //     // var topScroll = $(window).scrollTop();
    //     // var heightWindow = $(window).height();
    //     // var nbStrate = Math.ceil(topScroll / heightWindow);
    //     // if(nbStrate > 4) nbStrate = 0;
    //     //
    //     // // $(".center p").fadeOut();
    //     // $(".strate"+(nbStrate)+" p").fadeToggle();
    //
    //     // $('html, body').animate( { scrollTop: heightWindow * nbStrate }, 500 ); // Go
    //
    //     var buttonClass = $(this).closest(".center").attr("class").replace("center ", "");
    //     $("."+buttonClass+" p").fadeToggle();
    // });

    $(".bottom").click(function(){
        var topScroll = $(window).scrollTop();
        var heightWindow = $(window).height();
        var nbStrate = Math.ceil(topScroll / heightWindow) + 1;
        if(nbStrate > 4) nbStrate = 0;

        $('html, body').animate( { scrollTop: heightWindow * nbStrate }, 1000 ); // Go
    });
});
