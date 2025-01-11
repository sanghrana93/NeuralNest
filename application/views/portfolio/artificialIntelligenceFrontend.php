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
			<!-- I’m Gorgia. Magical AI for solution. -->
			<?php if (!empty($artificialIntelligenceRecords)) { ?>
				<?php foreach ($artificialIntelligenceRecords as $record) {
					
					?>
			<div class="hero-banner-two">
				<div class="bg-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-md-7">
								<h1 class="hero-heading">
									<?php echo htmlspecialchars($record->banner_title); ?>															
								</h1>
								<p class="text-lg pt-25 pb-40 lg-pb-20 sm-pt-10"><?php echo htmlspecialchars($record->banner_content); ?></p>
								<ul class="style-none button-group d-sm-flex align-items-center">
									<!-- <li class="me-4 mt-10"><a href="about-us1.html" class="btn-one ripple-btn">Explore</a></li> -->
									<li><a class="demo-btn tran3s mt-10" href="<?php echo base_url(); ?>productAndSolutions">Request a demo</a></li>
								</ul>
							</div>
						</div>
					</div> <!-- /.container -->
					<div class="illustration-holder">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04.svg" alt="" class="main-illustration w-100">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_1.svg" alt="" class="shapes shape-one">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_2.svg" alt="" class="shapes shape-two">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_2.svg" alt="" class="shapes shape-three">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_3.svg" alt="" class="shapes shape-four">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_4.svg" alt="" class="shapes shape-five">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_5.svg" alt="" class="shapes shape-six">
						<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_04_6.svg" alt="" class="shapes shape-seven">
						<div class="card-one shapes d-flex align-items-center justify-content-center">
							<div class="icon"><i class="bi bi-check-lg"></i></div>
							<h6>A++ Performance</h6>
						</div> <!-- /.card-one -->
						<div class="card-two shapes text-center">
							<div class="icon"><i class="bi bi-check-lg"></i></div>
							<div class="main-count"><span class="counter">20</span>k</div>
							<div class="info">5 Start Rating</div>
							<ul class="style-none d-flex justify-content-center rating">
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
							</ul>
						</div> <!-- /.card-two -->
					</div> <!-- /.illustration-holder -->
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.hero-banner-two -->



			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one fancy-bg">
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
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_04.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_05.svg" alt="" class="shapes shape-two">
			</div> <!-- /.counter-section-one -->



			<!--
			=====================================================
				Partner Section Two
			=====================================================
			-->
			<!-- <div class="partner-section-two mt-110">
				<div class="container">
					<div class="title-style-one text-center" data-aos="fade-up">
						<div class="sc-title-three">over 150k+ client</div>
						<h2 class="main-title md">Join 27,000+ companies who’ve reached </h2>
					</div> 

					<div class="row">
						<div class="col-12 m-auto">
							<ul class="style-none text-center">
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-13.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="100"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-12.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="200"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-9.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="300"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-7.png" alt=""></a></li>
								<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="400"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-8.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div> 
			</div>  -->

			


			<!-- 
			=============================================
				Feature Section Four
			============================================== 
			-->
			<div class="fancy-feature-four position-relative">
				<div class="bg-wrapper">
					<div class="inner-container">
						<div class="container">
							<div class="row gx-xxl-5">
								<div class="col-lg-4 mt-40 d-flex" data-aos="fade-up">
									<div class="d-flex justify-content-center flex-column">
										<div class="title-style-one">
											<div class="sc-title-three">Services</div>
											<h2 class="main-title"><?php echo htmlspecialchars($record->Services_title); ?></h2>
										</div> <!-- /.title-style-one -->
										<!-- <div><div class="btn-three rev mt-35 lg-mt-20">For more details. <a href="service-V1.html">Click here <i class="fas fa-chevron-right"></i></a></div></div> -->
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="100">
									<div class="block-style-four">
										<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_08.svg" alt=""></div>
										<a href="service-V1.html"><h5><?php echo htmlspecialchars($record->Service_card_title_1); ?></h5></a>
										<p><?php echo htmlspecialchars($record->Service_card_content_1); ?></p>
										<a href="service-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
									</div> <!-- /.block-style-four -->
								</div>
								<div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="200">
									<div class="block-style-four">
										<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_09.svg" alt=""></div>
										<a href="service-V1.html"><h5><?php echo htmlspecialchars($record->Service_card_title_2); ?></h5></a>
										<p><?php echo htmlspecialchars($record->Service_card_content_2); ?></p>
										<a href="service-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
									</div> <!-- /.block-style-four -->
								</div>
								<div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="100">
									<div class="block-style-four">
										<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_10.svg" alt=""></div>
										<a href="service-V1.html"><h5><?php echo htmlspecialchars($record->S1_title); ?></h5></a>
										<p><?php echo htmlspecialchars($record->S1_content); ?></p>
										<!-- <a href="service-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
									</div> <!-- /.block-style-four -->
								</div>
								<div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="200">
									<div class="block-style-four">
										<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_11.svg" alt=""></div>
										<a href="service-V1.html"><h5><?php echo htmlspecialchars($record->S2_title); ?></h5></a>
										<p><?php echo htmlspecialchars($record->S2_content); ?></p>
										<!-- <a href="service-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
									</div> <!-- /.block-style-four -->
								</div>
								<div class="col-lg-4 mt-40 d-flex" data-aos="fade-up" data-aos-delay="300">
									<div class="block-style-four">
										<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_12.svg" alt=""></div>
										<a href="service-V1.html"><h5><?php echo htmlspecialchars($record->S3_title); ?></h5></a>
										<p><?php echo htmlspecialchars($record->S3_content); ?></p>
										<!-- <a href="service-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
									</div> <!-- /.block-style-four -->
								</div>
							</div>
						</div>
					</div> <!-- /.inner-container -->
				</div> <!-- /.bg-wrapper -->
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_06.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_07.svg" alt="" class="shapes shape-two">
			</div> <!-- /.fancy-feature-four -->
			


			<!-- 
			=============================================
				Feature Section Two
			============================================== 
			-->
			<div class="fancy-feature-two position-relative mt-200 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-5 col-lg-6 col-md-7 ms-auto">
							<div class="block-style-two" data-aos="fade-left">
								<div class="title-style-one">
									<div class="sc-title-three">Over 150k+ Client</div>
									<h2 class="main-title"><?php echo htmlspecialchars($record->workpress_title); ?> </h2>
								</div> <!-- /.title-style-one -->
								<p class="pt-10 pb-20 lg-pb-10">
								<?php echo htmlspecialchars($record->workpress_content); ?>
									<!-- AI technology is perfect for best business solutions & we offer help to achieve your goals.</p>
								<ul class="style-none list-item color-rev">
									<li>Various analysis options.</li>
									<li>Page Load (time, size, number of requests).</li>
									<li>Big data analysis.</li>
									<li>Advance Data analysis operation.</li>
								</ul> -->
								<!-- <div class="btn-three rev mt-55 lg-mt-30">Want to learn more about us? <a href="about-us1.html">Click here <i class="fas fa-chevron-right"></i></a></div> -->
							</div> <!-- /.block-style-two -->
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="illustration-holder-two sm-mt-40">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_05.svg" alt="" class="main-illustration w-100">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_05_1.svg" alt="" class="shapes shape-one">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_05_2.svg" alt="" class="shapes shape-two" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="2000">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_05_3.svg" alt="" class="shapes shape-three" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="150" data-aos-duration="2000">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_05_4.svg" alt="" class="shapes shape-four">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_05_5.svg" alt="" class="shapes shape-five">
				</div> <!-- /.illustration-holder-two -->
			</div> <!-- /.fancy-feature-two -->




			<!--
			=====================================================
				Feedback Slider Two
			=====================================================
			-->
			<!-- <div class="feedback-section-two mt-170 xl-mt-100 md-mt-60" data-aos="fade-up">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_08.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_09.svg" alt="" class="shapes shape-two">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5 col-lg-4 col-md-5 col-sm-8">
							<div class="title-style-one text-center text-sm-start xs-pb-20">
								<h2 class="main-title">Client’s success Stories.</h2>
							</div> 
						</div>
						<div class="col-xl-6 col-lg-8 col-md-7 col-sm-4 ms-auto d-flex justify-content-center justify-content-sm-end">
							<ul class="slider-arrows slick-arrow-two d-flex style-none">
								<li class="prev_f1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
								<li class="next_f1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="inner-content mt-60 md-mt-40">
					<div class="slider-wrapper">
						<div class="feedback_slider_two">
							<div class="item">
								<div class="feedback-block-two d-sm-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_01.jpg" alt="">
										<a class="fancybox video-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
											<i class="bi bi-play-fill"></i>
										</a>
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-15.png" alt=""></div>
										<div class="camp-name">Giant cloud service inc</div>
										<p>We’v 9,000 agents across around the country, Find agents near your neighborhood.</p>
										<a href="#" class="read-btn d-flex align-items-center justify-content-between">
											<span>Continue Reading</span>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_14.svg" alt="" class="arrow">
										</a>
									</div> 
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-two d-sm-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_02.jpg" alt="">
										<a class="fancybox video-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
											<i class="bi bi-play-fill"></i>
										</a>
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-4.png" alt=""></div>
										<div class="camp-name">UK Marketing Agency.</div>
										<p>We’v 9,000 agents across around the country, Find agents near your neighborhood.</p>
										<a href="#" class="read-btn d-flex align-items-center justify-content-between">
											<span>Continue Reading</span>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_14.svg" alt="" class="arrow">
										</a>
									</div> 
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-two d-sm-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_03.jpg" alt="">
										<a class="fancybox video-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
											<i class="bi bi-play-fill"></i>
										</a>
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-3.png" alt=""></div>
										<div class="camp-name">Netflix Marketing Agency.</div>
										<p>We’v 9,000 agents across around the country, Find agents near your neighborhood.</p>
										<a href="#" class="read-btn d-flex align-items-center justify-content-between">
											<span>Continue Reading</span>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_14.svg" alt="" class="arrow">
										</a>
									</div> 
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-two d-sm-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_04.jpg" alt="">
										<a class="fancybox video-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0">
											<i class="bi bi-play-fill"></i>
										</a>
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-2.png" alt=""></div>
										<div class="camp-name">Sinco Digital Agency.</div>
										<p>We’v 9,000 agents across around the country, Find agents near your neighborhood.</p>
										<a href="#" class="read-btn d-flex align-items-center justify-content-between">
											<span>Continue Reading</span>
											<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_14.svg" alt="" class="arrow">
										</a>
									</div> 
								</div> 
							</div>
						</div> 
					</div> 
				</div> 
			</div>  -->



			<!-- 
			=============================================
				Feature Section Five
			============================================== 
			-->
			<div class="fancy-feature-five position-relative mt-50 xs-mt-20">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xxl-4 col-lg-5 col-md-6">
							<div class="block-style-five pt-60 md-pt-20" data-aos="fade-right">
								<div class="title-style-one">
									<div class="sc-title-three">BESt AI SOLUTION</div>
									<h2 class="main-title"><?php echo htmlspecialchars($record->solution_title); ?></h2>
								</div> <!-- /.title-style-one -->
								<p class="pt-10 pb-70"><?php echo htmlspecialchars($record->solution_content); ?></p>
								<div class="skills-progress skills">
									<div class="habilidades_contenedor">
								        <div class="codeconSkills">
								            <div class="codeconSkillbar mb-80 md-mb-60">
								            	<div class="skill-text">
								            		<span class="codeconSkillArea">SKIll</span>
								            	</div>
								                <div class="skillBar" data-percent="73%" style="background: #F25DFF;">
								                	<span class="PercentText">73%</span>
								                </div>
								            </div>
								            <div class="codeconSkillbar">
								            	<div class="skill-text">
								            		<span class="codeconSkillArea ">Performance</span>
								                    
								            	</div>
									            <div class="skillBar" data-percent="91%" style="background: #00E8FA;">
									                <span class="PercentText">91%</span>
									            </div>
								            </div>
								    	</div> <!-- /.codeconSkills -->
								    </div> <!-- /.habilidades_contenedor -->
								</div> <!-- /.skills-progress -->
								<!-- <a href="about-us1.html" class="btn-five ripple-btn mt-60 lg-mt-50">Learn More</a> -->
							</div> <!-- /.block-style-five -->
						</div>

						<div class="col-xxl-8 col-lg-7 col-md-6 text-end">
							<div class="illustration-holder d-inline-block position-relative xs-mt-20">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_06.svg" alt="" class="main-illustration w-100">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_06_1.svg" alt="" class="shapes shape-one">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_06_2.svg" alt="" class="shapes shape-two">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_06_3.svg" alt="" class="shapes shape-three" data-aos="fade-down" data-aos-duration="1800">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_06_4.svg" alt="" class="shapes shape-four" data-aos="fade-left" data-aos-duration="1800">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_06_5.svg" alt="" class="shapes shape-five">
							</div><!--  /.illustration-holder -->
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.fancy-feature-five -->



			<!-- 
			=============================================
				Feature Section Six
			============================================== 
			-->
			<!-- <div class="fancy-feature-six position-relative mt-80">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row gx-xxl-5 justify-content-center">
							<div class="col-lg-4 col-sm-6" data-aos="fade-up">
								<div class="block-style-six text-center mt-40">
									<div class="icon" style="background: rgba(68, 109, 255, 0.07); color: #446DFE;"><i class="bi bi-check-lg"></i></div>
									<h6>Qulaity Support</h6>
									<p>Learn content by interacting anything expert lesson a video.</p>
								</div> 
							</div>
							<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
								<div class="block-style-six text-center mt-40">
									<div class="icon" style="background: rgba(253, 232, 255, 1); color: #F36EFF;"><i class="bi bi-check-lg"></i></div>
									<h6>Fastest AI Machine</h6>
									<p>Practice what you realistic test great  questions lorem.</p>
								</div> 
							</div>
							<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
								<div class="block-style-six text-center mt-40">
									<div class="icon" style="background: rgba(255, 122, 65, 0.12); color: #FF7A41;"><i class="bi bi-check-lg"></i></div>
									<h6>Great Pricing</h6>
									<p>Review your practice & learn how to improve your skill.</p>
								</div> 
							</div>
						</div>
					</div> 
				</div> 
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_10.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_11.svg" alt="" class="shapes shape-two">
			</div>  -->



			<!--
			=====================================================
				Feedback Slider Three
			=====================================================
			-->
			<!-- <div class="feedback-section-three position-relative mt-250 lg-mt-130" data-aos="fade-up">
				<div class="container">
					<div class="slider-wrapper">
						<div class="feedback_slider_three">
							<div class="item">
								<div class="feedback-block-three d-md-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_05.jpg" alt="">
									</div>
									<div class="text-wrapper">
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
								<div class="feedback-block-three d-md-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_06.jpg" alt="">
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>Having a home based business is a wonderful asset to your life. The problem still stands it comes time <a href="#">advertise</a> your business for a cheap cost you have looked.</p>
										<div class="name">
											<h6>Carolyn Tyler</h6>
											<span>Senior Developer, Neural Nest, LCC</span>
										</div> 
									</div> 
								</div> 
							</div>
							<div class="item">
								<div class="feedback-block-three d-md-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_07.jpg" alt="">
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>It’s a great exprience to work with <a href="#">Neural Nest, LCC</a>. They’r vey humble and expert & the service has been excellent. The author is very quick and nice when it comes to support.</p>
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
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_12.svg" alt="" class="shapes shape-one">
			</div>  -->



			<!--
			=====================================================
				Feature Section Seven
			=====================================================
			-->
			<!-- <div class="fancy-feature-seven mt-140 lg-mt-50 sm-mt-20">
				<div class="container">
					<div class="row">
						<div class="col-xxl-4 col-lg-5">
							<div class="block-style-five md-pb-50" data-aos="fade-right">
								<div class="title-style-one">
									<div class="sc-title-three">Questions & Answers</div>
									<h2 class="main-title">Any Questions? Find here.</h2>
								</div> 
								<p class="pt-10 pb-15">Don’t find your answer here? just send us a message for any query.</p>
								<a href="contact-us.html" class="btn-five ripple-btn">Contact us</a>
							</div> 
						</div>

						<div class="col-lg-7 col-lg-6 ms-auto" data-aos="fade-left">
							<div class="accordion accordion-style-one" id="accordionOne">
								<div class="accordion-item">
								    <div class="accordion-header" id="headingOne">
								      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								        	What is web hosting?
								      	</button>
								    </div>
								    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>They not only understand what I say but read between the lines and also give me ideas of my own. AI technology is perfect for best business solutions. </p>
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingTwo">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								        	How do you weigh different criteria in your process?
								      	</button>
								    </div>
								    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOne">
								      	<div class="accordion-body">
								        	<p>They not only understand what I say but read between the lines and also give me ideas of my own. AI technology is perfect for best business solutions. </p>
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingThree">
								   		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								        	What can I use to build my website?
								      	</button>
								    </div>
								    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>They not only understand what I say but read between the lines and also give me ideas of my own. AI technology is perfect for best business solutions. </p>
								    	</div>
								    </div>
								</div>
								<div class="accordion-item">
								    <div class="accordion-header" id="headingFour">
								   		<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								        	If I already have a website, can I transfer it to your web hosting?
								      	</button>
								    </div>
								    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>They not only understand what I say but read between the lines and also give me ideas of my own. AI technology is perfect for best business solutions. </p>
								    	</div>
								    </div>
								</div>
								<div class="accordion-item">
								    <div class="accordion-header" id="headingFive">
								   		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								        	How can I accept credit cards online?
								      	</button>
								    </div>
								    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>They not only understand what I say but read between the lines and also give me ideas of my own. AI technology is perfect for best business solutions. </p>
								    	</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_13.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_14.svg" alt="" class="shapes shape-two">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_15.svg" alt="" class="shapes shape-three">
			</div>  -->



			<!--
			=====================================================
				Blog Section Two
			=====================================================
			-->
			<!-- <div class="blog-section-two mt-110 lg-mt-50">
				<div class="container">
					<div class="title-style-one text-center mb-50 lg-mb-20" data-aos="fade-up">
						<div class="sc-title-three">BLOG</div>
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
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_05.jpg" alt="" class="w-100 tran4s"></a></figure>
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
						<div class="col-lg-4 col-sm-6 d-lg-none d-flex" data-aos="fade-up">
							<article class="blog-meta-two mt-30">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_05.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">23 Apr, 2021</a></div>
									<a href="blog-details.html" class="blog-title"><h5>Truck Side Advertising Isn It Time for action.</h5></a>
									<a href="blog-details.html" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
								</div> 
							</article>
						</div>
					</div>
				</div>
			</div>  -->
			<!-- /.blog-section-two -->




			<!-- 
			=============================================
				Fancy Short Banner One
			============================================== 
			-->
			<div class="fancy-short-banner-one position-relative mt-160 lg-mt-100 md-mt-80">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row align-items-center gx-xxl-5">
							<div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
								<div class="sub-title"><?php echo htmlspecialchars($record->Inquary_Title); ?></div>
								<h3 class="pe-xl-5 md-pb-20"><?php echo htmlspecialchars($record->Inquary_content); ?></h3>
							</div>
							<div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
								<a href="<?php echo base_url(); ?>productAndSolutions" class="msg-btn tran3s">Request for Demo</a>
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.container -->
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_10.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_11.svg" alt="" class="shapes shape-two">
			</div> <!-- /.fancy-short-banner-one -->


		

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="footer-style-two theme-basic-footer">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_16.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_17.svg" alt="" class="shapes shape-two">
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
									<!-- <li><a href="pricing.html">Pricing</a></li> -->
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
			</div> <!-- /.footer-style-two -->


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