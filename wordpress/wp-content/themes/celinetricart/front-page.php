	<?php get_header(); ?>

		<div class="contentSite">
			<div class="contentZone">
				<div class="headerZone">
					<div class="navbarZone">
						<nav class="navbar navbar-expand-lg flex-row-reverse mainNavbar">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link scrollToTarget" href="#scn_director">DIRECTOR</a>
									</li>
									<li class="nav-item">
										<a class="nav-link scrollToTarget" href="#scn_cinematographer">CINEMATOGRAPHER</a>
									</li>
									<li class="nav-item">
										<a class="nav-link scrollToTarget" href="#scn_about">ABOUT</a>
									</li>
									<li class="nav-item">
										<a class="nav-link scrollToTarget" href="#scn_contact">CONTACT</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
                <?php if(!function_exists("get_field")) return; ?>
				<div class="landingVideoZone">
					<div class="mainTitleZone">
						<h1 class="h1 mainTitle">
							<div class="nameTitle"><?php the_field("main_title"); ?></div>
							<span class="mainSubTitle"><?php the_field("main_subtitle"); ?></span>
						</h1>
					</div>
					<div class="landingVideo" style="background:#fff">
						<video autoplay muted loop id="mainVideo">
							<source src="<?php the_field("video"); ?>" type="video/mp4">
						</video>
					</div>
					<div class="arrowLandingZone">
						<a href="#scn_director" class="arrowLanding scrollToTarget">
							<img class="imgArrowLanding" src="<?php echo get_bloginfo('template_directory'); ?>/static/dist/img/arrow-2.png" alt="">
						</a>
					</div>
				</div>
				<div class="container worksListZone">
					<!-- Director -->                    
					<?php 
						query_posts(array( 
							'post_type' => 'work',
							'showposts' => 10,
							'cat'=> 3
						) );  
					?>
					<?php if (have_posts()): ?>
						<h2 id="scn_director" class="h2 text-center titleSection">DIRECTOR</h2>
					<?php endif; ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col">
								<div class="workZone <?php the_field("hebergement_video"); ?>" data-video-id="<?php the_field("video_id"); ?>">
									<div class="workNameZone">
										<h3 class="workName <?php the_field("color"); ?>">
											<?php the_field("titre"); ?>
										</h3>
									</div>
									<div class="pictureZone">
										<img src="<?php the_field("image"); ?>" alt="work" class="picture">
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;?>
					<?php
						// Reset Query
						wp_reset_query();
					?>
					<!-- Cinematographer -->
					<?php 
						query_posts(array( 
							'post_type' => 'work',
							'showposts' => 10,
							'cat'=> 4
						) );  
					?>
					<?php if (have_posts()): ?>
						<h2 id="scn_cinematographer" class="h2 text-center titleSection">CINEMATOGRAPHER</h2>
					<?php endif; ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col">
								<div class="workZone <?php the_field("hebergement_video"); ?>" data-video-id="<?php the_field("video_id"); ?>">
									<div class="workNameZone">
										<h3 class="workName <?php the_field("color"); ?>">
											<?php the_field("titre"); ?>
										</h3>
									</div>
									<div class="pictureZone">
										<img src="<?php the_field("image"); ?>" alt="work" class="picture">
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;?>
					<?php
						// Reset Query
						wp_reset_query();
					?>
				</div>
				<div class="footerZone">
					<div class="container">
						<div class="row">
							<?php if(!function_exists("get_field")) return; ?>
							<div class="col-lg-5 summaryZone">
								<div class="titleZone">
									<h3 id="scn_about" class="h3"><?php the_field("main_title"); ?></h3>
								</div>
								<div class="bodyZone">
									<?php the_field("about"); ?>
								</div>
	
							</div>
							<div class="col-lg-2"></div>
							<div class="col-lg-5 contactFormZone">
								<div class="titleZone">
									<h3 id="scn_contact" class="h3">CONTACT</h3>
								</div>
								<div class="contactForm">
									<?php echo do_shortcode( '[contact-form-7 id="174" title="contact"]' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>