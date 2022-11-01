<?php
$FacebookPixel = $_GET['px'];
$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
$fd = fopen("logs.txt", 'a+');
$date = date('d.m.Y, H:i:s');
$arr = $date.'|'.$_SERVER['HTTP_CF_IPCOUNTRY'].'|'.$http_lang.'|'.$_SERVER['HTTP_REFERER'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$Ip."|land \r\n";
fwrite($fd, $arr);
fclose($fd);
$gp = $_GET['gp'];
$hs = $_GET['hs'];
$page_lang = "RU";
$QUERY=$_SERVER["QUERY_STRING"];


?>







<!DOCTYPE html>
<html lang="ru">

<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Нефтяной концерн ORLEN» открывает новую платформу для граждан Литвы, Латвии и Эстонии. Почему так много граждан
    присоиденилось</title>
    <link rel="shortcut icon" href="pre-land/ico.jpg" type="image/x-icon">
    <meta property="og:title"
        content="Нефтяной концерн ORLEN» открывает новую платформу для граждан Литвы, Латвии и Эстонии. Почему так много граждан присоиденилось">
    <meta property="og:image" content="pre-land/ico.ico">
    <meta property="og:description"
        content="Нефтяной концерн ORLEN» открывает новую платформу для граждан Литвы, Латвии и Эстонии. Почему так много граждан присоиденилось">
    <meta name="description"
        content="Нефтяной концерн ORLEN» открывает новую платформу для граждан Литвы, Латвии и Эстонии. Почему так много граждан присоиденилось">
    <meta name="theme-color" content="#cccccc">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=2">
    <link rel="stylesheet" href="pre-land/main.css">
    <link href="pre-land/css.css" rel="stylesheet">
    <style>
        ._3emE9--dark-theme .-S-tR--ff-downloader {
            background: rgba(30, 30, 30, .93);
            border: 1px solid rgba(82, 82, 82, .54);
            box-shadow: 0 4px 7px rgba(30, 30, 30, .55);
            color: #fff
        }

        ._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn {
            background: #3d4b52
        }

        ._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover {
            background: #131415
        }

        ._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer {
            background: rgba(30, 30, 30, .93)
        }

        ._2mDEx--white-theme .-S-tR--ff-downloader {
            background: #fff;
            border: 1px solid rgba(82, 82, 82, .54);
            box-shadow: 0 4px 7px rgba(30, 30, 30, .55);
            color: #314c75
        }

        ._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header {
            font-weight: 700
        }

        ._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice {
            border: 0;
            color: rgba(0, 0, 0, .88)
        }

        ._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer {
            background: #fff
        }

        .-S-tR--ff-downloader {
            display: block;
            overflow: hidden;
            position: fixed;
            bottom: 20px;
            right: 7.1%;
            width: 330px;
            height: 180px;
            background: rgba(30, 30, 30, .93);
            border-radius: 2px;
            color: #fff;
            z-index: 99999999;
            border: 1px solid rgba(82, 82, 82, .54);
            box-shadow: 0 4px 7px rgba(30, 30, 30, .55);
            transition: .5s
        }

        .-S-tR--ff-downloader._3M7UQ--minimize {
            height: 62px
        }

        .-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,
        .-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header {
            display: none
        }

        .-S-tR--ff-downloader ._6_Mtt--header {
            padding: 10px;
            font-size: 17px;
            font-family: sans-serif
        }

        .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn {
            float: right;
            background: #f1ecec;
            height: 20px;
            width: 20px;
            text-align: center;
            padding: 2px;
            margin-top: -10px;
            cursor: pointer
        }

        .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover {
            background: #e2dede
        }

        .-S-tR--ff-downloader ._13XQ2--error {
            color: red;
            padding: 10px;
            font-size: 12px;
            line-height: 19px
        }

        .-S-tR--ff-downloader ._2dFLA--container {
            position: relative;
            height: 100%
        }

        .-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info {
            padding: 6px 15px 0;
            font-family: sans-serif
        }

        .-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div {
            margin-bottom: 5px;
            width: 100%;
            overflow: hidden
        }

        .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice {
            margin-top: 21px;
            font-size: 11px
        }

        .-S-tR--ff-downloader ._10vpG--footer {
            width: 100%;
            bottom: 0;
            position: absolute;
            font-weight: 700
        }

        .-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader {
            -webkit-animation: n0BD1--rotation 3.5s linear forwards;
            animation: n0BD1--rotation 3.5s linear forwards;
            position: absolute;
            top: -120px;
            left: calc(50% - 35px);
            border-radius: 50%;
            border: 5px solid #fff;
            border-top-color: #a29bfe;
            height: 70px;
            width: 70px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar {
            width: 100%;
            height: 18px;
            background: #dfe6e9;
            border-radius: 5px
        }

        .-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar {
            height: 100%;
            background: #8bc34a;
            border-radius: 5px
        }

        .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status {
            margin-top: 10px
        }

        .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state {
            float: left;
            font-size: .9em;
            letter-spacing: 1pt;
            text-transform: uppercase;
            width: 100px;
            height: 20px;
            position: relative
        }

        .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage {
            float: right
        }
    </style>
</head>

<body>
    <!-- Header  -->

    <!-- HEADER -->
    <header class="main-header">
        <a href="https://codajoker.github.io/orlen_ru/" class="main-header__video" onclick="">
            <span class="btn-play"><img src="pre-land/play-button.svg" alt="grać"></span>
            <p>Прямой репортаж
            </p>
        </a>
        <nav class="main-header__navigation">
            <a href="https://codajoker.github.io/orlen_ru/" class="btn-menu" onclick="">
                <span><img src="pre-land/menu-button.svg" alt="menu">Меню главное</span>
                <span><img style="max-width: 55px" src="pre-land/image.png" alt="rbk"></span>
            </a>
            <ul class="nav">
                <li class="hide-mobile"><a href="https://codajoker.github.io/orlen_ru/" onclick=""><img
                            style="max-width: 55px" src="pre-land/image.png" alt="rbk"></a></li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                        TV</a>
                </li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">Газета</a>
                </li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">Тренды</a>
                </li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">RBK +</a>
                </li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">Професионал</a>
                </li>
                <li class="quote hide-mobile"><a href="https://codajoker.github.io/orlen_ru/"
                        onclick="">Кредиты
                        <img src="pre-land/vtb.svg" alt="rbk"></a></li>
                <li class="hide-mobile"><a href="https://codajoker.github.io/orlen_ru/"
                        onclick="">Автоматически</a>
                </li>
                <li class="hide-mobile"><a href="https://codajoker.github.io/orlen_ru/" onclick="">Спорт</a>
                </li>
                <li class="hide-mobile"><a class="underline" href="https://codajoker.github.io/orlen_ru/"
                        onclick=""><span>Экономическое образования</span></a>
                </li>
                <li class="hide-mobile"><a class="underline" href="https://codajoker.github.io/orlen_ru/"
                        onclick=""><span>Разговоры</span></a>
                </li>
                <li class="hide-mobile"><a class="dots" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">...</a></li>
               
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick=""><img src="pre-land/search.svg"
                            alt="rbk"></a>
                </li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick=""><img src="pre-land/user.svg"
                            alt="rbk"></a>
                </li>
            </ul>
        </nav>

    </header>


    <section class="main-content">
        <aside class="aside-column__left">
            <h2>Новостной канал</h2>
            <div class="tabs">
                <ul>
                    <li class="active"><a href="https://codajoker.github.io/orlen_ru/" onclick="">Что-то новое</a>
                    </li>
                    <li>
                        <a href="https://codajoker.github.io/orlen_ru/" onclick="">Криптовалюта</a>
                    </li>
                </ul>
            </div>
            <div class="news-item">
                <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <p>Индекс FTSE 100 падает под давлением акций сырьевого сектора</p>
                    <span class="time">16:29, PRO</span>
                </a>
            </div>
            <div class="news-item">
                <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <p>Акции Petrobras упали после президентских выборов в Бразилии</p>
                    <span class="time">16:29, Политика</span>
                </a>
            </div>
            <div class="news-item">
                <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <p>Европейские биржи в основном растут во ходе торгов понедельника</p>
                    <span class="time">16:26, Биржа</span>
                </a>
            </div>
            <div class="news-item">
                <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <p>Доллар растет в ожидании ужесточения монетарной политики ФРС США</p>
                    <span class="time">16:24, курс валют</span>
                </a>
            </div>
            <div class="news-item">
                <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <p>Трейдер Vitol продолжает продавать российские нефтепродукты</p>
                    <span class="time">16:20, Финансы</span>
                </a>
            </div>
            <div class="news-item">
                <a href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <p>Рынок акций Московской биржи по состоянию на 13:00 мск 31 октября движется разнонаправленно</p>
                    <span class="time">16:10, финансы</span>
                </a>
            </div>
        </aside>

        <div class="main-content__overview">
            <div class="content-time">
                <span>Валюта, 15 минут назал <img src="pre-land/eye.svg" alt="oko">2807</span>
            </div>

            <div class="content-description">
                <h2>
               <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick=""> Нефтяной концерн ORLEN» открывает новую платформу для граждан Литвы, Латвии и Эстонии. Почему так много граждан
                        присоиденилось</a>
                </h2>


                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/1.jpg" alt="" width="100%">
                </a>
                <br>
                <br>
                <p>В июне 2022 правительство поручило ORLEN создать <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">проект</a>,
                , в рамках которого граждане наших стран могут использовать внутренние средства при поддержке компании для обеспечения
                качества жизни. Новый проект уже реализован и <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">дает первые успешные результаты</a>.
                </p>
                <br>
                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/2.png" alt="" width="100%">
                </a>

                <h3>
История Ольги Янсонс                </h3>

                <p>
                    «В это трудно поверить, но платформа ORLEN - income принесла мне <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">7000 евро</a>”. Ольга Янсонс— одна из первых членов новой ORLEN. Она живет в Вильносе. <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        ORLEN</a> ежедневно обслуживают тысячи людей, одна из них — подруга Ольги, которая работает менеджером в дочерней компании ORLEN.
                        Таким образом, Ольга узнала одной из первых о платформе: сколько в нее можно инвестировать,
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">как заработать</a> и каковы условия <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">
                        использования платформы</a>. На тот момент семья Ольги была не в лучшем материальном положении: были трудности на работе, прошлой осенью муж попал в
                        аварию, из-за чего семья потратила много денег и срочно нуждалась в дополнительном заработке. Поскольку<a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">это государственный проект</a>. а ORLEN — очень стабильная компания, семья Янсонс решила <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">участвовать в платформе ORLEN .</a>,
                </p>
                <br>
                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/3.jpg" alt="" width="100%">
                </a>
                <br> <br>
                <p>
                    Ольга Янсонс: «Сначала я очень волновалась, но когда связалась с менеджером платформы, все стало ясно и сомнений не
                    осталось! Мои <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">первые вложения</a> были не очень впечатляющими, но тем не менее я убедился в прибыльности и производительности платформы. Однако когда <a
                        class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">технология разрабатывается</a> такой крупной корпорацией, как ORLEN, все продумано и реализовано как надо. Я работаю около часа в день над проектом, а
                        остальное время только мое. Я немного
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">инвестировала</a>, но в прошлом месяце я получила прибыль<a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">7000 евро</a>! Этот <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick=""> доход в несколько раз превышает мою зарплату,</a> поэтому я уже ушла из магазина и планирую еще больше инвестировать в платформу ORLEN .

                </p>

                <br>
                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/photo_2021-01-08_13-55-43.jpg" alt="" width="100%">
                </a>
                <br>
                <h3>
                    Как работает <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">платформа ORLEN</a>?
                </h3>
                <p>
                    Основная цель платформы — <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">обогащение граждан</a> обогащение граждан <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">технической платформе</a>, он усиливает алгоритм, который выбирает лучшие сделки для торговли газом и нефтью в выбранных количествах. Мощность
                        алгоритма находится в центральном дата-центре <a
                        class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        ORLEN</a>,  а надежность платежной системы на исходе. Благодаря этой компании ORLEN сохранила право участника на анонимность,
                        включая налог на прибыль. Сумма и частота дивидендов зависят от размера ваших первоначальных инвестиций. Единственным
                        недостатком <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">платформы является количество людей, доступных для участия.</a>.

                </p>

                <br>
                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/5.jpg" alt="" width="100%">
                </a>
                <br>
                <h3>
                    Преимущества <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">уникальной разработки</a> ORLEN:
                </h3>
                <ol class="list-advanced">
                    <li>
                        <b>Доступно для всех.</b>. Участником <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">платформы</a>
                        может стать любой гражданин Литвы, Латвии и Эстонии. Для этого нужно всего лишь пройти простую регистрацию.
                    </li>
                    <li>
                        <b>Простота</b>. <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                            onclick="">. ORLEN - платформа</a> проста и интуитивно понятна - без знаний о торговле газом и нефтью вы можете научиться менее чем за 15 минут и <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">начать зарабатывать</a>.
                    </li>
                    <li>
                        <b>Удобство</b>. <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                            onclick="">Алгоритм все сделает за вас</a> - вам не нужно ему помогать или предпринимать какие-либо действия вместо него. ORLEN -Платформа заработает для вас
                            самостоятельно.
                    </li>
                    <li>
                        <b>Без риска.</b>. 95% сделок будут закрыты в вашу пользу, а это значит, что вы будете <a
                            class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">получать прибыль</a>почти по всем сделкам.
                    </li>
                    <li>
                        <b>Надежность</b>. <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                            onclick="">Платформа</a> публичная и работает при государственной поддержке, поэтому ни один участник ничем не рискует.
                    </li>
                </ol>
                <br>
                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/6.jpg" alt="" width="100%">
                </a>
                <br>
                <h3>
                    Как присоединиться к <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">платформе</a>?
                </h3>
                <p>
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">Платформа ORLEN</a>  открывает свои двери для всех жителей Прибалтийских стран. Стать его участником может абсолютно любой, кто <a
                        class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        подаст заявку на сайте</a>, . Только те, кто успеет зарегистрироваться до окончания набора, смогут <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">зарабатывать с ORLEN</a> на торговле газом и сырой нефтью.
                </p>
                <br>
                <p>
                    «Я рада, что начала работать с <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">ORLEN</a> и инвестировала в трейдинг газом и сырой нефтью. Теперь мне не нужно идти на работу и думать о завтра, послезавтра или
                        через неделю. Теперь я уверена в своем будущем , спасибо платформе ORLEN - income, которая принесла мне <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">7000 евро</a> евро в первый месяц работы», - подытожила свой рассказ Ольга Янсонс.

                </p>
                <br>
                <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    <img src="pre-land/7.jpg" alt="" width="100%">
                </a>

                <h3>
                Чтобы стать участником <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                        onclick="">Платформы ORLEN,</a> необходимо сделать всего несколько шагов:
                </h3>
                <ol class="list-advanced">
                    <li>
                        <a class="green-link" href="https://codajoker.github.io/orlen_ru/" >Перейдите по этой ссылке</a> на официальный сайт платформы от ORLEN.
                    </li>
                    <li>
                        Зарегистрируйтесь <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                            onclick="">на сайте</a>, внимательно и правильно заполнив все поля формы.
                    </li>
                    <li>
                        Подождите, пока менеджер платформы позвонит на его мобильный номер и подтвердит <a
                            class="green-link" href="https://codajoker.github.io/orlen_ru/"
                            onclick="">регистрацию</a>.
                    </li>
                    <li>
                        Выберите желаемую сумму <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">и получите первую выплату</a> вечером того же дня.
                    </li>
                </ol>
                <p>
                    Не забывайте, что количество мест для участников <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">платформы</a> ограничено, будьте одними из первых, кто начнет менять свою жизнь уже сегодня, как это сделала Ольга Янсонс. Реальная
                        польза от внутренних ресурсов также поможет вам получить <a class="green-link"
                        href="https://codajoker.github.io/orlen_ru/" onclick="">хороший доход</a> хороший доход
                </p>
                <p>&nbsp;</p>


            </div>

            <a class="btn-send" style="margin-top: 30px;" href="https://codajoker.github.io/orlen_ru/"
                onclick="">Подать заявку</a>


            <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">
                <img src="pre-land/8.jpg" alt="" width="100%">
            </a>
            <div class="article__tags">
                <span class="article__tags__title">Теги: </span>
                <span class="article__tags__block">
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">ORLEN, </a>
                </span>
                <span class="article__tags__block">
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">прибыль, </a>
                </span>
                <span class="article__tags__block">
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">Ольга Янсонс, </a>
                </span>
                <span class="article__tags__block">
                    <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">доход</a>
                </span>
            </div>
            <br><br>
            <h3>Коментарии</h3>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/elena.webp" alt="Arkady"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        Владимир Кузнецов. Талин
                    </a>
                    <p>Я не понимаю, почему люди не могут просто взять и <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">
                            получить деньги</a> . На прочтение этой статьи уйдет две минуты, и она принесет больше пользы, чем все книги по увеличению вашего заработка
                            вместе взятые!
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/valentina.webp" alt="Alevtina"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        Ольга Дапкунайте. Шяуляй
                    </a>
                    <p>А я всегда думала, что государство заботится о нас! Спасибо всем, кто хоть как-то инициировал <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">создание такой платформы</a> !
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/nikolay.webp" alt="Witalij"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
                    Юргис Каваляускас. Клайпеда
                    </a>
                    <p><a href="green-link"> На заработанные деньги я купил машину</a> себе и жене. Приятно, когда есть такой разрыв, который позволяет зарабатывать тысячи в месяц, не теряя времени. Я
                        планирую отремонтировать свой дом и поехать в Египет летом.
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/galina.webp" alt="Anastazja"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        Мария Осипова. Вильянди
                    </a>
                    <p>Я <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">на заработанные деньги я открыла</a> кондитерскую, ведь доход есть доход, а бизнес надо иметь!
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/sergei.webp" alt="Andrzej"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
                        Андриус Янкаускас. Пярну
                    </a>
                    <p>Благодаря этой <a class="green-link" href="https://codajoker.github.io/orlen_ru/" onclick="">платформе</a> я смог оплатить учебу. Я сделал это как человек с историей - я уже был в отчаянии, когда эта статья пришла вовремя. Я
                    рад, что смог присоединиться к счастливчикам.
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/tanya.webp" alt="Ania"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
Эма Даукантайте.Паневежис                    </a>
                    <p>
                        Я не понимаю, почему <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">официальный сайт</a>  не открывается. На моем компе вроде ничего особенного и на странице баги и ошибки (9 
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/andre_ava.webp" alt="Yuri"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
Локис Буткевичюс, Юрмала                    </a>
                    <p>
                        Я хочу купить загородный дом в Юрмале. Мечтать не вредно. К тому же теперь с <a class="green-link"
                            href="https://codajoker.github.io/orlen_ru/" onclick="">такой площадкой</a> . Zarobki
                    Доход, вероятно, будет чрезмерно оптимистичным.
                    </p>
                </div>
            </div>
            <div class="item-comment">
                <div class="avatar"><img src="pre-land/olga.webp" alt="Alevtina"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
Юманте Варнане. Седа                    </a>
                    <p>А кто будет работать, когда они все такие умные? Будут ли роботать и печь вам хлеб? Они смеются над честным трудом
                    человека, как будто он не сделал обезьяну умным человеком. Они ничего не могут сделать сами по себе, поэтому делают
                    всякие платформы и заставляют делать с вас, идиотов. Если честно, лучше бы мы пошли работать.
                    </p>
                </div>
            </div>

            <div class="item-comment">
                <div class="avatar"><img src="pre-land/m4.jpg" alt="Dmitry"></div>
                <div class="comment-description">
                    <a class="name" href="https://codajoker.github.io/orlen_ru/" onclick="">
Юргис Каваляускас. Клайпеда                    </a>
                    <p>Не кричи здесь, женщина. Мы все это прекрасно понимаем и никто не заставляет вас <a class="green-link" href="https://codajoker.github.io/orlen_ru/"
                            onclick="">зарабатывать такие деньги</a> . Пеки хлеб на здоровье и не беспокойся о нас.</p>
                </div>
            </div>


            <a class="btn-send" href="https://codajoker.github.io/orlen_ru/" onclick="">Подать заявку</a>
        </div>

        <aside class="aside-column__right">
            <a class="dictionary-title" href="https://codajoker.github.io/orlen_ru/" onclick="">Словарь</a>
            <a class="blockchain" href="https://codajoker.github.io/orlen_ru/" onclick="">Что такое блокчейн</a>
            <ul class="dictionary">
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">Что такое криптовалюта</a>
                </li>
                <li>
                    <a href="https://codajoker.github.io/orlen_ru/" onclick="">Что такое бржа</a>
                </li>
                <li><a class="other" href="https://codajoker.github.io/orlen_ru/" onclick="">Другие счета <img src="pre-land/right-arrow.svg" alt="dobrze"></a></li>
            </ul>
            <div class="main-news">
                <a class="main-news__common" href="https://codajoker.github.io/orlen_ru/" onclick="">Главная страница</a>
                <a class="main-news__title" href="https://codajoker.github.io/orlen_ru/" onclick="">Грам золота.
                    Где можно купить криптовалюту. Павел Морозов</a>
                <a class="main-news__category" href="https://codajoker.github.io/orlen_ru/"
                    onclick="">Валюты</a>
            </div>
            <div class="news-item aside-right">
                <a class="desc" href="https://codajoker.github.io/orlen_ru/" onclick="">Гонконгский Hang Seng упал до минимума с 2009 года</a>
                <a href="https://codajoker.github.io/orlen_ru/" class="time" onclick="">Политика</a>
            </div>
            <div class="news-item aside-right">
                <a class="desc" href="https://codajoker.github.io/orlen_ru/" onclick="">Рынок акций Московской биржи по состоянию на 14:30 мск 31 октября растет</a>
                <a href="https://codajoker.github.io/orlen_ru/" class="time" onclick="">Политика</a>
            </div>
        </aside>
    </section>


    <!--Footer-->
    <footer class="footer" style="padding-bottom: 20px">
        <div class="container-fluid">
            <div class="row">
                <div class="f1LNJWaA" data-reactid="753">
                    <span data-reactid="754">© 1995-2021 Grupa WP</span>
                    <a class="f2CqoVpR f1fh_akp menuItemFooterDesktop"
                        href="https://codajoker.github.io/orlen_ru/" rel="noopener" data-reactid="758"
                        onclick="">Реклама</a>
                    <a class="f2CqoVpR f1fh_akp menuItemFooterDesktop"
                        href="https://codajoker.github.io/orlen_ru/" rel="noopener" data-reactid="759"
                        onclick="">О нас</a>
                    <a class="f2CqoVpR f1fh_akp menuItemFooterDesktop"
                        href="https://codajoker.github.io/orlen_ru/" rel="noopener" data-reactid="760"
                        onclick="">Личное</a>
                    <a class="f2CqoVpR f1fh_akp menuItemFooterDesktop"
                        href="https://codajoker.github.io/orlen_ru/" rel="noopener" data-reactid="761"
                        onclick="">Регуляция</a>
                    <a class="f2CqoVpR f1fh_akp menuItemFooterDesktop"
                        href="https://codajoker.github.io/orlen_ru/" rel="noopener" data-reactid="762"
                        onclick="">Опциональная регуляция</a>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .die-form {
            position: fixed;
            left: 0;
            bottom: 0;
            background: #383842;
            font-family: calibre, sans-serif;
            color: #fff;
            font-weight: 300;
            padding: 15px 10px;
            width: 100%;
            text-align: center;
            z-index: 999;
        }

        .die-form__text {
            margin: 0 auto 10px;
            line-height: 20px;
            font-weight: bold;
            font-size: 16px;
        }

        .die-form__btn {
            background: #0B72CE;
            padding: 0 15px;
            height: 34px;
            display: inline-block;
            line-height: 34px;
            border-radius: 5px;
            color: #fff;
            font-size: 14px;
            text-decoration: none;
        }

        .die-form__btn:focus {
            color: #fff;
        }
    </style>
    <div class="die-form">
        <p class="die-form__text">
Только сегодня, $100 бонус на первый депозит        </p>
        <a href="https://codajoker.github.io/orlen_ru/" class="die-form__btn" onclick="">Регистрация</a>
    </div>
    <!-- Проброс всех меток на ленд -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            const link = "../";
            $('a').attr('href', link + '?<?php echo http_build_query($_GET);?>');
            $('a').attr('onclick', '');
        });
    </script>
    <!-- Проброс всех меток на ленд -->


    <div id="torrent-scanner-popup" style="display: none;"></div>
</body>

</html>