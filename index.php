<?php
$msg = "";
    if( strpos($_SERVER["HTTP_USER_AGENT"],'iPhone')  || strpos($_SERVER["HTTP_USER_AGENT"],'iPad') || strpos($_SERVER["HTTP_USER_AGENT"],'Macintosh') ) {
      $msg = 'К сожалению Ваше устройство не поддерживает функционал данного конкурса. <br> Попробуйте воспользоваться любым другим устройством, <b>кроме iPhone, iPad и Macintosh</b>.';
    } else if( strpos($_SERVER["HTTP_USER_AGENT"],'Trident')  ) {
      $msg = 'К сожалению Ваш браузер не поддерживает функционал данного конкурса. <br> Попробуйте воспользоваться любым другим браузером, <b>кроме Internet Explorer</b>.';
    }
    if($msg != "") die("<p id='die' style='font-size: 20px; text-align:center; margin-top:30px'>".$msg."</p>");
  
?>
<!DOCTYPE html>
<html lang="ru">

<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141496913-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141496913-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мегаконкурс от Мегапуш - 2019</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/hamburgers.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick-font.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/flipclock.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/plyr.css">
</head>

<body>

    <div class="preloader">
        <div class="loader">
        <div class="ball one"><div class="inner"></div></div>
        <div class="ball two"><div class="inner"></div></div>
        <div class="ball three"><div class="inner"></div></div>
        <div class="ball four"><div class="inner"></div></div>
        <div class="ball five"><div class="inner"></div></div>
        <div class="ball six"><div class="inner"></div></div>
        <div class="ball center"><div class="inner"></div></div>
        </div>
    </div>

    <header>
        <div class="menu">
            <a href="" class="logo"><img src="img/logo.png" alt=""></a>

            <ul id="menu">
                <li><a class="link" href=".video-about">О конкурсе</a></li>
                <li><a class="link" href=".conditions">Регистрация</a></li>
                <li><a class="link" href=".conditions .text">Условия участия</a></li>
                <li><a class="link" href=".pin .form">Ввод секретного пин-кода</a></li>
            </ul>

            <span>+998 (78) 148 28 28</span>
        </div>

        <div class="main">
            <div class="items">
                <div class="item left">
                    <div class="timer">

                        <p>До розыгрыша:</p>
                        <ul id="timer">
                            <li>
                                <p class="days_text">Дни</p>
                                <span class="days">00</span>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                                <p class="hours_text">Часы</p>
                                <span class="hours">00</span>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                                <p class="minutes_text">Минуты</p>
                                <span class="minutes">00</span>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                                <p class="seconds_text">Секунды</p>
                                <span class="seconds">00</span>
                            </li>

                        </ul>
                    </div>

                    <div class="text">
                        <h2>Первый</h2>
                        <p>масштабный <br> конкурс от</p>
                        <!-- <span></span> -->
                    </div>

                    <div class="flag2">
                        <p>MEGAPUSH.UZ</p>
                    </div>

                </div>
                <div class="item right">
                    <div class="star">
                        <img src="img/star.png" alt="">
                    </div>
                    <div class="slider">
                        <div class="image"><img src="img/mobile.png" alt=""></div>
                        <div class="image"><img src="img/mi-watch.png" alt=""></div>
                        <div class="image"><img src="img/powerbank.png" alt=""></div>
                        <div class="image"><img src="img/speakers.png" alt=""></div>
                        <div class="image"><img src="img/airpods.png" alt=""></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="flag1">
            <p>
                MEGAPUSH.UZ
            </p>
        </div>
    </header>

    <section class="gives">
        <div class="ticker">
            <p>#MEGAPUSH</p>
            <p>#MEGAПРИЗЫ</p>
            <p>#MEGAPUSH</p>
            <p>#MEGAПРИЗЫ</p>
        </div>

        <div class="items">

            <div class="item">
                <img id="flag-mobile" src="img/flag3-mobile.png" alt="">
                <div class="image">
                    <img src="img/mobile.png" alt="">
                </div>
                <div class="text">
                    <h3>Главный <br> приз</h3>
                    <span>samsung a50</span>
                    <p>1</p>
                </div>

            </div>
            <div class="item">
                <div class="image"><img src="img/speakers.png" alt=""></div>
                <div class="text">
                    <h3>колонка</h3>
                    <span>jbl</span>
                    <p>1</p>
                </div>

            </div>
            <div class="item">
                <div class="image"><img src="img/mi-watch.png" alt=""></div>
                <div class="text">
                    <h3>часы</h3>
                    <span>mi band</span>
                    <p>2</p>
                </div>


            </div>
            <div class="item">
                <div class="image"><img src="img/powerbank.png" alt=""></div>
                <div class="text">
                    <h3>powerbank</h3>
                    <span>mi band</span>
                    <p>3</p>
                </div>

            </div>
            <div class="item">
                <div class="image"><img src="img/airpods.png" alt=""></div>
                <div class="text">
                    <h3>беспроводные</h3>
                    <span>наушники mi</span>
                    <p>3</p>
                </div>

            </div>
        </div>
    </section>

    <div class="video-about">
    <h2>О конкурсе.</h2>
        <video src="megapush.mp4" poster="banner.jpg" id="player"></video>

    </div>


    <section class="conditions">
        <h2>условия участия <span>в конкурсе</span></h2>

        <div class="items">
            <div class="item left">
                <h3>1</h3>
                <p>зарегистрируйтесь</p>
                <span>Укажите свои <br> контактные данные</span>
                <span class="button form-call">Указать</span>
                <div class="pop-up" id="pop-up">
                    <div class="pop-up-content">
                        <p>УКАЖИТЕ СВОИ ДАННЫЕ</p>
                        <form id="registration-form" action="" method="post">
                            <input id="inputName" name="name" type="text" placeholder="Имя" required>
                            <input id="inputTel" class="tel-input" name="tel" type="tel" placeholder="Телефон" required>
                            <input id="inputEmail" name="email" type="email" placeholder="E-mail" required>
                            <p id="mail_success" style="display:none;">Успешно отправлено!</p>
                            <p id="mail_fail" style="display:none;">Такой пользователь уже зарегистрирован!</p>
                            <p id="mail_empty" style="display:none;">Заполните все поля!</p>

                            <input id="registration" type="submit" class="submit" value="Отправить">
                        </form>
                        <div id="close-form"><i class="fas fa-times"></i></div>
                    </div>
                </div>
            </div>
            <div class="item right">
                <h3>2</h3>
                <p>подпишитесь</p>
                <span>На уведомления <br> от MEGAPUSH.UZ</span>
                <span class="button" id="subscribe">подписаться</span>
            </div>
        </div>


        <p class="text">
            <span id="conditions">Условия проведения конкурса:</span> <br><br>


            В конкурсе может принять участие любой гражданин Республики Узбекистан старше 18 лет<br><br>

            Конкурс стартует с 1 июня и продлится до конца 2019 года (включительно)<br><br>

            В конкурсе участвуют только уникальные пользователи, которые подписались на получение PUSH-уведомлений от
            Рекламной Сети MEGAPUSH<br><br>

            Уникальность пользователя отслеживается по многим параметрам, включая электронный почтовый ящик, IP-адрес,
            браузер, операционная система устройства и др.<br><br>

            Рассылка объявления с секретным ПИН-кодом будет происходить случайным образом и в случайно выбранный
            промежуток времени, в период прохождения конкурса<br><br>

            После получения и просмотра PUSH-уведомления с секретным ПИН-кодом, его необходимо ввести на специальной
            странице, указав свой электронный почтовый ящик и номер телефона для связи<br><br>

            Награждение победителей будет происходить еженедельно по понедельникам с освещением в средствах массовой
            информации и фотоотчетом<br><br>

            Сотрудники Рекламного Агентства UPMEDIA не могут участвовать в данном конкурсе<br><br>

            Уплата всех соответствующих налогов и обязательных платежей в государственный бюджет возникших в связи с
            получением приза (призов) по настоящему конкурсу производится
            победителем конкурса самостоятельно в порядке, установленном Налоговым Кодексом и законодательством
            Республики Узбекистан.<br><br>

            <span id="lucky">Желаем всем удачи!</span>
        </p>
    </section>

    <section class="pin">
        <p class="megapush">megapush</p>
        <div class="form">
            <span id="email-fail">Вы не зарегистрированы! <br> Пройдите регистрацию выше.</span>
            <span id="pin-wrong">Неверный пин-код! Повторите ввод.</span>
            <span>Форма ввода и отправки пин-кода</span>
            <span id="empty">Вы не заполнили форму!</span>
            <span id="email-incorrect">Некоректно введен email!</span>



            <form id="pin-form" action="" method="POST">
                <input id="email-pin" name="email" type="email" placeholder="ВВЕДИТЕ ВАШ E-MAIL" required>
                <input id="pin-pin" name="pin" type="text" placeholder="ВВЕДИТЕ ПРИЗОВОЙ ПИН-КОД" required>
                <button id="btn-submit" class="pin-submit" type="submit"><span>ОТПРАВИТЬ</span><img src="img/arrow-button.png" alt=""></button>

            </form>
            <div class="image">
                <p>мы желаем вам удачи!</p>
            </div>

        </div>
        <div class="ticker">
            <p>#MEGAPUSH</p>
            <p>#MEGAПРИЗЫ</p>
            <p>#MEGAPUSH</p>
            <p>#MEGAПРИЗЫ</p>
        </div>
    </section>

    <footer>
        <div class="logo-social">
            <img class="logo-footer" src="img/Logo-footer.png" alt="">
            <div class="social">
                <a href="#"><img src="img/fb-icon.png" alt=""></a>
                <a href="#"><img src="img/insta-icon.png" alt=""></a>
                <a href="#"><img src="img/tg-icon.png" alt=""></a>
            </div>
        </div>
        <div class="center-buttons">
            <a id="rules" href="#">Публичная оферта</a>
            <span id="ontop">Наверх</span>
        </div>
        <div class="tel">

            <span>+998 (78) 148 28 28</span>
            <p>© ООО «UPMEDIA», 2019</p>
        </div>

    </footer>

    <script src="js/jquery-3.4.0.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.md5.min.js"></script>
    <script src="js/plyr.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>