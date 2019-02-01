
        <script src="<?php echo get_bloginfo('template_directory'); ?>/static/dist/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/static/dist/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/static/dist/fontawesome-pro/js/all.min.js"></script>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/static/dist/js/modal-video.min.js"></script>

		<script>
			app = {};
		</script>

		<script>
			$('body').on({
				'touchmove': function(e) { 
					console.log($(this).scrollTop()); // Replace this with your code.

						$("#console").html($(this).scrollTop());
				}
			});
			$(document).on({
				'scroll': function(e) { 
					console.log("scroll" + $(this).scrollTop()); // Replace this with your code.

						$("#console").html("scroll" + $(this).scrollTop());
				}
			});

			function scrollToAnchor(tgt){
			    var target = $(tgt);
			    $('html,body').animate({scrollTop: target.offset().top},'slow');
			}

			$(".scrollToTarget").click(function() {
				var lnk = $(this).attr("href");
			   scrollToAnchor(lnk);
			});

            window.addEventListener('DOMContentLoaded',function(){	
                new ModalVideo('.js-modal-video', {channel: 'vimeo'});
            });
		</script>

		<?php wp_footer(); ?>
		
	</body>
</html>
