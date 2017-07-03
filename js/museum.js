$(document).ready(function(){
    console.log("hey");
    $(document).scroll(function(){
        var topScroll = $(window).scrollTop();
        var heightWindow = $(window).height();
        var nbStrate = topScroll / heightWindow;
        console.log(topScroll, heightWindow, nbStrate);

        if(nbStrate < 1){
            $(".concept img.iPhone").css({"height":"calc(100% - 200px)", "transform":"translateX(0)", "right":"0"});
            $(".concept").removeClass("part2");
        }
        else{
            $(".concept img.iPhone").css({"height":"calc(100% - 400px)", "transform":"translateX(50%)", "right":"50%"})
            $(".concept").addClass("part2");
        }
    });
});
