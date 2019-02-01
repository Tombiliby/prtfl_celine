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
								<div class="workZone js-modal-video" data-video-id="<?php the_field("vimeo_id"); ?>">
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
								<div class="workZone js-modal-video" data-video-id="<?php the_field("vimeo_id"); ?>">
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

				</div>
				<div class="footerZone">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 summaryZone">
								<div class="titleZone">
									<h3 class="h3">CELINE TRICART</h3>
								</div>
								<div class="bodyZone">
									<p>Ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
									<p>msan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio dmsan et iusto odio d</p>
								</div>
	
							</div>
							<div class="col-lg-2"></div>
							<div class="col-lg-5 contactFormZone">
								<div class="titleZone">
									<h3 id="scn_contact" class="h3">CONTACT</h3>
								</div>
								<div class="contactForm">
									<form action="">
										<div class="form-group">
											<label for="ipt_mailAdress">Email address</label>
											<input type="email" class="form-control" id="ipt_mailAdress" placeholder="name@example.com">
										</div>
										<div class="form-group">
											<label for="txt_message">Message</label>
											<textarea id="txt_message" rows="5" class="form-control"></textarea>
										</div>
										<div class="formButtonZone">
											<div class="d-flex">
												<div class="p-2 w-100"></div>
												<div class="p-2">
													<button type="submit" class="btn btn-light">SEND</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>