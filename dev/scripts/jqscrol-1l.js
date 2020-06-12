$('.link').eq(0).click(() => {
    $('html, body').animate({
        scrollTop: $('.work').eq(0).offset().top
    }, 300);
});

