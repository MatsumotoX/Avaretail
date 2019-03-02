$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    console.log(scroll);

    if (scroll >= 2) {
        $(".navbar-default").css({
            background: '#fff',
            padding: '0'
        });
        $(".navbar-default .navbar-nav>li>a").css('color', '#000');
        $(".navbar-brand>img").attr("src", "images/logos/Token.png");
        // $(".navbar-default").css('border-bottom','0.5px solid #090c1b');
    } else {
        $(".navbar-default, .navbar-default .navbar-nav>li>a").removeAttr('style');
        $(".navbar-brand>img").attr("src", "images/logos/Token3.png");
        // $(".navbar-default").css('none');
    }

});