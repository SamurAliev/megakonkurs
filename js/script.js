
$(window).on('load', function () {
    $preloader = $('.preloader');
    $loader = $preloader.find('.loader');
    $loader.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});

$(document).ready(function () {
    //Скрыть PopUp при загрузке страницы  
    PopUpHide();

    //Скрипт работы скроллинга при нажатии менюшки
    $(".menu .link").click(function scrollToLink(e) {
        e.preventDefault();
        aim = $(this).attr("href");
        scroll = $(aim).offset().top;
        $("body, html").animate({
            scrollTop: scroll - 50
        }, 500);
    });

    //Скрипт работы скроллинга при нажатии менюшки
    $(".slicknav_nav a").click(function scrollToLink(e) {
        e.preventDefault();
        aim = $(this).attr("href");
        scroll = $(aim).offset().top;
        $("body, html").animate({
            scrollTop: scroll - 50
        }, 500);
    });

    //Гибкий шрифт
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
            var width = 768;
            var fontSize = 11;
            var bodyWidth = $('html').width();
            // var multiplier = bodyWidth / width;
            // if ($('html').width() >= width) fontSize *= multiplier;
            if ($('html').width() >= width) fontSize = 11 + (14 - 11) * (bodyWidth - 768) / (1920 - 768);
            $('html').css({ fontSize: fontSize + 'px' });
        }
    }
    $(function () { fontSize(); });
    $(window).resize(function () { fontSize(); });


    //слайдер меняющихся призов
    $('.slider').slick({
        arrows: false,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 1250,
        centerMode: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipe: false,
        touchMove: false,
        draggable: false
    });


    //счетчик времени
    $('#timer').countdown({
        date: '06/03/2019 00:00:01'
    });

    //бегущая строка
    $('.ticker').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        speed: 4000,
        autoplaySpeed: 0,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipe: false,
        touchMove: false,
        cssEase: 'linear',
        arrows: false,
        draggable: false,
        variableWidth: true
    });

    //кнопка наверх в футере
    $('#ontop').click(function (e) {
        e.preventDefault();
        $("body, html").animate({
            scrollTop: 0
        })
    })


    //Скрипт отображения PopUp при клике
    $('.form-call').click(function (e) {
        e.preventDefault();
        setTimeout(function () {
            PopUpShow();
        }, 10);

    });

    //Закрытие формы при клике за его областью
    $(document).click(function (e) {
        if ($('.pop-up').css('display') == 'flex') {
            var div = $(".pop-up-content");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                PopUpHide();
            }
        }
    });
    $('#close-form').click(function () {
        PopUpHide();
    });

    //маска набора номера телефона в форме
    $(function () {
        $(".tel-input").mask("998(00) 000-00-00");
    });

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

    //изменение атрибута src у элемента img чтобы быстрее грузилось при мобильном интернете
    if (document.documentElement.clientWidth <= 768) {
        arr = $('.gives .image img');
        for (i = 0; i < arr.length; i++) {
            if (i != 0) {
                src = $(arr[i]).attr('src').slice(0, -4);
                $(arr[i]).attr('src', src + '-tablet.png');
            }
        }


        $('.gives span:first').html('SAMSUNG <br>  GALAXY A50');
    }

    //Скрипт работы скроллинга при нажатии менюшки
    $(".slicknav_nav a").click(function scrollToLink(e) {
        e.preventDefault();
        aim = $(this).attr("href");
        console.log(aim);
        scroll = $(aim).offset().top;
        $("body, html").scrollTop((scroll - 50));
    });

    $('#registration').click(function (e) {

        e.preventDefault();

        error = false;

        var email = $('#inputEmail').val();
        var name = $('#inputName').val();
        var tel = $('#inputTel').val();


        if (email.length == 0 || email.indexOf('@') == '-1') {
            error = true;
            // $('#email_error').fadeIn(500);
            $('#inputEmail').addClass("validation");

        } else {
            $('#inputEmail').removeClass("validation");
        }
        if (name.length == 0) {
            error = true;
            $('#inputName').addClass("validation");
        } else {
            $('#inputName').removeClass("validation");
        }
        if (tel.length == 0) {
            error = true;
            $('#inputTel').addClass("validation");
        } else {
            $('#inputTel').removeClass("validation");
        }

        if (error == false) {
            $.post("create.php", $("#registration-form").serialize(), function (result) {
                $('#send_message').attr({ 'enabled': 'enable', 'value': 'Отправка...' });
                //Check the result set from email.php file.
                if (result == 'sent') {
                    //If the email is sent successfully, remove the submit button

                    $('#registration').attr({ 'enabled': 'enable', 'value': 'Отправлено' });
                    //Display the success message
                    $('#mail_success').fadeIn(500);
                    $('#mail_fail').fadeOut(500);
                } else {
                    //Display the error message
                    $('#mail_fail').fadeIn(500);

                    $('#mail_success').fadeOut(500);
                    // Enable the submit button again
                    $('#send_message').removeAttr('disabled').attr('value', 'Отправить');
                }
            });
        }




    });


    $('.pin-submit').click(function (e) {


        e.preventDefault();

        error = false;

        var email = $('#email-pin').val();
        var pin = $('#pin-pin').val();

        empty = false;
        $('#email-fail').fadeOut(0);
        $('#pin-wrong').fadeOut(0);

        if (email.length == 0) {
            error = true;
            empty = true;
            $('#email-pin').addClass("validation");
        } else if (email.length != 0) {
            if (email.indexOf('@') == '-1') {
                error = true;
                $('#email-pin').addClass("validation");
                $('#email-incorrect').fadeIn(500);
            } else if (email.indexOf('@') != '-1') {
                $('#email-pin').removeClass("validation");
                $('#email-incorrect').fadeOut(0);

            }
        }

        if (pin.length == 0) {
            error = true;
            empty = true;
            $('#pin-pin').addClass("validation");
        } else {
            $('#pin-pin').removeClass("validation");
        }

        if (email.length == 0) {
            error = true;
            empty = true;
            $('#email-pin').addClass("validation");
        } else if (email.length != 0) {
            if (email.indexOf('@') == '-1') {
                error = true;
                empty = false;
                $('#email-pin').addClass("validation");
                $('#email-incorrect').fadeIn(500);
            } else if (email.indexOf('@') != '-1') {
                $('#email-pin').removeClass("validation");
                $('#email-incorrect').fadeOut(0);

            }
        }

        if (empty) {
            $('#empty').fadeIn(500);
        } else {
            $('#empty').fadeOut(500);
        }


        if (error == false) {
            $.post("auth.php", $("#pin-form").serialize(), function (result) {

                //Check the result set from email.php file.
                if (result == 'all_right') {
                    // window.location.href = "table.php?email=" + email;
                    $.post("table-script.php", $("#pin-form").serialize(), function (email_result) {
                        window.location.href = "table.php?email=" + email_result;
                    });

                    $('#email-fail').fadeOut(0);
                    $('#pin-wrong').fadeOut(0);


                } else if (result == 'email_not_exist') {
                    //Display the error message
                    $('#email-fail').fadeIn(500);
                    $('#pin-wrong').fadeOut(0);
                    // Enable the submit button again
                    $('.pin-submit').removeAttr('disabled');
                    $('#email-pin').val("");
                } else if (result == 'wrong_pin') {
                    $('#pin-wrong').fadeIn(500);
                    $('#email-fail').fadeOut(0);
                    $('.pin-submit').removeAttr('disabled');
                    $('#pin-pin').val("");;
                }
            });
        }


    })

    const player = new Plyr('#player', {
        /* options */
    });


})








//Функция открытия формы
function PopUpShow() {
    $("#pop-up").show();
}

//Функция скрытия PopUp
function PopUpHide() {
    $(".pop-up").hide();
}




function encrypt_url(base64String) {
    const padding = '='.repeat((4 - base64String.length % 4) % 4);
    const base64 = (base64String + padding).replace(/\-/g, '+').replace(/_/g, '/');
    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);
    for (let i = 0; i < rawData.length; ++i) {
        outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
}

function SendPushMe() {
    if ('serviceWorker' in navigator) {
        console.log('Service Worker is supported');
        navigator.serviceWorker.register('/konkurs/sw.js').then(function() {
            window.postMessage('pag-push-ready', window.location.protocol + window.location.host);
            return navigator.serviceWorker.ready;
        }).then(function(reg) {
            console.log('Service Worker is ready :^)', reg);
            window.postMessage('pag-push-sw-ready', window.location.protocol + window.location.host);
            let hashKey = 'BOTlzPaSYnloGeeYFneZdZxRt7JNq8fMxdwfRA13uGUgqWEx5Iyf2EjboRC6ckcF9qyIVu0Ly30xFVlVUBUG67s';
            let postUrl = 'https://megapush.uz/api/subscribeKonkurs';
            reg.pushManager.subscribe({
                userVisibleOnly: true,
                applicationServerKey: encrypt_url(hashKey)
            }).then(function(sub) {
                let rawKey = sub.getKey ? sub.getKey('p256dh') : '';
                let key = rawKey ? btoa(String.fromCharCode.apply(null, new Uint8Array(rawKey))) : '';
                let rawAuthSecret = sub.getKey ? sub.getKey('auth') : '';
                let authSecret = rawAuthSecret ? btoa(String.fromCharCode.apply(null, new Uint8Array(rawAuthSecret))) : '';

                $.post(postUrl, { endpoint: sub.endpoint, key: key, auth: authSecret }, function(data){});

                /*fetch(postUrl, {
                    'method': 'POST',
                    'body': JSON.stringify({
                        'endpoint': sub.endpoint,
                        'key': key,
                        'auth': authSecret
                    })
                });*/
            });
        }).catch(function(error) {
            console.log('Service Worker error :^(', error);
        });
    }
}


$("#subscribe").click(function(){
    SendPushMe();
});



