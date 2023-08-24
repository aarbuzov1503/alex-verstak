<?php
$to = filter_input(INPUT_POST, 'email',  FILTER_VALIDATE_EMAIL); // емайл получателя данных из формы 
$tema = "Заказ услуги alex-verstak.ru"; 
$message = "Ваше сообщение отправлено \r\n Тема: " . filter_input(INPUT_POST, 'clientName', FILTER_SANITIZE_SPECIAL_CHARS); 
$message .= "E-mail: " . $to . "\r\n"; 
$message .= "Сообщение: " . filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS); 
if (isset($to) && $to) mail($to, $tema, $message); 
else $message = 'error email';
mail('alexandr.arbuzov1503@mail.ru', $tema, $message); 
 
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="/img/ico.svg" type="image/x-icon" />
    <title>Заявка отправлена</title>
     <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93592245, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/93592245" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
  <header class="header">
        <div class="container container-header">
             <button type="submit" class="burger" aria-label="Открыть меню">
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                </button>
           <div class="header__logo-wrap">
                <div class="header__logo">
                    <img class="header__img header__logo" src="../img/logo-w.svg" alt="Логотип">
                </div>
            </div>
            <div class="desktop-menu-nav">
                <nav class="header__nav">
                    <ul class="header__list list-reset">
                        <li> <a class="header__link" href="http://alex-verstak.ru/">Главная</a></li>
                         <li class="header__item"> <a class="header__link" href="#about">Обо мне</a></li>
                        <li class="header__item"> <a class="header__link" href="#servise">Примеры работ</a></li>
                        <li class="header__item"> <a class="header__link" href="https://t.me/a_arbuzov1503">Написать в телеграмм</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
     <section id="hero" class="hero">
            <div class="container hero-container">
                <div class="container-hero">
                    <div class="hero__content">
                        <div class="hero__text">
                            <h1 class="reset-heading hero__title reset-heading">
                                <a class="hero__link">Вёрстка сайтов | установка на хостинг</a>
                            </h1>
                            <p class="hero__descr descr-reset hero__php">Данная форма была отправлена на адрес владельца сайта и на ваш почтовый ящик как подтверждение. Совет:Проверьте спам,могло туда уйти</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
</body>
</html>';
?>
