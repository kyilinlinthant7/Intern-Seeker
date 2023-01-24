// nav bar color when scrolling
$(window).scroll(function(event){
	$('nav').toggleClass('scrolled', $(this).scrollTop()>50);
});