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
					<h2 class="intro-title text-center">Client Testimonials</h2>
					<ul class="page-breadcrumb style-none d-flex justify-content-center">
						<li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
						<li class="current-page">Testimonials</li>
					</ul>
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_38.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_39.svg" alt="" class="shapes shape-two">
			</div> <!-- /.theme-inner-banner -->
			


			<!--
			=====================================================
				Feedback Slider Three
			=====================================================
			-->
			<?php if (!empty($testimonialRecords)) { ?>
			<div class="feedback-section-three position-relative mt-150 lg-mt-100" data-aos="fade-up">
				<div class="container">
					<div class="slider-wrapper">
						<div class="feedback_slider_three">
						<?php foreach ($testimonialRecords as $record) { ?>
							<div class="item">
								<div class="feedback-block-three d-md-flex">
									<div class="img-meta">
										<img src="<?= base_url(htmlspecialchars($record->client_photo)); ?>" alt="">
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p><?= (htmlspecialchars($record->client_comments)); ?></p>
										<div class="name">
											<h6><?= (htmlspecialchars($record->client_name)); ?></h6>
											<span><?= (htmlspecialchars($record->client_designation)); ?></span>
										</div> <!-- /.name -->
									</div> <!-- /.text-wrapper -->
								</div> <!-- /.feedback-block-three -->
							</div>
							<?php } ?>
							<!-- <div class="item">
								<div class="feedback-block-three d-md-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_06.jpg" alt="">
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>Having a home based business is a wonderful asset to your life. The problem still stands it comes time <a href="#">advertise</a> your business for a cheap cost you have looked.</p>
										<div class="name">
											<h6>Carolyn Tyler</h6>
											<span>Senior Developer, NeuralNest LLC.</span>
										</div> 
									</div> 
								</div> 
							</div> -->
							<!-- <div class="item">
								<div class="feedback-block-three d-md-flex">
									<div class="img-meta">
										<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_07.jpg" alt="">
									</div>
									<div class="text-wrapper">
										<div class="icon d-flex justify-content-center align-items-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_15.svg" alt=""></div>
										<p>It’s a great exprience to work with <a href="#">NeuralNest</a>. They’r vey humble and expert & the service has been excellent. The author is very quick and nice when it comes to support.</p>
										<div class="name">
											<h6>Rebecca Jones</h6>
											<span>Senior UX Designer, Creativegigs.</span>
										</div>
									</div> 
								</div> 
							</div> -->
						</div> <!-- /.feedback_slider_three -->
					</div> <!-- /.slider-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.feedback-section-three -->
			<?php } else { ?>
				<div class="text-center">No records found</div>
			<?php } ?>


			<!--
			=====================================================
				Feedback Slider One
			=====================================================
			-->
			<div class="feedback-section-four position-relative mt-170 pb-150 lg-mt-120 lg-pb-80">
				<div class="container">
					<div class="title-style-one text-center" data-aos="fade-up">
						<div class="sc-title">TESTIMONIALS</div>
						<h2 class="main-title">Word from Our Client</h2>
					</div> <!-- /.title-style-one -->
				</div> <!-- /.container -->
				<div class="inner-content mt-90 lg-mt-60">
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
									</div> <!-- /.top-header -->
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<!-- <div class="cost"><span>Qulaity & Cost:</span> 5.00</div> -->
										<!-- <img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt=""> -->
									</div>
								</div> <!-- /.feedback-block-one -->
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
									</div> <!-- /.top-header -->
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<!-- <div class="cost"><span>Qulaity & Cost:</span> 35.00</div> -->
										<!-- <img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt=""> -->
									</div>
								</div> <!-- /.feedback-block-one -->
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
									</div> <!-- /.top-header -->
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<!-- <div class="cost"><span>Qulaity & Cost:</span> 19.00</div> -->
										<!-- <img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt=""> -->
									</div>
								</div> <!-- /.feedback-block-one -->
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
									</div> <!-- /.top-header -->
									<p>Certainly from my perspective quis been a great success with due WP giving us that enterprises level assured quality.</p>
									<div class="d-flex align-items-center justify-content-between">
										<!-- <div class="cost"><span>Qulaity & Cost:</span> 15.00</div> -->
										<!-- <img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt=""> -->
									</div>
								</div> <!-- /.feedback-block-one -->
							</div>
						</div> <!-- /.feedback_slider_one -->
					</div> <!-- /.slider-wrapper -->
				</div> <!-- /.inner-content -->
			</div> <!-- /.feedback-section-four -->



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
								<h3 class="pe-xxl-5 md-pb-20">Having any Query? Book an appointment.</h3>
							</div>
							<div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
								<a href="contact-us.html" class="msg-btn tran3s">Send Us Message</a>
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
								<p class="copyright text-center order-lg-0 pb-15">Copyright @2024 Neural Nest, LLC</p>
							</div>
						</div>
					</div> <!-- /.inner-wrapper -->
				</div>
			</div> <!-- /.footer-style-four -->


			<button class="scroll-top">
				<i class="bi bi-arrow-up-short"></i>
			</button>
			
			


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
		<!-- isotop -->
		<script  src="<?php echo base_url(); ?>assets/dist/css/vendor/isotope.pkgd.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>