$(function() {
    $(window).scroll(function() {
        const wHeight = $(window).height();
        const scrollAmount = $(window).scrollTop();
        $('.scrollanime').each(function() {
            const targetPosition = $(this).offset().top;
            if (scrollAmount > targetPosition - wHeight + 60) {
                $(this).addClass("fadeInDown");
            }
        });
    });
});

var timer = '';
$(window).on('resize', function() {
    if (timer) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
        var windowSize = $(window).width();

        if (windowSize < 480) {
            $('.pcview').hide();
            $('.spview').show();
        } else {
            $('.pcview').show();
            $('.spview').hide();
        }
    }, 200);
});

$(function() {
    var windowSize = $(window).width();

    if (windowSize < 480) {
        $('.pcview').hide();
        $('.spview').show();
    } else {
        $('.pcview').show();
        $('.spview').hide();
    }
});


$(function() {
    $('.shop-content > div').on('click', function() {
        if ($(this).children(".shop-list").css('display') == 'block') {
            // 表示されている場合の処理
            $(this).children(".shop-list").slideToggle('fade');
        } else {
            // 非表示の場合の処理
            $(this).children(".shop-list").slideToggle('fade');
        }
    });
});

// 商品詳細ページ
$(function() {
    $('#product-subimg img').on('click', function() {
        $('.current').removeClass('current');
        $(this).parent().addClass('current');
        targetClass = $('.current').attr("class").split(' ')[0];
        $('.product-img > .current').removeClass('current');
        $('.product-img > .' + targetClass).addClass('current')
        $('.product-img > .current').css('display', '');
        $('.product-img > img').not('.current').css('display', 'none');
    });
});