<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <title><?php wp_title('') ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/gregor_danelian/img/icons/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="/wp-content/themes/gregor_danelian/img/icons/favicon-32x32.png">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="/wp-content/themes/gregor_danelian/img/icons/favicon-16x16.png">
    
    <link rel="preload" href="/wp-content/themes/gregor_danelian/fonts/static/Montserrat-Thin.ttf" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/wp-content/themes/gregor_danelian/fonts/static/Montserrat-Regular.ttf" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/wp-content/themes/gregor_danelian/fonts/static/Montserrat-Light.ttf" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/wp-content/themes/gregor_danelian/fonts/static/Montserrat-ExtraLight.ttf" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="/wp-content/themes/gregor_danelian/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/gregor_danelian/css/mob_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <?php
    if (is_page('contacts')) { // страница Контакты?>
    <link rel="stylesheet" href="/wp-content/themes/gregor_danelian/css/contact_form.css">
    <?php } ?>

	<?php wp_head() ?>
</head>

<body>
<style>
    /* START HEADER */
    body{
        font-family: 'Montserrat', sans-serif;
    }
    * {
        margin: 0;
        padding: 0;
    }
    i {
        margin-right: 10px;
    }
    /* START HOME PAGE */
    .header,
    .footer {
        display:none;
    }
    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }
    .left h1 {
        color: #f2e7d3;
        transition: all .2s ease-in-out;
    }
    .right h1 {
        color: #030200;
        transition: all .2s ease-in-out;
    }
    .left {
        left: 0;
        background-color: #030200;
        color: #f2e7d3;
    }
    .right {
        right: 0;
        background: #f2e7d3;
        color: #030200;
    }
    .left a h2{
        text-decoration: none;
        color: #f2e7d3;
        font-size: 21px;
        font-weight: 100;
        transition: all .2s ease-in-out;
        margin-top: 1em;
    }
    .left a:hover h1,
    .left a:hover h2{
        text-decoration: none;
        color: #f2e7d3a6;
    }
    .right a h1 {
        transition: all .2s ease-in-out;
    }
    .right a h2{
        text-decoration: none;
        color: #030200;
        font-size: 21px;
        font-weight: 100;
        transition: all .2s ease-in-out;
        margin-top: 1em;
    }
    .right a:hover h1,
    .right a:hover h2 {
        text-decoration: none;
        color: #03020073;
    }
    .centered {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .centered img {
        height: 200px;
    }
    h1 {
        margin-top: 10px;
        font-size: 24px;
        letter-spacing: 0.25rem;
        font-family: inherit;
        font-weight: 400;
    }
    /* END HOME PAGE */
</style>
	<header class="header">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <div class="container">


                <a class="navbar-brand navbar-logo" href="/">Gregor Danelian</a>
                <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <hr class="hori-selector">
                        <li class="nav-item">
                            <a class="nav-link  dropdown-menu1" href="/catalog">Каталог</a>
                            <ul class="sub-menu">
                                <li><a href='<?php echo home_url() ?>/paintings'>Живопись</a></li>
                                <li><a href='<?php echo home_url() ?>/collages'>Коллажи</a></li>
                                <li><a href='<?php echo home_url() ?>/graphics'>Графика</a></li>
                                <li><a href='<?php echo home_url() ?>/collections'>Коллекции</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Об авторе</a>
                        </li>
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="/exhibitions">Выставки</a>-->
<!--                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>