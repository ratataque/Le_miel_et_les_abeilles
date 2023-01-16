function switch_img(next_div) {
    $(".show").removeClass("show");

    setTimeout(() => {
        // $(".focus .image-link a").hide();
        $(".focus").css("z-index", -1);
        $("#"+next_div).css("z-index", parseInt($(".focus").css('z-index')) + 3);

        $(".focus").removeClass("focus");
        $("#"+next_div).addClass("focus");
    }, 1200);

    setTimeout(() => {
        $(".menu #"+next_div+" .title p").addClass("show");
        $(".menu #"+next_div+" .image-link a").show();
        $(".menu #"+next_div+" .image img").addClass("show");
    }, 800);
}

function init() {
    $(".show").removeClass("show");

    $(".focus").css("z-index", -1);
    $("#start").css("z-index", parseInt($(".focus").css('z-index')) + 3);

    $(".focus").removeClass("focus");
    $("#start").addClass("focus");
    
    $(".menu #start .title p").addClass("show");
    $(".menu #start .image-link a").show();
    $(".menu #start .image img").addClass("show");
}