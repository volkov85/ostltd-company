<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


    <title>Контакты OSTLtd</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Компания OSTLTD. Листовые материалы. Самоклеящиеся пленки. Инструменты и светотехника. Материалы для печати. Мобильные стенды. Профильные системы " />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css?v=1.00">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
  </head>
  <body>
    <?php include 'mail.php'; ?>
    <header class="header header--inner" id="top">
      <div class="header__wrapper">
        <a class="logo" href="index.php">
          <img src="img/logo.png" alt="Логотип ОСТЛТД" width="160" height="89">
        </a>
        <ul class="menu">
          <li>
            <a class="menu__item" href="index.php">ГЛАВНАЯ</a>
          </li>
          <li>
            <a  class="menu__item" href="catalog.html">КАТАЛОГ ПОДУКЦИИ</a>
          </li>
          <li>
            <a class="menu__item" href="services.html">НАШИ УСЛУГИ</a>
          </li>
          <li>
            <a class="menu__item" href="about.html">О КОМПАНИИ</a>
          </li>
          <li>
            <a class="menu__item menu__item--active" href="#!">КОНТАКТЫ</a>
          </li>
        </ul>
        <button class="header__menu-toggle" type="button">
          <span class="visually-hidden">Открыть меню</span>
        </button>
        <div class="header__contacts">
          <span>8-701-521-27-14</span>
          <span>8-771-374-05-01</span>
        </div>
      </div>
      <div class="menu-mobile menu-mobile--closed">
        <div class="menu-mobile__top">
          <div class="header__contacts-mobile">
            <span>8-701-521-27-14</span>
            <span>8-771-374-05-01</span>
          </div>
          <button class="header__toggle header__toggle--close" type="button">
            <span class="visually-hidden">Закрыть меню</span>
          </button>
        </div>
        <ul class="menu-mobile__inner">
          <li>
            <a class="menu__item__inner" href="index.php">ГЛАВНАЯ</a>
          </li>
          <li>
            <a  class="menu__item__inner" href="catalog.html">КАТАЛОГ ПОДУКЦИИ</a>
          </li>
          <li>
            <a class="menu__item__inner" href="services.html">НАШИ УСЛУГИ</a>
          </li>
          <li>
            <a class="menu__item__inner" href="about.html">О КОМПАНИИ</a>
          </li>
          <li>
            <a class="menu__item__inner" href="contacts.php">КОНТАКТЫ</a>
          </li>
        </ul>
      </div>
    </header>
    <main class="container">
      <section class="contacts">
        <h2 class="section-header section-header--contacts">контакты</h2>
        <div class="contacts__wrapper">
          <div class="contacts__desc">
            <p class="contacts__desc-title">
              вы можете отправить нам сообщение через форму обратной связи, либо:
            </p>
            <p class="contacts__desc-title">
              Напишите нам
            </p>
            <p class="contacts__desc-text">
              Пришлите Вашу заявку нам и наш менеджер обязательно с Вами свяжется.
            </p>
            <p class="contacts__desc-text">
              Email: <a href="mailto:ostltd_info@mail.ru">ostltd_info@mail.ru</a>
            </p>
            <p class="contacts__desc-title">
              Позвоните нам
            </p>
            <p class="contacts__desc-text">
              Для Вашего удобства Вы можете позвонить, либо написать в WhatsApp или Telegram.
            </p>
            <div class="contacts__desc-wrapper">
              <p class="contacts__desc-text">
                Тел:
                <a href="tel:87172615474">8 (7172) 61-54-74</a>
              </p>
              <p class="contacts__desc-text">
                <a href="tel:87015212714">8-701-521-27-14</a>
              </p>
              <p class="contacts__desc-text">
                <a href="tel:87713740501">8-771-374-05-01</a>
              </p>
            </div>
            <p class="contacts__desc-title">
              приезжайте к нам
            </p>
            <p class="contacts__desc-text">
              Мы находимся по адресу:
            </p>
            <p class="contacts__desc-text">
              г. Нур-Султан, ул.Потанина, дом 3 (ЖК "Лея"), ВП237
            </p>
          </div>
          <form class="partnership__form partnership__form--contacts partnership__form--contacts-inner" action="" method="post">
            <fieldset class="partnership__contact-fields" title="Form fields">
              <span class="partnership__form-title">Свяжитесь с нами</span>
              <div class="partnership__contact-wrapper">
                <label>Ваше имя
                  <input type="text" placeholder="Введите имя" name="name" required autocomplete="off">
                </label>
                <label>Ваш телефон
                  <input type="tel" placeholder="Введите номер телефона" name="phone" required autocomplete="off">
                </label>
                <label>Ваш email
                  <input type="email" name="email" placeholder="Введите электронный адрес" required autocomplete="off">
                </label>
                <label>Сообщение
                  <textarea name="message" placeholder="Введите сообщение" maxlength="500" rows="6" required autocomplete="off"></textarea>
                </label>
              </div>
            </fieldset>
            <div class="captcha" style="display: flex;justify-content: center;margin-top: 20px;">
              <div class="g-recaptcha" data-sitekey="6LcXmvQZAAAAAA3muSf-ejX3G53aYsEQxZtJyCDu"></div>
            </div>
            <button class="partnership__contact-button button" type="submit" name="submit" id="sendButton">
              Отправить
            </button>
          </form>
        </div>
      </section>
      <section class="map">
        <span class="visually-hidden">Карта проезда</span>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa91c4ae0c69764a2b3eb1c46885b1d1ba6e9e93ec4b8b26c3b2e3b03a3107158&amp;source=constructor" width="100%" height="370" frameborder="0"></iframe>
      </section>
    </main>
    <footer class="footer">
          <!--alert messages start-->
          <?php echo $alert; ?>
          <!--alert messages end-->
      <div class="footer__wrapper">
        <a class="logo" href="index.php">
          <img src="img/logo.png" alt="Логотип ОСТЛТД" width="160" height="89">
        </a>
        <ul class="menu">
          <li>
            <a class="menu__item" href="index.php">ГЛАВНАЯ</a>
          </li>
          <li>
            <a  class="menu__item" href="catalog.html">КАТАЛОГ ПОДУКЦИИ</a>
          </li>
          <li>
            <a class="menu__item" href="services.html">НАШИ УСЛУГИ</a>
          </li>
          <li>
            <a class="menu__item" href="about.html">О КОМПАНИИ</a>
          </li>
          <li>
            <a class="menu__item menu__item--active" href="#!">КОНТАКТЫ</a>
          </li>
        </ul>
        <div class="footer__contacts">
          <span>8-701-521-27-14</span>
          <span>8-771-374-05-01</span>
        </div>
      </div>
      <p class="footer__copyright">© Copyright 2020 Все права защищены(с)</p>
    </footer>
    <a class="top-link" href="#top">
      <span class="visually-hidden">Scroll to Top</span>
    </a>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js?v=1.00"></script>
    <script type='text/javascript'>
      RecoverScroll.start();
    </script>
  </body>
</html>
