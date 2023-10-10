<?php
get_header();
?>
<body>
<style>
    footer.footer,
    header.header{
        display:none !important;
    }
    .centered a {
        height: 100%;
        width: 100%;
        display: inherit;
    }
    .centered a:hover {
        cursor: pointer;
    }
    @media (max-width: 991px) {
        /* HOME PAGE */
        .split {
          height: 50% !important;
          width: 100% !important;
          top: unset !important;
        }
        .left {
            top: 0 !important;
        }
        .right {
            bottom:0 !important;
        }
        .centered img {
            width: 150px !important;
            height: unset !important;
        }
        h1 {
            font-size: 15px !important;
            font-weight: 500 !important;
            letter-spacing: 0.1rem !important;
        }
        .left a h2,
        .right a h2 {
            font-size: 13px !important;
            font-weight: 300 !important;
        }
        .centered a {
            height: 100%;
            width: 100%;
            display: inherit;
        }
        .centered a:hover {
            cursor: pointer;
        }
    }
</style>
    <div class="split left" id="main_left">
        <div class="centered">
            <a href="<?php echo home_url() ?>/catalog">
                <img src="/wp-content/themes/gregor_danelian/img/catalog/SP1.jpg" alt="img">
                <h1 style="letter-spacing: 0.25rem;">Грегор Данелян</h1>
                <h2>Каталог</h2>
            </a>
        </div>
    </div>
    <div class="split right" id="main_right">
        <div class="centered">
            <a href="<?php echo home_url() ?>/about">
                <img src="/wp-content/themes/gregor_danelian/img/about/self-portrait.jpg" alt="img">
                <h1 style="letter-spacing: 0.25rem;">Грегор Данелян</h1>
                <h2>О художнике</h2>
            </a>
        </div>
    </div>
<?php
get_footer();
?>
<script>
    $(document).ready(function() {
        $('.centered').fadeIn(2000);
        $('header.header').remove()
        $('footer.footer').remove()
    })
</script>