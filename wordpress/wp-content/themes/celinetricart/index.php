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
				<div class="landingVideoZone">
					<div class="mainTitleZone">
						<h1 class="h1 mainTitle">
							<div class="nameTitle">CELINE TRICART</div>
							<span class="mainSubTitle">FILM - DOCUMENTARY - COMMERCIALS - VR/AR/XR</span>
						</h1>
					</div>
					<div class="landingVideo" style="background:#fff">
						<video autoplay muted loop id="mainVideo">
							<source src="files/celine-tricart-directors-reel.mp4" type="video/mp4">
						</video>
					</div>
					<div class="arrowLandingZone">
						<a href="#scn_director" class="arrowLanding scrollToTarget">
							<img class="imgArrowLanding" src="files/arrow-2.png" alt="">
						</a>
					</div>
				</div>
				<div class="container worksListZone">
					<h2 id="scn_director" class="h2 text-center titleSection">DIRECTOR</h2>
					<div class="row">
						<div class="col">
							<a href="#" class="workZone">
								<div class="workNameZone">
									<h3 class="workName dark">THE <br> SUN <br> LADIES</h3>
								</div>
								<div class="pictureZone">
									<img src="files/image_1.jpg" alt="work" class="picture">
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="workZone">
								<div class="workNameZone">
									<h3 class="workName light">COFEE <br> BREAKS</h3>
								</div>
								<div class="pictureZone">
									<img src="files/image_2.jpg" alt="work" class="picture">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="workZone">
								<div class="workNameZone">
									<h3 class="workName light">LOREM <br> IPSUM <br> DOLOR</h3>
								</div>
								<div class="pictureZone">
									<img src="files/image_3.jpg" alt="work" class="picture">
								</div>
							</div>
						</div>
					</div>

					<h2 id="scn_cinematographer" class="h2 text-center titleSection">CINEMATOGRAPHER</h2>

					<div class="row">
						<div class="col">
							<div class="workZone">
								<div class="workNameZone">
										<h3 class="workName light">LOREM <br> IPSUM <br> DOLOR</h3>
								</div>
								<div class="pictureZone">
									<img src="files/image_4.jpg" alt="work" class="picture">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="workZone">
								<div class="workNameZone">
									<h3 class="workName light">IPS <br> DOLOR</h3>
								</div>
								<div class="pictureZone">
									<img src="files/image_5.jpg" alt="work" class="picture">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="workZone">
								<div class="workNameZone">
									<h3 class="workName light">IPS <br> DOLOR</h3>
								</div>
								<div class="pictureZone">
									<img src="files/image_6.jpg" alt="work" class="picture">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footerZone">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 summaryZone">
								<div class="titleZone">
									<h3 id="scn_about" class="h3">CELINE TRICART</h3>
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