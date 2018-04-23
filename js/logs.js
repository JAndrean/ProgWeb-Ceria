$( document ).ready(function() {
    $(".button1").click(function(){
        $('#carStatus').show();
        $('#rentalHistory').hide();
    });
    $(".button2").click(function(){
        $('#rentalHistory').show();
        $('#carStatus').hide();
    });

});
