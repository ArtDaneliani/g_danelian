<?php
/*Template Name: catalog*/
get_header();
the_post();
?>
        <div class="container main">

<?php if (has_category(8)) { //Проверяем, принадлежит ли запись к рубрике "ЖИВОПИСЬ" ?>
<!----------------------------------ЖИВОПИСЬ ----------------------------------------->
            <h1 class="main-title"><?php echo the_title();?></h1>
            <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <?php echo the_content();?>
                    </div>
                    <div class="col-md-9 col-lg-9">
                            <?php echo do_shortcode( '[visual_portfolio id="56"]' ); ?>
                    </div>
            </div>
<?php } else if (has_category(10)) { //Проверяем, принадлежит ли запись к рубрике "ГРАФИКА"  ?>
<!----------------------------------ГРАФИКА ----------------------------------------->
            <h1 class="main-title"><?php echo the_title();?></h1>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <?php echo the_content();?>
                </div>
                <div class="col-md-9 col-lg-9">
                    <?php echo do_shortcode( '[visual_portfolio id="87"]' ); ?>
                </div>
            </div>
<?php } else if (has_category(18)) { //Проверяем, принадлежит ли запись к рубрике "КОЛЛАЖИ"  ?>
    <!----------------------------------КОЛЛАЖИ ----------------------------------------->
            <h1 class="main-title"><?php echo the_title();?></h1>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <?php echo the_content();?>
                </div>
                <div class="col-md-9 col-lg-9">
<!--                    --><?php //echo do_shortcode( '[visual_portfolio id="56"]' ); ?>
                </div>
            </div>
<?php } else if (has_category(21)) { //Проверяем, принадлежит ли запись к рубрике "Коллекции"  ?>
    <!----------------------------------Коллекции ----------------------------------------->
    <?php $post = get_post();
     if ($post->ID == 50 ) { //vivaldi?>
            <h1 class="main-title"><?php echo the_title();?></h1>
            <div class="row">
<!--                <div class="col-md-3 col-lg-3">-->
<!--                    --><?php //echo the_content();?>
<!--                </div>-->
                <div class="col-md-12 col-lg-12">
                    <?php echo do_shortcode( '[visual_portfolio id="111"]' ); ?>
                </div>
            </div>
     <?php } else if($post->ID == 150) { //in the light of his light?>
             <h1 class="main-title"><?php echo the_title();?></h1>
             <div class="row">
<!--                 <div class="col-md-3 col-lg-3">-->
<!--                     --><?php //echo the_content();?>
<!--                 </div>-->
                 <div class="col-md-12 col-lg-12">
                     <?php echo do_shortcode( '[visual_portfolio id="163"]' ); ?>
                 </div>
             </div>
    <?php } else if($post->ID == 122) { //hamburg?>
             <h1 class="main-title"><?php echo the_title();?></h1>
             <div class="row">
<!--                 <div class="col-md-3 col-lg-3">-->
<!--                     --><?php //echo the_content();?>
<!--                 </div>-->
                 <div class="col-md-12 col-lg-12">
                     <?php echo do_shortcode( '[visual_portfolio id="106"]' ); ?>
                 </div>
             </div>
    <?php } else if($post->ID == 155) { //infinity?>
             <h1 class="main-title"><?php echo the_title();?></h1>
             <div class="row">
<!--                 <div class="col-md-3 col-lg-3">-->
<!--                     --><?php //echo the_content();?>
<!--                 </div>-->
                 <div class="col-md-12 col-lg-12">
                     <?php echo do_shortcode( '[visual_portfolio id="185"]' ); ?>
                 </div>
             </div>
    <?php } else if($post->ID == 152) { //true eternal?>
     <h1 class="main-title"><?php echo the_title();?></h1>
     <div class="row">
<!--         <div class="col-md-3 col-lg-3">-->
<!--             --><?php //echo the_content();?>
<!--         </div>-->
         <div class="col-md-12 col-lg-12">
             <?php echo do_shortcode( '[visual_portfolio id="179"]' ); ?>
         </div>
     </div>
     <?php }  ?>
<?php } else {                                      //Иначе выводим шаблон для всех рубрик   ?>
    <!----------------------------------ВСЕ ЗАПИСИ БЕЗ КОНКРЕТНЫХ РУБРИК ----------------->
            <h2>ВСЕ ЗАПИСИ БЕЗ РУБРИК  catalog.php</h2>
            <div class="row">
                    <div class="col-md-4 col-lg-4">
                        
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <?php echo the_content();?>
                    </div>
            </div>
    <?php //echo do_shortcode( '[visual_portfolio id="64"]' ); ?>
<?php } ?>
      </div>

<?php
get_footer();
?>
