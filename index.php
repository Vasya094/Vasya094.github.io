<?php ?>
<!DOCTYPE html>
<html dir="ltr" lang="ru">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&amp;subset=cyrillic"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./css/main.css?<?php echo time(); ?>" type="text/css" />
    <!-- <script src="/scripts/viewer.js"></script> -->
    <script async src="./js/main.js?<?php echo time(); ?>"></script>
    <meta name="viewport" id="view" content="width=320">
    <title>Разработка эффективных сайтов</title>
    <link href="/css/viewer.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="index">
    <div class="wrapper">
        <header class="header" id="head">
            <div class="logo_info">
                <a href="/" class="logo">
                    <img src="./img/logo.png" alt="logo">
                </a>
                <p>COMING SOON! Stay tuned to something amazing</p>
            </div>
            <a href="#feedback" class="butt butt_blue">Notify me!</a>
        </header>
        <div class="slider">
            <div class="slide slide_1">
                <h2>Loved by Traders, Cherished by Copiers</h2>
                <p>Traders Trade, Copiers Copy... It’s that easy!</p>
                <a href="#feedback" class="butt butt_white">Notify me!</a>
            </div>
            <div class="slide slide_2">
                <h2>Interested in a Passive investment?</h2>
                <p>Look over the historical trading results of traders. Select a trader and copy their trades in real
                    time.<p>
                        <a href="#feedback" class="butt butt_white">Notify me!</a>
            </div>
            <div class="slide slide_3">
                <h2>Trade like you've got a robot looking over the shoulder of a Day Trader</h2>

                <a href="#feedback" class="butt butt_white">Notify me!</a>
            </div>
            <div class="slide slide_4">
                <h2>Sit back and review the results -</h2>
                <p>Traders Trade, Copiers Copy... It's that easy!</p>
                <a href="#feedback" class="butt butt_white">Notify me!</a>
            </div>
            <div class="slide slide_5">
                <h2>Trade the trades that Traders take till their trade trend terminates</h2>

                <a href="#feedback" class="butt butt_white">Notify me!</a>
            </div>
        </div>
        <div class="main">
            <div class="left_side">
                <div class="text">
                    <p>Built by Traders for Traders</p>
                    <p>Your money is kept in your account</p>
                    <p>Supported by a team of Fanatics</p>
                </div>
                <div class="places">
                    <img src="./img/binanse.png" alt="binanse">
                    <img src="./img/ftx.png" alt="ftx">
                </div>
                <div class="feedback" id="feedback">
                    <p>Live the Laptop Lifestyle without the need for a Laptop...</p>
                    <form id="sendform"action="">
                        <input class="email" type="email" placeholder="email">
                        <input class='submit' type="submit" value="Notify">
                    </form>
                </div>
            </div>
            <div class="right_side">
                <div class="notebook">
                </div>
                <p>How it Works</p>
            </div>
        </div>
        <footer>
            <div class="grey_box">
                <a href="/" class="logo">
                    <img src="./img/logo.png" alt="logo">
                </a>
                <p>COMING SOON! Stay tuned to something amazing</p>
            </div>
            <div class="black_line">
                <div class="pay_link">
                    <a href="/"></a>
                    <a href="/"></a>
                    <a href="/"></a>
                </div>
                <button class="butt butt_red">NO BULLSHIT</button>
            </div>
            <div class="gray_box bottom_box">
                <p>Copyright (c) 2021 - FIGJAM All rights Reserved.</p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider').slick({
            dots: true,
            arrows: true
        });
    </script>

</body>