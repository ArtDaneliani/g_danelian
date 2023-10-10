<footer class="footer">
    <div class="footer__cop">
         ©  Gregor Danelian <?php echo date('Y'); ?>
    </div>
</footer>
	<?php wp_footer() ?>
<!--<script src="/wp-content/themes/gregor_danelian/js/jquery.flexslider-min.js"></script>-->
<script type="text/javascript">
	$(document).ready(function(){
	  // $('.flexslider').flexslider({
		// animation: "slide",    //"fade"
		// animationLoop: false,
		// slideshow: false,
		// touch: true,
		// directionNav: false,
		// controlNav: true,
		//
	  // });

        var pos = $('.header').offset().top;
        var nav = $('nav.navbar');

        $(window).scroll(function () {
            if ($(this).scrollTop() > pos) {
                nav.css({'position':'fixed', 'width':'100%', 'background-color':'#121515f2'});
            } else {
                nav.css({'position':'relative', 'background':'#121515'});
            }
        });
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="/wp-content/themes/gregor_danelian/bootstrap/js/bootstrap.js"></script>

</body>
</html>