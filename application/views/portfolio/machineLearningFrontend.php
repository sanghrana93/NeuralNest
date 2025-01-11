<?php $this->load->view('layouts/link.php'); ?>

	<body>
		<div class="main-page-wrapper">
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
			<?php if (!empty($machineLearningRecords)) { ?>
				<?php foreach ($machineLearningRecords as $record) { ?>

			<div class="hero-banner-four">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-xl-7 col-lg-8 col-md-11 m-auto">
							<!-- <a href="pricing.html" class="slogan"><strong>Offer</strong> is going on till friday, $1.99/mo. <i class="fas fa-chevron-right"></i></a> -->
							<h1 class="hero-heading"><?php echo htmlspecialchars($record->banner_title); ?></h1>
							<p class="mb-50 lg-mb-30"> <?php echo htmlspecialchars($record->banner_content); ?> </p>
							<!-- <form action="<?php echo base_url(); ?>productAndSolutions" class="w-25" style="border: none;">
								<button>Request Demo</button>
							</form> -->
							<a href="<?php echo base_url(); ?>productAndSolutions" class="btn-six ripple-btn">Ready for demo <i class="fas fa-chevron-right"></i></a>
							<!-- <ul class="style-none button-group d-sm-flex align-items-center">
									<li><a class="demo-btn tran3s mt-10" href="<?php echo base_url(); ?>productAndSolutions">Request a demo</a></li>
							</ul> -->
							<!-- <div class="info">No Credit Card Required.</div> -->
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="illustration-holder-one">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_10.svg" alt="">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_10_1.svg" alt="" class="shapes shape-one">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_10_2.svg" alt="" class="shapes shape-two">
				</div> 
				<div class="illustration-holder-two">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_11.svg" alt="">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_10_1.svg" alt="" class="shapes shape-one">
				</div> 
			</div> <!-- /.hero-banner-four -->


			<!--
			=====================================================
				Partner Section Three
			=====================================================
			-->
			<!-- <div class="partner-section-three mt-70 lg-mt-60">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 m-auto">
							<div class="partner_slider_one">
								<div class="item"><div class="icon d-flex align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-22.png" alt="" class="m-auto"></div></div>
								<div class="item"><div class="icon d-flex align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-23.png" alt="" class="m-auto"></div></div>
								<div class="item"><div class="icon d-flex align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-24.png" alt="" class="m-auto"></div></div>
								<div class="item"><div class="icon d-flex align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-25.png" alt="" class="m-auto"></div></div>
								<div class="item"><div class="icon d-flex align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-23.png" alt="" class="m-auto"></div></div>
							</div>
						</div>
					</div>
				</div> 
			</div>  -->

			


			<!-- 
			=============================================
				Feature Section Thirteen
			============================================== 
			-->
			<div class="fancy-feature-thirteen position-relative mt-100 pb-150 lg-pb-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-5 col-md-7 m-auto" data-aos="fade-up">
							<div class="title-style-one text-center mb-55 lg-mb-30">
								<div class="sc-title-five">Our Services</div>
								<h2 class="main-title"><?php echo htmlspecialchars($record->services_title); ?></h2>
							</div> <!-- /.title-style-one -->
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up">
							<div class="block-style-ten tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_24.svg" alt=""></div>
								<h6><a href="service-details-V1.html"><?php echo htmlspecialchars($record->s1_title); ?></a></h6>
								<p><?php echo htmlspecialchars($record->s1_content); ?></p>
								<!-- <a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a> -->
							</div> <!-- /.block-style-ten -->
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-ten tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_25.svg" alt=""></div>
								<h6><a href="service-details-V1.html"><?php echo htmlspecialchars($record->s2_title); ?></a></h6>
								<p><?php echo htmlspecialchars($record->s2_content); ?></p>
								<!-- <a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a> -->
							</div> <!-- /.block-style-ten -->
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-ten tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_26.svg" alt=""></div>
								<h6><a href="service-details-V1.html"><?php echo htmlspecialchars($record->s3_title); ?></a></h6>
								<p><?php echo htmlspecialchars($record->s3_content); ?></p>
								<!-- <a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a> -->
							</div> <!-- /.block-style-ten -->
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-ten tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_27.svg" alt=""></div>
								<h6><a href="service-details-V1.html"><?php echo htmlspecialchars($record->s4_title); ?></a></h6>
								<p><?php echo htmlspecialchars($record->s4_content); ?></p>
								<!-- <a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a> -->
							</div> <!-- /.block-style-ten -->
						</div>
					</div>
				</div> <!-- /.container -->
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_31.svg" alt="" class="shapes shape-one">
			</div> <!-- /.fancy-feature-thirteen -->



			<!-- 
			=============================================
				Feature Section Fourteen
			============================================== 
			-->
			<div class="fancy-feature-fourteen mt-20">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5 col-md-6 order-md-last">
							<div class="block-style-two" data-aos="fade-left">
								<div class="title-style-one">
									<div class="sc-title-five">Over 150k+ Client</div>
									<h2 class="main-title"><?php echo htmlspecialchars($record->solution_title); ?></h2>
								</div> <!-- /.title-style-one -->
								<p class="pt-10 pb-20"><?php echo htmlspecialchars($record->solution_content); ?></p>
								<!-- <ul class="style-none list-item color-rev">
									<li>Various analysis options.</li>
									<li>Page Load (time, size, number of requests).</li>
									<li>Adance Data analysis operation.</li>
								</ul> -->
								<!-- <a href="about-us2.html" class="btn-six ripple-btn mt-50 lg-mt-30">More about us</a> -->
							</div> <!-- /.block-style-two -->
						</div>

						<div class="col-xl-7 col-md-6 order-md-first">
							<div class="illustration-holder d-inline-block position-relative sm-mt-50">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_12.svg" alt="">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_12_1.svg" alt="" class="shapes shape-one" data-aos="fade-down" data-aos-duration="1500">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_12_1.svg" alt="" class="shapes shape-two" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_12_2.svg" alt="" class="shapes shape-three" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_12_3.svg" alt="" class="shapes shape-four">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_12_4.svg" alt="" class="shapes shape-five" data-aos="fade-left" data-aos-duration="1500">
							</div> <!-- /.illustration-holder -->
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.fancy-feature-fourteen -->
			



			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one mt-70">
				<div class="container">
					<div class="inner-container no-bg">
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
									<div class="main-count">$<span class="counter"><?php echo htmlspecialchars($record->card2_title); ?></span>mil+</div>
									<p><?php echo htmlspecialchars($record->card3_content); ?></p>
								</div> <!-- /.counter-block-one -->
							</div>
						</div>
					</div> <!-- /.inner-container -->
				</div>
			</div> <!-- /.counter-section-one -->



			<!-- 
			=============================================
				Feature Section Fifteen
			============================================== 
			-->
			<div class="fancy-feature-fifteen position-relative mt-65">
				<div class="container">
					<div class="title-style-one text-center mb-90 lg-mb-30" data-aos="fade-up">
						<div class="sc-title-five">OUR APPROACH</div>
						<h2 class="main-title"><?php echo htmlspecialchars($record->approach_title); ?></h2>
					</div> <!-- /.title-style-one -->

					<div class="bg-wrapper">
						<div class="row justify-content-center gx-xxl-5">
							<div class="col-md-4 col-sm-6" data-aos="fade-right">
								<div class="block-style-eleven position-relative mt-50">
									<div class="icon d-flex align-items-center justify-content-center">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_28.svg" alt="">
										<div class="num">1</div>
									</div>
									<h5><?php echo htmlspecialchars($record->approach_card_title_1); ?></h5>
								</div> <!-- /.block-style-eleven -->
							</div>
							<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
								<div class="block-style-eleven position-relative mt-50 shape-arrow">
									<div class="icon d-flex align-items-center justify-content-center">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_29.svg" alt="">
										<div class="num">2</div>
									</div>
									<h5><?php echo htmlspecialchars($record->approach_card_title_2); ?></h5>
								</div> <!-- /.block-style-eleven -->
							</div>
							<div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="200">
								<div class="block-style-eleven position-relative mt-50">
									<div class="icon d-flex align-items-center justify-content-center">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_30.svg" alt="">
										<div class="num">3</div>
									</div>
									<h5><?php echo htmlspecialchars($record->approach_card_title_3); ?></h5>
								</div> <!-- /.block-style-eleven -->
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.container -->
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_33.svg" alt="" class="shapes shape-one">
			</div> <!-- /.fancy-feature-fifteen -->


			<!-- 
			=============================================
				Feature Section Sixteen
			============================================== 
			-->
			<div class="fancy-feature-sixteen mt-170 lg-mt-110">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 col-md-6">
							<div class="title-style-one mb-40 lg-mb-20">
								<h2 class="main-title"><?php echo htmlspecialchars($record->workingskills_title); ?></h2>
							</div> <!-- /.title-style-one -->
							<p><?php echo htmlspecialchars($record->workingskills_content); ?></p>
						</div>
						<div class="col-md-6 ms-auto">
							<div class="skills-progress skills ps-xxl-5 mt-45 sm-mt-80">
								<div class="habilidades_contenedor">
							        <div class="codeconSkills">
							            <div class="codeconSkillbar mb-80 md-mb-70">
							            	<div class="skill-text">
							            		<span class="codeconSkillArea"><?php echo htmlspecialchars($record->progress_title_1); ?></span>
							            	</div>
							                <div class="skillBar" data-percent="63%">
							                	<span class="PercentText"><?php echo htmlspecialchars($record->progress_content_1); ?>%</span>
							                </div>
							            </div>
							            <div class="codeconSkillbar mb-80 md-mb-70">
							            	<div class="skill-text">
							            		<span class="codeconSkillArea "><?php echo htmlspecialchars($record->progress_title_2); ?></span>
							            	</div>
								            <div class="skillBar" data-percent="92%">
								                <span class="PercentText"><?php echo htmlspecialchars($record->progress_content_2); ?>%</span>
								            </div>
							            </div>
							            <div class="codeconSkillbar">
							            	<div class="skill-text">
							            		<span class="codeconSkillArea "><?php echo htmlspecialchars($record->progress_title_3); ?></span>
							            	</div>
								            <div class="skillBar" data-percent="78%">
								                <span class="PercentText"><?php echo htmlspecialchars($record->progress_content_3); ?>%</span>
								            </div>
							            </div>
							    	</div> <!-- /.codeconSkills -->
							    </div> <!-- /.habilidades_contenedor -->
							</div> <!-- /.skills-progress -->
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-feature-sixteen -->




			<!--
			=====================================================
				Portfolio Gallery Two
			=====================================================
			-->
			<!-- <div class="portfolio-gallery-two mt-170 lg-mt-110">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-7 m-auto">
							<div class="title-style-one text-center mb-50 lg-mb-20" data-aos="fade-up">
								<div class="sc-title-five">OUR PROJECTS</div>
								<h2 class="main-title">Check some our recent Projects.</h2>
							</div> 
						</div>
					</div>


					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6" data-aos="fade-up">
							<div class="portfolio-block-one mt-40">
								<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_01.jpg" alt="" class="w-100"></div>
								<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Data Research</span>
									<span class="pj-name">Product Analysis</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_01.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> 
						</div> 
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="portfolio-block-one mt-40">
								<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_02.jpg" alt="" class="w-100"></div>
								<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Design</span>
									<span class="pj-name">UI, UX Design</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_02.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> 
						</div> 
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="portfolio-block-one mt-40">
								<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_03.jpg" alt="" class="w-100"></div>
								<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Marketing</span>
									<span class="pj-name">Content Marketing</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_03.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> 
						</div> 
						<div class="col-lg-4 col-sm-6" data-aos="fade-up">
							<div class="portfolio-block-one mt-40">
								<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_04.jpg" alt="" class="w-100"></div>
								<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Development</span>
									<span class="pj-name">Market System</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_04.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> 
						</div> 
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="portfolio-block-one mt-40">
								<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_05.jpg" alt="" class="w-100"></div>
								<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Marketing</span>
									<span class="pj-name">Content Marketing</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_05.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> 
						</div> 
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="portfolio-block-one mt-40">
								<div class="img-meta"><img src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_06.jpg" alt="" class="w-100"></div>
								<a href="portfolio-details-V1.html" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Data Research</span>
									<span class="pj-name">Product Analysis</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_06.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> 
						</div> 
					</div>
				</div>
			</div>  -->



			<!--
			=====================================================
				Feedback Slider Three
			=====================================================
			-->
			<!-- <div class="feedback-section-three style-two mt-180 lg-mt-120" data-aos="fade-up">
				<div class="container">
					<div class="slider-wrapper">
						<div class="feedback_slider_three">
							<div class="item">
								<div class="feedback-block-three d-md-flex align-items-center">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_05.jpg" alt="">
									</div>
									<div class="text-wrapper mb-50">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>Certainly from my perspective been great success with lore giving that <a href="#">enterprises</a> level magna assured quality due issue there live the blind texts separated.</p>
										<div class="name">
											<h6>Martin Jonas</h6>
											<span>Head of marketing, Inter inc.</span>
										</div> 
									</div> 
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-three d-md-flex align-items-center">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_06.jpg" alt="">
									</div>
									<div class="text-wrapper mb-50">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>Having a home based business is a wonderful asset to your life. The problem still stands it comes time <a href="#">advertise</a> your business for a cheap cost you have looked.</p>
										<div class="name">
											<h6>Carolyn Tyler</h6>
											<span>Senior Developer, Neural Nest, LLC</span>
										</div> 
									</div> 
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-three d-md-flex align-items-center">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_07.jpg" alt="">
									</div>
									<div class="text-wrapper mb-50">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>It’s a great exprience to work with <a href="#">Neural Nest, LLC</a>. They’r vey humble and expert & the service has been excellent. The author is very quick and nice when it comes to support.</p>
										<div class="name">
											<h6>Rebecca Jones</h6>
											<span>Senior UX Designer, Creativegigs.</span>
										</div> 
									</div> 
								</div> 
							</div>
						</div> 
					</div> 
				</div> 
			</div>  -->



			<!--
			=====================================================
				Pricing Section Two
			=====================================================
			-->
			<!-- <div class="pricing-section-two position-relative mt-150 lg-mt-50">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-7 col-lg-6 col-md-8 m-auto">
							<div class="title-style-one text-center mb-20" data-aos="fade-up">
								<div class="sc-title-five">Pricing & Plan</div>
								<h2 class="main-title">No Hidden Cost. Choose your plan.</h2>
							</div> 
						</div>
					</div>
					<div class="pricing-table-area-two">
						<div class="row">
							<div class="col-xxl-10 m-auto">
								<div class="row justify-content-center">
									<div class="col-lg-4 col-sm-6" data-aos="fade-right">
										<div class="pr-table-wrapper tran3s mt-40">
											<div class="pack-name">Standard</div>
											<div class="price"><sup>$</sup>0</div>
											<ul class="pr-feature style-none">
												<li>1 Domain</li>
												<li>1 Year Premium Support</li>
												<li>Team fundraising</li>
											</ul>
											<a href="#" class="btn-seven w-100 mt-50 lg-mt-30">Choose Plan</a>
										</div> 
									</div>

									<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
										<div class="pr-table-wrapper tran3s mt-40 active">
											<div class="pack-name">Gold</div>
											<div class="price"><sup>$</sup>27. <sup>99</sup></div>
											<ul class="pr-feature style-none">
												<li>1 Domain</li>
												<li>1 Year Premium Support</li>
												<li>Team fundraising</li>
											</ul>
											<a href="#" class="btn-seven w-100 mt-50 lg-mt-30">Choose Plan</a>
										</div> 
									</div>

									<div class="col-lg-4 col-sm-6" data-aos="fade-left">
										<div class="pr-table-wrapper tran3s mt-40">
											<div class="pack-name">Diamond</div>
											<div class="price"><sup>$</sup>39. <sup>99</sup></div>
											<ul class="pr-feature style-none">
												<li>1 Domain</li>
												<li>1 Year Premium Support</li>
												<li>Team fundraising</li>
											</ul>
											<a href="#" class="btn-seven w-100 mt-50 lg-mt-30">Choose Plan</a>
										</div> 
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xxl-5 col-xl-6 col-lg-7 m-auto">
								<p class="info mt-75 lg-mt-50" data-aos="fade-up">We've done it carefully and simply. Combined with the ingredients makes for beautiful landings.</p>
							</div>
						</div>
					</div> 
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_34.svg" alt="" class="shapes shape-one">
			</div>  -->
			<!-- /.pricing-section-two -->



			<!--
			=====================================================
				Blog Section Two
			=====================================================
			-->
			<!-- <div class="blog-section-two mt-140 lg-mt-100">
				<div class="container">
					<div class="title-style-one text-center mb-50 lg-mb-20" data-aos="fade-up">
						<div class="sc-title-five">BLOG</div>
						<h2 class="main-title">Company News</h2>
					</div> 

					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
							<article class="blog-meta-two mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_04.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">23 Apr, 2021</a></div>
									<a href="blog-details.html" class="blog-title"><h5>A Discount Cartridge dsu is Better Ever.</h5></a>
									<a href="blog-details.html" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
								</div> 
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<article class="blog-meta-two mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_07.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">23 Apr, 2021</a></div>
									<a href="blog-details.html" class="blog-title"><h5>Truck Side Advertising Isn It Time for action.</h5></a>
									<a href="blog-details.html" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
								</div> 
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<article class="blog-meta-two mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_06.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">23 Apr, 2021</a></div>
									<a href="blog-details.html" class="blog-title"><h5>A discount cartridge dsu is better ever.</h5></a>
									<a href="blog-details.html" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
								</div> 
							</article>
						</div>
					</div>
				</div>
			</div>  -->



			<!-- 
			=============================================
				Fancy Short Banner Three
			============================================== 
			-->
			<div class="fancy-short-banner-three position-relative mt-160 lg-mt-80">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row align-items-center">
							<div class="col-lg-8 m-auto" data-aos="fade-up">
								<div class="title-style-one text-center white-vr mb-30" data-aos="fade-up">
									<h2 class="main-title">Get Ready to Started It’s Fast, Free & very easy</h2>
								</div> <!-- /.title-style-one -->
								<a href="<?php echo base_url(); ?>productAndSolutions" class="btn-six ripple-btn">Ready for demo <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.fancy-short-banner-three -->


		

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="footer-style-one theme-basic-footer">
				<div class="container">
					<div class="inner-wrapper">
						<div class="row">
							<div class="col-lg-4 footer-intro mb-40">
								<div class="logo"><a href="<?php echo base_url(); ?>portfolio"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-03.png" alt="" width="130"></a></div>
								<p>In this class, you will learn about the most effective machine learning techniques, and gain practice implementing them.</p>
								<ul class="d-flex social-icon style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-4 ms-auto mb-30">
								<h5 class="footer-title">Links</h5>
								<ul class="footer-nav-link style-none">
									<li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="about-us2.html">About us</a></li>
									<li><a href="service-V1.html">Service</a></li>
									<li><a href="blog-V1.html">Blog</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-4 mb-30">
								<h5 class="footer-title">Services</h5>
								<ul class="footer-nav-link style-none">
									<li><a href="service-details-V1.html">Artificial Intelligence</a></li>
									<li><a href="service-details-V1.html">Data Analytics</a></li>
									<li><a href="service-details-V1.html">Data Visualization</a></li>
									<li><a href="service-details-V1.html">Deep Learning</a></li>
									<li><a href="service-details-V1.html">Statistical Modeling</a></li>
								</ul>
							</div>
							<div class="col-xl-2 col-lg-3 col-sm-4 mb-30">
								<h5 class="footer-title">Legal</h5>
								<ul class="footer-nav-link style-none">
									<li><a href="faq.html">Terms of use</a></li>
									<li><a href="faq.html">Terms & conditions</a></li>
									<li><a href="faq.html">Privacy policy</a></li>
									<li><a href="faq.html">Cookie policy</a></li>
								</ul>
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
		<!-- Progress Bar js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/skills-master/jquery.skills.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>