let navPos, winPos;

$('.right').scroll(function() {
	winPos = $('.right').scrollTop();
	if(winPos > 200) {
		$('.mainpage-scroll-btn').addClass('rotate');
	} else {
		$('.mainpage-scroll-btn').removeClass('rotate');
	}
});

$('.mainpage-scroll-btn').click(function() {
	if($(this).hasClass('rotate')) {
		$('.right').animate({scrollTop:0}, 800);
	} else {
		$('.right').animate({ scrollTop:$('.right').height() }, 800)
	}
});


$('.left-side').scroll(function() {
	winPos = $('.left-side').scrollTop();
	if(winPos > 100) {
		$('.scroll-btn').addClass('rotate');
	} else {
		$('.scroll-btn').removeClass('rotate');
	}
});
$('.scroll-btn').click(function() {
	if($(this).hasClass('rotate')) {
		$('.left-side').animate({scrollTop:0}, 800);
	} else {
		$('.left-side').animate({ scrollTop:$('.left-side').height() }, 800)
	}
});

