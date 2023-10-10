<?php
/*Template Name: page*/
get_header();
?>

    <?php if (is_page ('catalog')) { //Проверяем, страница - КАТАЛОГ ?>
    <div class="main-container">
        <style>
            .navbar-mainbg {
                position: fixed !important;
                width: 100% !important;
            }
           /*  body{
               font-family: 'Montserrat', sans-serif;
           }
           * {
               margin: 0;
               padding: 0;
           }
           i {
               margin-right: 10px;
           } */
            /* START catalog PAGE */
            footer.footer {
                display:none;
            }
            .main-container .split {
                height: 50%;
                width: 50%;
                position: fixed;
                z-index: 1;
                top: unset !important;
                overflow-x: hidden;
                padding-top: 20px;
                background-color: #121515;
                border-top: 0.5px solid #2a333382;
            }
            .main-container .left {
                top: 2.5em !important;
                left: 0;
                color: #f2e7d3;
                border-right: 0.5px solid #2a333382;
            }
            .main-container .right {
                top: 2.5em !important;
                right: 0;
                color: #f2e7d3;
            }
            .main-container .bottom-left {
                bottom: -2.3em !important;
                left: 0;
                color: #f2e7d3;
                border-right: 0.5px solid #2a333382;
            }
            .main-container .bottom-right {
                bottom: -2.3em !important;
                right: 0;
                color: #f2e7d3;
            }
            .main-container .bottom-right a h2,
            .main-container .bottom-left a h2,
            .main-container .right a h2,
            .main-container .left a h2{
                text-decoration: none;
                color: #f2e7d3;
                font-size: 24px;
                font-weight: 100 !important;
                transition: all .2s ease-in-out;
                margin: 0px auto;
                letter-spacing: 0.25rem;
            }
            .main-container .bottom-right a h2:hover,
            .main-container .bottom-left a h2:hover,
            .main-container .right a h2:hover,
            .main-container .left a h2:hover{
                text-decoration: none;
                color: #f2e7d378;
            }
            .bottom-left .centered,
            .bottom-right .centered {
                top: 45%;
            }
            /* .centered {
                display: none;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            } */
            /* h2 {
                margin-top: 20px;
                font-size: 28px;
            
                font-family: inherit !important;
            } */
            /* END HOME PAGE */
        </style>
            <div class="split left" id="main_left">
                <div class="centered">
                    <a href="/catalog/paintings"><h2>Живопись</h2></a>
                </div>
            </div>
            <div class="split right" id="main_right">
                <div class="centered">
                    <a href="/catalog/graphics"><h2>Графика</h2></a>
                </div>
            </div>
            <div class="split bottom-left" id="main_b-left">
                <div class="centered">
                    <a href="/catalog/collages"><h2>Коллажи</h2></a>
                </div>
            </div>
            <div class="split bottom-right" id="main_b-right">
                <div class="centered">
                    <a href="/collections"><h2>Коллекции</h2></a>
                </div>
            </div>
    </div>
    <?php } elseif (is_page('about')) { // страница - Об авторе?>
    <div class="container main">
        <style>
            body {
                background-color: #fffffe;
            }
            .sub-menu,
            .navbar-mainbg,
            footer.footer {
                background-color: #ffffff !important;
            }
            footer.footer{
                border-top: 1px solid #40424147;
            }
            .container.main .h1,
            .wrapper, .wrapper h1,.wrapper h2,.wrapper h3,.wrapper h4,.wrapper p,.wrapper span,.wrapper ul > li,
            .sub-menu li > a,
            .nav-item a,
            .footer,
            .navbar-brand.navbar-logo {
                font-weight: 300;
                color: #121515;
            }
            .sub-menu > li > a:hover {
                color: #847c6e !important;
            }
        </style>
        <div class="container main">
            <h1 class="main-title">Об авторе</h1>
            <div class="wrapper">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
    <?php } elseif (is_page('contacts')) { // страница Контакты?>
    <div class="container main">
        <h1>Contact us</h1>
        <div class="wrapper">
            <form id="contact-form">
                <fieldset>
                    <label class="name">
                        <input type="text" name="fname" required placeholder="Name">
                        <span class="empty-message">*This field is required.</span>
                    </label>
                    <label class="email">
                        <input type="text" name="email" required placeholder="Email">
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="phone">
                        <input type="text" name="phone" required placeholder="Phone">
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="message">
                        <textarea name="msg" placeholder="Message"></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <div class="contact-form-buttons">
                        <button type="submit" class="btn-big">Send</button>
<!--                        <button type="reset" class="btn-big">Clear</button>-->
                    </div>
                </fieldset>
                <div class="modal fade response-message">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                You message has been sent! We will be in touch soon.
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="" value="true">
                <?php wp_nonce_field() ?>
            </form>
            <div class="contacts-block">

                <a href="mailto:test@test.test"><img src="/wp-content/themes/gregor_danelian/img/icons/email.png" alt="email"> &nbsp;
                    <span>test@test.test</span>
                </a>
                <p></p>

                <a href="tel:+375552221100"><img src="/wp-content/themes/gregor_danelian/img/icons/phone.png" alt="phone"> &nbsp;
                    <span>+375(55) 222-11-00</span>
                </a>
            </div>
        </div>
    </div>    
    <?php } elseif (is_page('exhibitions')) { // страница Выставки?>
    <div class="container main">
        выставки - page.php
    </div>
    <?php } elseif (is_page('collections')) { // страница Коллекции?>
        <style>
            .tabs {
                position: relative;
                background: #f4efe6;
                width: 100%;
            }
            .tab_wrapper {
                padding-left: 0px !important;
            }
            .tabs nav {
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
                background: #222424;
                color: #f2e7d3;
                width: 100%;
                height: calc(100vh - 310px);
            }
            .tabs nav a {
                transition: all .4s ease-in-out;
                padding: 10px 20px;
                width: 100%;
                cursor: pointer;
                font-size: 20px;
                display: flex;
                align-items: center;
                justify-content: end;
                color: #8c8c8c !important;
            }
            /*.tabs nav a:hover,*/
            .tabs nav a.selected {
                opacity: 1;
                color: #f2e7d3 !important;
                background: #121515;
            }
            .tabs .content {
                padding: 10px 0px;
                position: absolute;
                top: 0px;
                color: #000000;
                width: 0px;
                height: 100%;
                overflow: auto;
                opacity: 0;
                transition: opacity .4s ease-in-out;
                font-weight: 300;
                right: 5px;
            }
            .content .content-inner p, .content .content-inner a, .content .content-inner h1,
            .content .content-inner h2, .content .content-inner h3,
            .content .content-inner h4, .content .content-inner span {
                color: #000000;
                font-weight: 300;
            }
            .content.visible p a{
                color: red;
                position: absolute;
                bottom: 5px;
                left: 0px;
                font-size: 15px;
                transition: all .4s ease-in-out;
            }
            .content.visible p a:hover{
                text-decoration: underline;
            }
            .tabs .content.visible .content-inner {
                overflow: auto;
                padding: 10px 10px 10px 5px;
                width: 100%;
                height: 94%;
            }
            .tabs .content.visible {
                padding: 10px 0px;
                width: 100%;
                /*overflow: auto;*/
                opacity: 1;
            }
        </style>
        <div class="container main">
            <h1 class="main-title"><?php echo the_title();?></h1>
            <div class="tabs">
                <div class="row">
                    <div class="col-md-4 col-lg-4 tab_wrapper">
                        <nav>
                            <a id="hamb">«Гамбургская» (1998-2000)</a>
                            <a id="inLight">«В Свете Его Света» (1993-2003)</a>
                            <a id="eternalTrue">«Вечная Истина» (2003-2008)</a>
                            <a id="infinity">«К Бесконечности» (2004-2016)</a>
                            <a id="vivaldi">«Вивальди» (2003-2019)</a>
                        </nav>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="content">
                            <div class="content-inner">
                                <?php $post = get_post(122);
                                echo $post->post_content; ?>
                            </div>
                            <p><a href="/<?php echo $post->post_name; ?>"><b>Перейти к просмотру</b></a></p>
                        </div>
                        <div class="content">
                            <div class="content-inner">
                                <?php $post = get_post(150);
                                echo $post->post_content; ?>
                            </div>
                            <p><a href="/<?php echo $post->post_name; ?>"><b>Перейти к просмотру</b></a></p>
                        </div>
                        <div class="content">
                            <div class="content-inner">
                                <?php $post = get_post(152);
                                echo $post->post_content; ?>
                            </div>
                            <p><a href="/<?php echo $post->post_name; ?>"><b>Перейти к просмотру</b></a></p>
                        </div>
                        <div class="content">
                            <div class="content-inner">
                                <?php $post = get_post(155);
                                echo $post->post_content; ?>
                            </div>
                            <p><a href="/<?php echo $post->post_name; ?>"><b>Перейти к просмотру</b></a></p>
                        </div>
                        <div class="content">
                            <div class="content-inner">
                            <?php $post = get_post(50);
                            echo $post->post_content; ?>
                            </div>
                            <p><a href="/<?php echo $post->post_name; ?>"><b>Перейти к просмотру</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  } else { ?>
    <div class="container main">
        <?php echo the_title();?>
        <br><br>
        любая другая страница
        <?php the_post();
        echo the_content();?>
    </div>
    <?php } ?>
<?php
get_footer();
?>
<script>
    $(document).ready(function() {
        $('.centered').fadeIn(2000);
        // $('header.header').remove()
        // $('footer.footer').remove()

        //collect tabs
        jQuery(function() {
            $('.tabs nav a').on('click', function() {
                show_content($(this).index());
            });
            show_content(0);
            function show_content(index) {
                $('.tabs .content.visible').removeClass('visible');
                $('.tabs .content:nth-of-type(' + (index + 1) + ')').addClass('visible');

                $('.tabs nav a.selected').removeClass('selected');
                $('.tabs nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
            }
        });
    });
</script>
