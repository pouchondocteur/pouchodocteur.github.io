$(document).ready(function(){
    $('.menu-bar').click(function(){
        $('.nav-list').slideToggle();
    });
    $('.carousel').carousel({
        pause: "null"
    });
    $(window).scroll(function(){
        var sc=$(this).scrollTop();
        if (sc>50){
            $('header').addClass('black-bar');
        }else{
            $('header').removeClass('black-bar');
        }
    })

 });

