$(document).ready(function() {
	var mq = window.matchMedia( "(min-width: 500px)" );

	// link jump
	$('a[href^="#"]').click(function() {
        var hash = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000);
        return false;
    });

    // navbar animation

    $(window).scroll(function(){
    if($(document).scrollTop() > 0)
    {
       $( "nav" ).addClass( "tiny",{duration:500});
    }
    else
    {
       $("nav").removeClass( "tiny",{duration:500} );
    }
	});
  });