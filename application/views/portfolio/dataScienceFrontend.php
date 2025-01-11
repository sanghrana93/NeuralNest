<?php $this->load->view('layouts/link.php'); ?>

	<body>
		<div class="main-page-wrapper">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- ===================================================
				Loading Transition
			==================================================== -->

			<?php $this->load->view('layouts/loader.php'); ?>
			
			<!-- 
			=============================================
				Search
			============================================== 
			-->
		<div class="offcanvas offcanvas-top theme-search-form bg-three justify-content-center" tabindex="-1"
			id="offcanvasTop">
			<button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="bi bi-x-lg"></i>
			</button>
			<div class="form-wrapper">
				<form action="#">
					<input type="text" placeholder="Search Keyword....">
				</form>
			</div> <!-- /.form-wrapper -->
		</div>
		<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
		<?php $this->load->view('layouts/header.php'); ?>
		<!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->

			<?php if (!empty($dataScienceRecords)) { ?>
				<?php foreach ($dataScienceRecords as $record) { ?>
			
			<div class="hero-banner-one">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-7">

							<!-- <a href="pricing.html" class="slogan"><strong>Offer</strong> is going on till friday, $1.99/mo. <i class="fas fa-chevron-right"></i></a> -->
							<h1 class="hero-heading"><?php echo htmlspecialchars($record->banner_title); ?></h1>
							<p class="text-lg mb-60 lg-mb-40"><?php echo htmlspecialchars($record->banner_content); ?></p>
							<ul class="style-none button-group d-lg-flex align-items-center">
								<li class="me-4"><a href="<?php echo base_url(); ?>productAndSolutions" class="btn-one ripple-btn">Request for Demo</a></li>
								<!-- <li class="help-btn">Need any help? <a href="contact-us.html">Contact us</a></li> -->
							</ul>
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="illustration-holder">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01.svg" alt="" class="main-illustration ms-auto">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/bg_01.png" alt="" class="shapes bg-shape">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_1.svg" alt="" class="shapes shape-one">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_2.svg" alt="" class="shapes shape-two">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_3.svg" alt="" class="shapes shape-three">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_4.svg" alt="" class="shapes shape-four">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_5.svg" alt="" class="shapes shape-five">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_6.svg" alt="" class="shapes shape-six">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_01_7.svg" alt="" class="shapes shape-seven">
					<div class="card-one shapes">
						<div class="icon"><i class="bi bi-check-lg"></i></div>
						<h6>Data Automation <br>Solution.</h6>
						<span class="info">faster process</span>
					</div> <!-- /.card-one -->
					<div class="card-two shapes">
						<div class="icon"><i class="bi bi-check-lg"></i></div>
						<h6>Data Quality Audit</h6>
					</div> <!-- /.card-two -->
				</div> <!-- /.illustration-holder -->
			</div> <!-- /.hero-banner-one -->

			


			<!-- 
			=============================================
				Feature Section One
			============================================== 
			-->
			<div class="fancy-feature-one position-relative mt-225 xl-mt-200 lg-mt-150">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-4">
							<div class="title-style-one">
								<div class="sc-title">Services</div>
								<h2 class="main-title"><?php echo htmlspecialchars($record->services_title); ?></h2>
							</div> <!-- /.title-style-one -->
							<p class="sub-heading mt-25 mb-50 md-mb-20"><?php echo htmlspecialchars($record->services_content); ?></p>
							<!-- <div class="btn-three">For more details. <a href="service-V2.html">Click here <i class="fas fa-chevron-right"></i></a></div> -->
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="slider-wrapper">
					<div class="service_slider_one">
						<div class="item">
							<div class="block-style-one text-center">
								<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_02.svg" alt="" class="m-auto"></div>
								<h5 class="mb-40"><?php echo htmlspecialchars($record->s1_title); ?></h5>
								<p><?php echo htmlspecialchars($record->s1_content); ?></p>
								<!-- <a href="service-details-V1.html" class="btn-two">Learn more <i class="fas fa-chevron-right"></i></a> -->
							</div> <!-- /.block-style-one -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="block-style-one text-center">
								<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_03.svg" alt="" class="m-auto"></div>
								<h5 class="mb-40"><?php echo htmlspecialchars($record->s2_title); ?></h5>
								<p><?php echo htmlspecialchars($record->s2_content); ?></p>
								<!-- <a href="service-details-V1.html" class="btn-two">Learn more <i class="fas fa-chevron-right"></i></a> -->
							</div> <!-- /.block-style-one -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="block-style-one text-center">
								<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_04.svg" alt="" class="m-auto"></div>
								<h5 class="mb-40"><?php echo htmlspecialchars($record->s3_title); ?></h5>
								<p><?php echo htmlspecialchars($record->s3_content); ?></p>
								<!-- <a href="service-details-V1.html" class="btn-two">Learn more <i class="fas fa-chevron-right"></i></a> -->
							</div> <!-- /.block-style-one -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="block-style-one text-center">
								<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_03.svg" alt="" class="m-auto"></div>
								<h5 class="mb-40"><?php echo htmlspecialchars($record->s4_title); ?></h5>
								<p><?php echo htmlspecialchars($record->s4_content); ?></p>
								<!-- <a href="service-details-V1.html" class="b	tn-two">Learn more <i class="fas fa-chevron-right"></i></a> -->
							</div> <!-- /.block-style-one -->
						</div> <!-- /.item -->
					</div>
				</div> <!-- /.slider-wrapper -->
			</div> <!-- /.fancy-feature-one -->
			


			<!-- 
			=============================================
				Feature Section Two
			============================================== 
			-->
			<div class="fancy-feature-two position-relative mt-200 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-7 ms-auto">
							<div class="block-style-two" data-aos="fade-left">
								<div class="title-style-one">
									<div class="sc-title">Over 150k+ Client</div>
									<h2 class="main-title"><?php echo htmlspecialchars($record->conent_title); ?></h2>
								</div> <!-- /.title-style-one -->
								<p class="pt-10 pb-20 lg-pb-10">
								<?php echo htmlspecialchars($record->content_content); ?>
								</p>
								<!-- <ul class="style-none list-item">
									<li>Various analysis options.</li>
									<li>Page Load (time, size, number of requests).</li>
									<li>Big data analysis.</li>
								</ul> -->
								<!-- <div class="btn-three mt-45 lg-mt-30">Want to learn more about us? <a href="about-us1.html">Click here <i class="fas fa-chevron-right"></i></a></div> -->
							</div> <!-- /.block-style-two -->
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="illustration-holder sm-mt-20">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02.svg" alt="" class="main-illustration w-100">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_1.svg" alt="" class="shapes shape-one">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_1.svg" alt="" class="shapes shape-two">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_1.svg" alt="" class="shapes shape-three">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_2.svg" alt="" class="shapes shape-four" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="1500">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_2.svg" alt="" class="shapes shape-five" data-aos="fade-down" data-aos-anchor=".fancy-feature-two" data-aos-delay="200" data-aos-duration="1500">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_3.svg" alt="" class="shapes shape-six" data-aos="fade-down" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="1500">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_02_4.svg" alt="" class="shapes shape-seven" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="250" data-aos-duration="1500">
				</div> <!-- /.illustration-holder -->
			</div> <!-- /.fancy-feature-two -->




			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one mt-150 md-mt-80">
				<div class="container">
					<div class="inner-container">
						<div class="row justify-content-center">
							<div class="col-md-4 col-sm-6" data-aos="fade-up">
								<div class="counter-block-one text-center mb-20">
									<div class="main-count"><span class="counter"><?php echo htmlspecialchars($record->card1_title); ?></span>mil</div>
									<p><?php echo htmlspecialchars($record->card1_content); ?></p>
								</div> <!-- /.counter-block-one -->
							</div>
							<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
								<div class="counter-block-one text-center mb-20">
									<div class="main-count"><span class="counter"><?php echo htmlspecialchars($record->card2_title); ?></span>b+</div>
									<p><?php echo htmlspecialchars($record->card2_content); ?></p>
								</div> <!-- /.counter-block-one -->
							</div>
							<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
								<div class="counter-block-one text-center mb-20">
									<div class="main-count">$<span class="counter"><?php echo htmlspecialchars($record->card3_title); ?></span>mil+</div>
									<p><?php echo htmlspecialchars($record->card3_content); ?></p>
								</div> <!-- /.counter-block-one -->
							</div>
						</div>
					</div> <!-- /.inner-container -->
				</div>
			</div> <!-- /.counter-section-one -->



			<!-- 
			=============================================
				Feature Section Three
			============================================== 
			-->
			<div class="fancy-feature-three position-relative">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 col-md-6">
							<div class="block-style-two pe-xxl-5" data-aos="fade-right">
								<div class="title-style-one">
									<div class="sc-title">Working Process</div>
									<h2 class="main-title"><?php echo htmlspecialchars($record->workprocess_title); ?></h2>
								</div> <!-- /.title-style-one -->
								<p class="pt-20 pb-30 lg-pb-10"><?php echo htmlspecialchars($record->workprocess_content); ?></p>
								<!-- <div class="btn-three">Want to learn more about us? <a href="about-us1.html">Click here <i class="fas fa-chevron-right"></i></a></div> -->
							</div> <!-- /.block-style-two -->
						</div>
						<div class="col-xl-6 col-lg-7 col-md-6 ms-auto text-end">
							<div class="illustration-holder position-relative d-inline-block sm-mt-50">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03.svg" alt="" class="main-illustration w-100">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03_1.svg" alt="" class="shapes shape-one">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03_2.svg" alt="" class="shapes shape-two">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03_2.svg" alt="" class="shapes shape-three">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03_4.svg" alt="" class="shapes shape-four">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03_3.svg" alt="" class="shapes shape-five" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_03_3.svg" alt="" class="shapes shape-six" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500">
							</div> <!-- /.illustration-holder -->
						</div>
					</div>
				</div> <!-- /.container -->
				
				<!-- <div class="mt-100 lg-mt-70">
					<div class="container">
						<div class="row justify-content-center gx-xxl-5">
							<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
								<div class="block-style-three mb-25">
									<div class="numb">1</div>
									<h6>Data Automation Solution.</h6>
									<p>Learn content by interacting quis expert lesson a video.</p>
								</div> 
							</div>
							<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="150">
								<div class="block-style-three mb-25">
									<div class="numb">2</div>
									<h6>Analytics Business.</h6>
									<p>Practice what you realistic SAT test questions.</p>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
								<div class="block-style-three mb-25">
									<div class="numb">3</div>
									<h6>A New Breed Of AI.</h6>
									<p>Review your practice and learn how to improve.</p>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>  -->


			<!--
			=====================================================
				Portfolio Gallery One
			=====================================================
			-->
			<!-- <div class="portfolio-gallery-one mt-150 lg-mt-110" data-aos="fade-up">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 col-md-7 col-sm-8">
							<div class="title-style-one text-center text-sm-start xs-pb-20">
								<h2 class="main-title">Check Some of Our Recent Work.</h2>
							</div> 
						</div>
						<div class="col-xl-6 col-lg-7 col-md-5 col-sm-4 ms-auto d-flex justify-content-center justify-content-sm-end">
							<ul class="slider-arrows slick-arrow-one d-flex style-none">
								<li class="prev_p1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
								<li class="next_p1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
							</ul>
						</div>
					</div>

					<div class="slider-wrapper">
						<div class="portfolio_slider_one">
							<div class="item">
								<div class="portfolio-block-one">
									<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_01.jpg" alt="" class="w-100"></div>
									<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
										<span class="tag">Data Research</span>
										<span class="pj-name">Product Analysis</span>
									</a>
									<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_01.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
								</div> 
							</div> 

							<div class="item">
								<div class="portfolio-block-one">
									<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_02.jpg" alt="" class="w-100"></div>
									<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
										<span class="tag">Design</span>
										<span class="pj-name">UI, UX Design</span>
									</a>
									<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_02.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
								</div> 
							</div> 

							<div class="item">
								<div class="portfolio-block-one">
									<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_03.jpg" alt="" class="w-100"></div>
									<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
										<span class="tag">Marketing</span>
										<span class="pj-name">Content Marketing</span>
									</a>
									<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_03.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
								</div> 
							</div> 

							<div class="item">
								<div class="portfolio-block-one">
									<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_04.jpg" alt="" class="w-100"></div>
									<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
										<span class="tag">Development</span>
										<span class="pj-name">Market System</span>
									</a>
									<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_04.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
								</div> 
							</div> 

							<div class="item">
								<div class="portfolio-block-one">
									<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_05.jpg" alt="" class="w-100"></div>
									<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
										<span class="tag">Marketing</span>
										<span class="pj-name">Content Marketing</span>
									</a>
									<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_05.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
								</div> 
							</div> 
						</div>
					</div> 
				</div>
			</div>  -->



			<!--
			=====================================================
				Pricing Section One
			=====================================================
			-->
			<!-- <div class="pricing-section-one mt-150 lg-mt-110">
				<div class="container" data-aos="fade-up">
					<div class="row">
						<div class="col-xxl-7 col-xl-8 col-lg-7 col-md-9 m-auto">
							<div class="title-style-one text-center">
								<h2 class="main-title">Solo, Agency or Team? We’ve got you Covered</h2>
							</div> 
						</div>
					</div>

					<ul class="nav nav-tabs justify-content-center pricing-nav-one" role="tablist">
				  		<li class="nav-item" role="presentation">
				  			<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab">Monthly</button>
				  		</li>
				  		<li class="nav-item" role="presentation">
				  			<button class="nav-link" data-bs-toggle="tab" data-bs-target="#year" type="button" role="tab">Yearly</button>
				  		</li>
					</ul>
				</div> 

				<div class="pricing-table-area-one" data-aos="fade-up" data-aos-delay="100">
					<div class="container">
						<div class="tab-content">
							<div class="tab-pane active show" id="month">
						  		<div class="row gx-xxl-5">
									<div class="col-md-6">
										<div class="pr-table-wrapper active md-mb-30">
											<div class="pack-name">Business</div>
											<div class="pack-details">For individuals and teams. Get <span>1 year <br> premium market access</span></div>
											<div class="top-banner d-sm-flex justify-content-center align-items-center">
												<div class="price"><sup>$</sup>75</div>
												<div>
													<span>Monthly membership</span>
													<em>Starting at $75/mo with </em>
												</div>
											</div> 
											<ul class="pr-feature style-none">
												<li>Unlimited campaigns</li>
												<li>Push Notifications</li>
												<li>Team fundraising</li>
											</ul>
											<a href="pricing.html" class="trial-button">Try us without risk. <span>Choose plan <i class="fas fa-chevron-right"></i></span> </a>
										</div> 
									</div>
									<div class="col-md-6">
										<div class="pr-table-wrapper">
											<div class="pack-name">Agency</div>
											<div class="pack-details">For big agency & teams. Get <span>1 year <br> premium market access</span></div>
											<div class="top-banner d-sm-flex justify-content-center align-items-center">
												<div class="price"><sup>$</sup>99</div>
												<div>
													<span>Monthly membership</span>
													<em>Starting at $99/mo with </em>
												</div>
											</div> 
											<ul class="pr-feature style-none">
												<li>Unlimited campaigns</li>
												<li>Push Notifications</li>
												<li>Team fundraising</li>
											</ul>
											<a href="pricing.html" class="trial-button">Try us without risk. <span>Choose plan <i class="fas fa-chevron-right"></i></span> </a>
										</div> 
									</div>
								</div>
							</div>

							<div class="tab-pane" id="year">
						  		<div class="row gx-xxl-5">
									<div class="col-md-6">
										<div class="pr-table-wrapper active md-mb-30">
											<div class="pack-name">Business</div>
											<div class="pack-details">For individuals and teams. Get <span>2 year <br> premium market access</span></div>
											<div class="top-banner d-sm-flex justify-content-center align-items-center">
												<div class="price"><sup>$</sup>69</div>
												<div>
													<span>Yearly membership</span>
													<em>Starting at $69/mo with </em>
												</div>
											</div> 
											<ul class="pr-feature style-none">
												<li>Unlimited campaigns</li>
												<li>Push Notifications</li>
												<li>Team fundraising</li>
											</ul>
											<a href="pricing.html" class="trial-button">Try us without risk. <span>Choose plan <i class="fas fa-chevron-right"></i></span> </a>
										</div> 
									</div>
									<div class="col-md-6">
										<div class="pr-table-wrapper">
											<div class="pack-name">Agency</div>
											<div class="pack-details">For big agency & teams. Get <span>2 year <br> premium market access</span></div>
											<div class="top-banner d-sm-flex justify-content-center align-items-center">
												<div class="price"><sup>$</sup>97</div>
												<div>
													<span>Yearly membership</span>
													<em>Starting at $97/mo with </em>
												</div>
											</div> 
											<ul class="pr-feature style-none">
												<li>Unlimited campaigns</li>
												<li>Push Notifications</li>
												<li>Team fundraising</li>
											</ul>
											<a href="pricing.html" class="trial-button">Try us without risk. <span>Choose plan <i class="fas fa-chevron-right"></i></span> </a>
										</div> 
									</div>
								</div>
							</div>
						</div> 

						<div class="msg-note mt-80 lg-mt-50" data-aos="fade-up">If you Need any Custom or others Pricing System. <br> Please <a href="contact-us.html">Send Message</a></div>
					</div>
				</div> 
			</div>  -->



			<!--
			=====================================================
				Feedback Slider One
			=====================================================
			-->
			<!-- <div class="feedback-section-one mt-130 lg-mt-100">
				<div class="container">
					<div class="title-style-one text-center" data-aos="fade-up">
						<div class="sc-title">TESTIMONIALS</div>
						<h2 class="main-title">Word from Our Client</h2>
					</div> 
				</div> 
				<div class="inner-content mt-150 lg-mt-80">
					<div class="slider-wrapper">
						<div class="feedback_slider_one">
							<div class="item">
								<div class="feedback-block-one">
									<div class="top-header d-flex align-items-center justify-content-between">
										<div>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-1.png" alt="">
											<ul class="style-none d-flex rating pt-15">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
											</ul>
										</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_05.svg" alt="" width="50">
									</div> 
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<div class="cost"><span>Qulaity & Cost:</span> 5.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
									</div>
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-one">
									<div class="top-header d-flex align-items-center justify-content-between">
										<div>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-2.png" alt="">
											<ul class="style-none d-flex rating pt-15">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
											</ul>
										</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_05.svg" alt="" width="50">
									</div> 
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<div class="cost"><span>Qulaity & Cost:</span> 35.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
									</div>
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-one">
									<div class="top-header d-flex align-items-center justify-content-between">
										<div>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-3.png" alt="">
											<ul class="style-none d-flex rating pt-15">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
											</ul>
										</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_05.svg" alt="" width="50">
									</div> 
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<div class="cost"><span>Qulaity & Cost:</span> 19.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
									</div>
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-one">
									<div class="top-header d-flex align-items-center justify-content-between">
										<div>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-4.png" alt="">
											<ul class="style-none d-flex rating pt-15">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
											</ul>
										</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_05.svg" alt="" width="50">
									</div> 
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<div class="cost"><span>Qulaity & Cost:</span> 15.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
									</div>
								</div> 
							</div>
						</div> 
					</div> 
				</div> 
			</div>  -->



			<!--
			=====================================================
				Partner Section One
			=====================================================
			-->
			<!-- <div class="partner-section-one">
				<div class="container">
					<div class="title-style-one text-center" data-aos="fade-up">
						<div class="sc-title">over 150k+ client</div>
						<h2 class="main-title md">Join 27,000+ companies who’ve reached </h2>
					</div> 

					<div class="row">
						<div class="col-xxl-11 m-auto">
							<ul class="style-none text-center mt-40 lg-mt-10">
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-6.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="100"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-7.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="200"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-8.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="300"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-9.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="400"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-10.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="100"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-11.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="200"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-12.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="300"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-13.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="400"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-14.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div> 
			</div>  -->



			<!--
			=====================================================
				Blog Section One
			=====================================================
			-->
			<!-- <div class="blog-section-one pt-100 pb-140 lg-pt-80 lg-pb-80">
				<div class="container">
					<div class="title-style-one text-center mb-50 lg-mb-20" data-aos="fade-up">
						<div class="sc-title">RECENT NEWS</div>
						<h2 class="main-title">Inside Story & Blog</h2>
					</div> 

					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
							<article class="blog-meta-one tran3s mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_01.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Make more daily productive  working flow like pro.</h5></a>
								</div> 
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<article class="blog-meta-one tran3s mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_02.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">UI/UX Design</a> - 10 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Internet of the things and why it’s becoming important in the century.</h5></a>
								</div> 
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<article class="blog-meta-one tran3s mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_03.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Marketing</a> - 8 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>The power product and the quotient rules.</h5></a>
								</div> 
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-lg-none d-flex" data-aos="fade-up">
							<article class="blog-meta-one tran3s mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_01.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Make more daily productive  working flow like pro.</h5></a>
								</div> 
							</article>
						</div>
					</div>
				</div>
			</div>  -->



			<!--
			=====================================================
				Address Section One
			=====================================================
			-->
			<!-- <div class="address-section-one pt-130 lg-pt-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-7 col-md-9 m-auto">
							<div class="title-style-one text-center mb-50" data-aos="fade-up">
								<div class="sc-title-two">Be a pro with us</div>
								<h2 class="main-title">Get Ready to Started It’s Fast, Free & very easy</h2>
							</div> 
							<div class="text-center" data-aos="fade-up" data-aos-delay="150"><a href="contact-us.html" class="btn-four ripple-btn">Get Started <i class="fas fa-chevron-right"></i></a></div>
						</div>
					</div>

					<div class="inner-content" data-aos="fade-up" data-aos-delay="100">
						<div class="row g-0">
							<div class="col-md-6 d-flex">
								<div class="address-block-one d-flex border-right">
									<div class="icon"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_06.svg" alt=""></div>
									<div class="text-meta">
										<h4 class="title">Our Address</h4>
										<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
									</div> 
								</div> 
							</div>
							<div class="col-md-6 d-flex">
								<div class="address-block-one d-flex">
									<div class="icon"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_07.svg" alt=""></div>
									<div class="text-meta">
										<h4 class="title">Contact Info</h4>
										<p>Open a chat or give us call at <br><a href="#">310.841.5500</a></p>
									</div> 
								</div> 
							</div>
						</div>
					</div>
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/bg_05.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_01.svg" alt="" class="shapes shape-two">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_02.svg" alt="" class="shapes shape-three">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_02.svg" alt="" class="shapes shape-four">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_03.svg" alt="" class="shapes shape-five">
			</div>  -->

			

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="footer-style-one theme-basic-footer">
				<div class="container">
					<div class="inner-wrapper">
						<div class="row">
							<div class="col-lg-3 footer-intro mb-40">
								<div class="logo"><a href="<?php echo base_url(); ?>portfolio"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-03.png" alt="" width="130"></a></div>
								<p>We will assist you in becoming more successful.</p>
								<ul class="d-flex social-icon style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6 mb-30">
								<h5 class="footer-title">Links</h5>
								<ul class="footer-nav-link style-none">
									<li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="about-us2.html">About us</a></li>
									<li><a href="service-V1.html">Service</a></li>
									<li><a href="blog-V1.html">Blog</a></li>
								</ul>
							</div>
							<div class="col-xl-2 col-md-3 col-sm-6 mb-30">
								<h5 class="footer-title">Legal</h5>
								<ul class="footer-nav-link style-none">
									<li><a href="faq.html">Terms of use</a></li>
									<li><a href="faq.html">Terms & conditions</a></li>
									<li><a href="faq.html">Privacy policy</a></li>
									<li><a href="faq.html">Cookie policy</a></li>
								</ul>
							</div>
							<div class="col-xl-5 col-lg-4 col-md-6 mb-30">
								<div class="newsletter ps-xl-5">
									<h5 class="footer-title">Subscribe </h5>
									<p>Join over <span>68,000</span> people getting our emails</p>
									<form action="#">
										<input type="email" placeholder="Enter your email">
										<button>Sign Up</button>
									</form>
									<div class="info">We only send interesting and relevant emails.</div>
								</div> <!-- /.newsletter -->
							</div>
						</div>

						<div class="bottom-footer">
							<div class="d-lg-flex justify-content-between align-items-center">
								<ul class="order-lg-1 pb-15 d-flex justify-content-center footer-nav style-none">
									<li><a href="faq.html">Privacy &amp; Terms.</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
								</ul>
								<p class="copyright text-center order-lg-0 pb-15">Copyright @2024 Neural Nest</p>
							</div>
						</div>
					</div> <!-- /.inner-wrapper -->
				</div>
			</div> <!-- /.footer-style-one -->


			<button class="scroll-top">
				<i class="bi bi-arrow-up-short"></i>
			</button>
			
			<?php } ?>
			<?php } else { ?>
						<tr>
							<td colspan="1" class="text-center">No records found</td>
						</tr>
			<?php } ?>

		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AOS js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/aos-next/dist/aos.js"></script>
		<!-- Slick Slider -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/slick/slick.min.js"></script>
		<!-- js Counter -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/jquery.waypoints.min.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>