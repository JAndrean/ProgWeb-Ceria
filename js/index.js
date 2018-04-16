$(document).ready(function(){
    $("#dropdown").click(function(){
        if($("#navMenu").hasClass("responsive")){
            $("#navMenu").removeClass("responsive");
        } else{
            $("#navMenu").addClass("responsive");
        }
    });

    $("#pushDown").css({
        "min-height":$("header").outerHeight(true)
    })

    $("#sort-box").click(function(){
        if($("#sort-dd").hasClass("active")){
            $("#sort-dd").removeClass("active").addClass("inactive");
        }
        else{
            $("#sort-dd").removeClass("inactive").addClass("active");
        }
    });
});