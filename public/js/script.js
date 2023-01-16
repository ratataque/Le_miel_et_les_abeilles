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

    if ($("#burger-toggle").is(":checked")) {
        $(".focus").css("z-index", -1);
        setTimeout(() => {
            $("#accueil").css("z-index", -2);
        }, 300);
    } else {
        $("#accueil").css("z-index", -1);
    }
    $("#start").css("z-index", parseInt($(".focus").css('z-index')) + 3);

    $(".focus").removeClass("focus");
    $("#start").addClass("focus");
    
    $(".menu #start .title p").addClass("show");
    $(".menu #start .image-link a").show();
    $(".menu #start .image img").addClass("show");
}

function transi_rond(event, element) {
    var x = event.pageX;
    var y = event.pageY;

    if ($(element).hasClass("btn_login")) {
        page_suivante = $("#login");
        page_precedente = $(".focus");

        $(".focus").removeClass("focus");
        $("#login").addClass("focus")
    } 
    else {
        page_suivante = $("#projet");
        page_precedente = $(".focus");

        $(".focus").removeClass("focus");
        $("#projet").addClass("focus")
    }

    
    page_suivante.css('z-index', parseInt($(page_precedente).css('z-index')) + 1);
    page_suivante.css('clip-path', 'circle(0% at '+ x +'px '+ y +'px)');
    
    anime({
        targets: page_suivante,
        update: function (anim) {
            page_suivante.css('clip-path', 'circle(' + (anim.progress * 2) + '% at ' + x + 'px ' + y + 'px)');
        }
    });
    
    setTimeout(() => {
        $(".show").removeClass("show");
        
        $(".menu #start .title p").addClass("show");
        $(".menu #start .image-link a").show();
        $(".menu #start .image img").addClass("show");       
        
        $("#burger-toggle").prop("checked", false);
    }, 400);
}