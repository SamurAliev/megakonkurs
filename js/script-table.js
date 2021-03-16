$(document).ready(function () {
    //Настройки для менюшки
    $('#menu').slicknav({
        label: '',
        duration: 700,
        closeOnClick: true
    });
    $('.slicknav_menu').wrap('<div class="item_nav">');
    $('.slicknav_menu ul li').wrapAll('<div class="box">');
    $('.slicknav_btn').click(
        function () {
            $('.item_nav').toggleClass('open_item_nav');
        });

    if (document.documentElement.clientWidth <= 768) {
        function fontSize() {
            var width = 320;
            var fontSize = 11;
            var bodyWidth = $('html').width();
            // var multiplier = bodyWidth / width;
            // if ($('html').width() >= width) fontSize *= multiplier;
            if ($('html').width() >= width) fontSize = 11 + (14 - 11) * (bodyWidth - 320) / (992 - 768);
            $('html').css({ fontSize: fontSize + 'px' });
        }
    } else if (document.documentElement.clientWidth > 768) {
        function fontSize() {
            var width = 992;
            var fontSize = 11;
            var bodyWidth = $('html').width();
            // var multiplier = bodyWidth / width;
            // if ($('html').width() >= width) fontSize *= multiplier;
            if ($('html').width() >= width) fontSize = 11 + (14 - 11) * (bodyWidth - 992) / (1920 - 992);
            $('html').css({ fontSize: fontSize + 'px' });
        }
    }
    $(function () { fontSize(); });
    $(window).resize(function () { fontSize(); });


    if (document.documentElement.clientWidth <= 768) {
        //Смена блоков местами
        $('#table-people').swap('#tel');
    }
    




});


//Функция смены блоков местами
jQuery.fn.swap = function (b) {
    b = jQuery(b)[0];
    var a = this[0],
        a2 = a.cloneNode(true),
        b2 = b.cloneNode(true),
        stack = this;

    a.parentNode.replaceChild(b2, a);
    b.parentNode.replaceChild(a2, b);

    stack[0] = a2;
    return this.pushStack(stack);
};
