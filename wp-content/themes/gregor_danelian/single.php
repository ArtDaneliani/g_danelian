<?php 

get_header('in');

?>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="bread_crumb"><?php the_breadcrumb() ?></div>
            <h1 class="headline_inner"><?php echo the_title(); ?></h1>
            <div class="description_inner"><?php echo the_content(); ?></div>
                
                
                <!--section class="step_dev_mob">
                    <div class="accordeon">
                  <div class="accordeon-title">
                    Заголовок 1
                  </div>
                  <div class="accordeon-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime.
                    Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
                  </div>
                  <div class="accordeon-title">
                    Заголовок 2
                  </div>
                  <div class="accordeon-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime.
                    Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
                  </div>
                  <div class="accordeon-title">
                    Заголовок 2
                  </div>
                  <div class="accordeon-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime.
                    Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
                  </div>
                </div>
                </section-->
                
                
        </div>
            <div class="col-lg-4 col-md-4 col-12 right">
                <nav class="nav_inner">
                    
                   <!-- <?php 
                      $args = array(
                    	'depth'        => 0,
                    	'include'      => '206,228,230,232',
                    	'title_li'     => __(''),  //'Pages'
                    	'post_type'    => 'page',
                    ); 
                    wp_list_pages( $args );
                    ?>  -->
                    
                    
                    <ul>
                        <li>Разработка сайта</li>
                         <li>Техническая поддержка</li>
                         <li>Администрирование</li>
                         <li>Продвижение в Интернете</li>
                    </ul>
                </nav>
                <hr class="hr_dashed">
                <!--div style="display: flex;justify-content: center;"><button class="btn_reserv"> Заказать услугу</button></div-->
            </div>
            
        
    
    </div>
</div>

<?php 
get_footer();
?>