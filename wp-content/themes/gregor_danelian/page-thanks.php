<?php
	/*Template Name: Thanks*/
	get_header();
?>
  <section class="thanks-page__main" id="main">  
    <div class="thanks-page">
        <div class="thanks-page__wrapp">
            <div class="thanks-page__title">
                <?php the_title() ?>
            </div>
          <!--  <div class="thanks-page__text">
            	<?php
            		while (have_posts()) : the_post();
            			the_content();
            		endwhile;
            	?>
            </div>    -->
            <div class="thanks-page__btn"><a href="<?php echo home_url() ?>" class="btn"><?php echo __('Вернуться на сайт', 'gersis') ?></a></div>
        </div>
        <div class="thanks-page__pic">
            <img class="lazy"
            src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
            data-src="<?php echo TEMPLATE_URL ?>/img/@1x/support-pic.png"
            data-srcset="<?php echo TEMPLATE_URL ?>/img/@1x/support-pic.png 1x, <?php echo TEMPLATE_URL ?>/img/@2x/support-pic.png 2x" alt="">
        </div>
    </div>
    </section>

    <?php
		$lang = pll_current_language();
		switch ($lang) {
			case 'ge': {
				$option = 'option_ge';
				break;
			}
			case 'en': {
				$option = 'option_en'; 
				break;
			}
			default: {
				$option = 'option';
				break;
			}
		}


		$addresses = get_field('addresses', $option);
		switch ($lang) {
			case 'ge': {
				$office = $addresses['tbilisi'];
				break;
			}
			case 'en': {
				$office = $addresses['dover'];
				break;
			}
			default: {
				$office = $addresses['minsk'];
				break;
			}
		}
	?>
	<footer class="footer_thank">
		<div class="container">
			<div class="footer__wrapp wow fadeInLeft">
				<div class="footer__logo__thank"><a  class="header__logo wow fadeInDown" href="#main">
				<img src="/wp-content/themes/gersis/img/LOGO1.svg" alt="vector">
			</a>
				</div>
				<p class="footer__logo-subtitle wow fadeInLeft">
				<?php the_field('footer_sentence', $option) ?></p>
				
				
				<!--NUMBERS-->
				
			</div>
			<div class="numbers__wrapp wow fadeInRight">
					<a href="#" class="numbers_1"><span>
					<?php the_field('skype', $option) ?></span></a>
					
					
					<a href="tel:+375 (29) 637-79-77" class="numbers_2"><span>
					<?php the_field('number', $option) ?></span></a>
					
					<a href="mailto:<?php the_field('email', $option) ?>" class="numbers_3"><span> 
					<?php the_field('email', $option) ?></span></a>
				</div>
				
			<?php
				$addreses = get_field('addresses', $option);

			?> 
			<div class="footer__wrapp wow fadeInUp">
			
			</div>
			<div class="footer__copy wow fadeInLeft">
				Copyright © 2020. Gersis Sofware <a href="#"><?php echo __('Privacy Policy', 'gersis') ?>.</a>
			</div>
		</div>
	</footer>
	<?php wp_footer() ?>

<!--?php
	get_footer();
?--> 