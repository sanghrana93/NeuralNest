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
				Theme Inner Banner
			============================================== 
			-->
		

			<div class="theme-inner-banner" style="background: #C7E2FF!important;">
				<div class="container">
					<h2 class="intro-title text-center">Our Services</h2>
					<ul class="page-breadcrumb style-none d-flex justify-content-center">
						<li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
						<li class="current-page">Services</li>
					</ul>
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_38.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_39.svg" alt="" class="shapes shape-two">
			</div> <!-- /.theme-inner-banner -->

			<?php if (!empty($mlAiIntegrationRecords)) { ?>
				<?php foreach ($mlAiIntegrationRecords as $record) {
					
				?>	
			

			<!-- 
			=============================================
				Feature Section Twenty Four
			============================================== 
			-->
			<!-- <div class="fancy-feature-twentyFour">
				<div class="container">
					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_35.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Health Care</h5></a>
								<p>Convert data noise to intelligent insights for competitive differentiation.</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_08.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Predictive Analytics</h5></a>
								<p>Convert data noise to intelligent insights for competitive differentiation.</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_09.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Data Engineers</h5></a>
								<p>Stay ahead of disruption & exceed customer expectation by implementing predictive analytics solutions.</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_10.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Deep Learning</h5></a>
								<p>Access tools for deep learning, cloud computing and any scale.</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_11.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Data Mining</h5></a>
								<p>You can discover hidden opportunities collecting, analyzing or explaining your data in a different way.</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_12.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Statistical Modeling</h5></a>
								<p>Offer future-ready business applications that can learn & adjust with time.</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
					</div>
				</div>
			</div>  -->
			<!-- /.fancy-feature-twentyFour -->

			<div class="fancy-feature-twentyFour">
				<div class="container">
				<div class="title-style-three">
					<h1 class="main-title"><?php echo htmlspecialchars($record->banner_title); ?></h1>
					<p> <?php echo htmlspecialchars($record->banner_content); ?> </p>
					<p>
						<strong><?php echo htmlspecialchars($record->b_sub_title); ?></strong>	
					</p>
					<p>
						<?php echo htmlspecialchars($record->b_sub_content); ?>
					</p>
					<h2 class="main-title"><?php echo htmlspecialchars($record->overview_title); ?></h2>
					<p>
						<?php echo htmlspecialchars($record->overview_content); ?>
					</p>
				</div>	
				<!-- content Design Start -->
				<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center">
									<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_35.svg" alt=""></div>
									<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->card1_title); ?></h5></a>
									<div class="content text-start" >
										<?php echo htmlspecialchars($record->card1_content); ?>
									</div>
									
									<button class="read-more">Read More</button>
								<!-- <a id="read-more" class="more-btn">	<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_08.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->card2_title); ?></h5></a>
								<div class="content text-start">
									<?php echo htmlspecialchars($record->card2_content); ?>
								</div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_09.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->card3_title); ?></h5></a>
								<div class="content text-start">
								<?php echo htmlspecialchars($record->card3_content); ?>
								</div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_10.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->s1_title); ?></h5></a>
								<p class="text-start">
									<!-- <ul style="text-align: left;">
										<li>Choose appropriate ML models</li>
										<li>Design system architecture</li>
										<li>Plan data flows</li>
										<li>Define APIs and interfaces</li>
									</ul> -->
									<?php echo htmlspecialchars($record->s1_content); ?>
								</p>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_11.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->s2_title); ?></h5></a>
								<p class="text-start">
									<!-- <ul style="text-align: left;">
										<li>Develop models</li>
										<li>Build integration layers</li>
										<li>Set up monitoring</li>
										<li>Create deployment pipelines</li>
									</ul> -->
									<?php echo htmlspecialchars($record->s2_content); ?>
								</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_12.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->s3_title); ?></h5></a>
								<p class="text-start">
									<!-- <ul style="text-align: left;">
										<li>Gradual rollout</li>
										<li>Performance monitoring</li>
										<li>Regular updates</li>
										<li>Continuous improvement</li>
									</ul> -->
									<?php echo htmlspecialchars($record->s3_content); ?>
								</p>
								
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<p><strong><?php echo htmlspecialchars($record->sub_heading_title); ?></strong></p>
					</div>
				</div>
			</div>


			<!-- 
			=============================================
				Feature Section Nineteen
			============================================== 
			-->
			<div class="fancy-feature-nineteen position-relative pt-160 pb-160 lg-pt-100">
				<div class="container">
					<div class="row">
						<div class="col-xxl-5 col-lg-6 col-md-7">
							<div class="block-style-thirteen" data-aos="fade-right">
								<div class="title-style-three pb-15">
									<div class="sc-title">WORK PROCESS</div>
									<h2 class="main-title"><?php echo htmlspecialchars($record->workprocess_title); ?></h2>
								</div> <!-- /.title-style-three -->
								<!-- <ul class="style-none list-item">
									<li data-aos="fade-up">
										<div class="numb tran3s">1</div>
										<h6>Frame the Problem</h6>
										<span>Learn content by interacting with an expert lesson or watching a video.</span>
									</li>
									<li data-aos="fade-up" data-aos-delay="50">
										<div class="numb tran3s">2</div>
										<h6>Collect the Data</h6>
										<span>Practice what you learned on realistic SAT test questions.</span>
									</li>
									<li data-aos="fade-up" data-aos-delay="100">
										<div class="numb tran3s">3</div>
										<h6>Process the Data</h6>
										<span>Have to be repudiated annoyances accepted the wise lorem ispum sample text.</span>
									</li>
								</ul> -->
								<?php echo htmlspecialchars($record->workprocess_content); ?>
							</div> <!-- /.block-style-thirteen -->
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="illustration-holder" data-aos="fade-left">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15.svg" alt="" class="w-100 main-illustration">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_1.svg" alt="" class="shapes shape-one">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_2.svg" alt="" class="shapes shape-two">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_3.svg" alt="" class="shapes shape-three">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_4.svg" alt="" class="shapes shape-four">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_5.svg" alt="" class="shapes shape-five" data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_6.svg" alt="" class="shapes shape-six" data-aos="fade-down" data-aos-delay="100" data-aos-duration="2000">
					<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_7.svg" alt="" class="shapes shape-seven" data-aos="fade-down" data-aos-duration="2000">
				</div> <!-- /.illustration-holder -->
				<div class="shapes oval-one"></div>
				<div class="shapes oval-two"></div>
				<!-- <img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_47.svg" alt="" class="shapes bg-shape-two"> -->
			</div> <!-- /.fancy-feature-nineteen -->




			<!--
			=====================================================
				Feedback Slider Four
			=====================================================
			-->
			<!-- <div class="feedback-section-five bg-white pt-200 pb-95 lg-pt-100 lg-pb-40">
				<div class="container">
					<div class="title-style-three text-center" data-aos="fade-up">
						<div class="sc-title">Testimonials</div>
						<h2 class="main-title">Words from <span>Client</span></h2>
					</div> 

					<div class="feedback_slider_four pt-70 lg-pt-50" data-aos="fade-up">
						<div class="item">
							<div class="row">
								<div class="col-xxl-9 col-xl-10 col-lg-8 m-auto">
									<div class="feedback-block-four mb-80 ms-xxl-4 me-xxl-4">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_34.svg" alt="" class="m-auto">
										<p>Having a home based business is a wonderful asset to your life. The problem still stands it comes timeadvertise your business for a cheap cost. I know you have looked answer everywhere.</p>
										<div class="cp-info">
											<h6>Client Name 1</h6>
											<span>Designer</span>
										</div>
									</div> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xxl-9 col-xl-10 col-lg-8 m-auto">
									<div class="feedback-block-four mb-80 ms-xxl-4 me-xxl-4">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_34.svg" alt="" class="m-auto">
										<p>Having a home based business is a wonderful asset to your life. The problem still stands it comes timeadvertise your business for a cheap cost. I know you have looked answer everywhere.</p>
										<div class="cp-info">
											<h6>Client Name 1</h6>
											<span>Front End developer</span>
										</div>
									</div> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xxl-9 col-xl-10 col-lg-8 m-auto">
									<div class="feedback-block-four mb-80 ms-xxl-4 me-xxl-4">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_34.svg" alt="" class="m-auto">
										<p>Having a home based business is a wonderful asset to your life. The problem still stands it comes timeadvertise your business for a cheap cost. I know you have looked answer everywhere.</p>
										<div class="cp-info">
											<h6>Client Name 3</h6>
											<span>Designer</span>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div> 
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_08.jpg" alt="" class="shapes avatar-one" width="45" height="45" style="outline-width: 6px;">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_09.jpg" alt="" class="shapes avatar-two" width="85" height="85" style="outline-width: 10px;">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_10.jpg" alt="" class="shapes avatar-three" width="85" height="85" style="outline-width: 10px;">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_11.jpg" alt="" class="shapes avatar-four" width="50" height="50" style="outline-width: 5px;">
			</div>  -->
			<!-- /.feedback-section-five -->




			<!-- 
			=============================================
				Fancy Short Banner Five
			============================================== 
			-->
			<div class="fancy-short-banner-five">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row align-items-center">
							<div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
								<h3 class="pe-xxl-5 md-pb-20"><?php echo htmlspecialchars($record->Inquary_Title); ?></h3>
							</div>
							<div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
								<a href="<?php echo base_url(); ?>productAndSolutions" class="msg-btn tran3s">Request for demo</a>
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.fancy-short-banner-five -->

		

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="footer-style-four space-fix-one theme-basic-footer">
				<div class="container">
					<div class="inner-wrapper">
						<!-- <div class="subscribe-area">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="title-style-four sm-pb-20">
										<h4 class="main-title">Join Our <span>Newsletter</span> & Get updated.</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="subscribe-form">
										<form action="#">
											<input type="email" placeholder="Enter your email">
											<button class="ripple-btn tran3s">Subscribe</button>
										</form>
										<p>We only send interesting and relevant emails.</p>
									</div>
								</div>
							</div>
						</div>  -->
						<!-- /.subscribe-area -->
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
									<!-- <li><a href="pricing.html">Pricing</a></li> -->
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
			</div> <!-- /.footer-style-four -->


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

		<script>
			// Select all content containers and buttons
			const contents = document.querySelectorAll('.content'); // Select all content divs
			const buttons = document.querySelectorAll('.read-more'); // Select all buttons

			const maxLength = 150; // Max length for truncation

			contents.forEach((content, index) => {
				const fullText = content.innerHTML.trim(); // Get full text
				const truncatedText = fullText.length > maxLength 
					? fullText.substring(0, maxLength) + '...' 
					: fullText;

				let isExpanded = false; // Toggle state

				// Initialize content with truncated text
				content.innerHTML = truncatedText;

				// Add click event listener for each button
				buttons[index].addEventListener('click', function () {
					if (isExpanded) {
						// Show truncated text and update button text
						content.innerHTML = truncatedText;
						buttons[index].innerHTML = 'Read More';
					} else {
						// Show full text and update button text
						content.innerHTML = fullText;
						buttons[index].innerHTML = 'Read Less';
					}
					isExpanded = !isExpanded; // Toggle state
				});
			});
		</script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>