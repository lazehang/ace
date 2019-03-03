$(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    if(scrollTop > 0)
    {
        $("#navbar-ace").addClass("scrolled");
    }
    else{
        $("#navbar-ace").removeClass("scrolled");
    }
})

$(function() {
    $(".navbar-toggler").on('click', function() {
        if ($("#navbar-ace").hasClass("open")) {
            $("#navbar-ace").removeClass("open");

        }else{
            $("#navbar-ace").addClass("open");    
        }
    })
})