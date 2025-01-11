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
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_20.svg" alt="" class="shapes illustration-two">
			</div> <!-- /.theme-inner-banner -->

			
            <div class="fancy-feature-twentyFour">
				<div class="container">
				<div class="title-style-three">
					<h1 class="main-title">Training and Support</h1>
					<p>
						Empower your team with the knowledge and skills to leverage new technologies effectively. We offer customized training sessions and ongoing support to ensure successful adoption and maximization of your tech investments.
					</p>
					<p>
						<strong>Let me provide a comprehensive breakdown of Training and Support strategies for technology adoption.</strong>	
					</p>
				</div>	
				<!-- content Design Start -->
				<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center">
									<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_35.svg" alt=""></div>
									<a href="service-details-V1.html"><h5>Training Framework:</h5></a>
									<ul style="text-align: left;">
										<li>
                                            <strong>Needs Assessment:</strong> 
											<ul>
												<li>Skill gap analysis</li>
												<li>Role-based requirements</li>
												<li>Learning path development</li>
												<li>Performance metrics</li>
												<li>Competency mapping</li>
											</ul>
										</li>
										<li>
											<strong>Training Delivery Methods:</strong> 
											<ul>
												<li>Instructor-led sessions</li>
												<li>Self-paced learning</li>
												<li>Interactive workshops</li>
												<li>Hands-on labs</li>
												<li>Micro-learning modules</li>
											</ul>
										</li>		
                                        <li>
											<strong>Program Structure:</strong> 
											<ul>
												<li>Core fundamentals</li>
												<li>Advanced concepts</li>
												<li>Practical applications</li>
												<li>Best practices</li>
												<li>Troubleshooting skills</li>
											</ul>
										</li>
									</ul>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_08.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Support Implementation:</h5></a>
								<p>
									<ul style="text-align: left;">
										<li>
                                            <strong>Tiered Support Model:</strong>
                                            <ul>
                                                <li>Level 1: Basic issue resolution</li>
												<li>Level 2: Technical expertise</li>
												<li>Level 3: Specialized support</li>
												<li>Level 4: Vendor escalation</li>
												<li>Emergency response team</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>Support Channels:</strong>
                                            <ul>
                                                <li>Help desk system</li>
												<li>Knowledge base</li>
												<li>Live chat support</li>
												<li>Email support</li>
												<li>Phone support</li>
                                            </ul>
                                        </li>
									</ul>
								</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_09.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Content Development: </h5></a>
								<p>
								<ul style="text-align: left;">
										<li>
                                            <strong>Training Materials:</strong>
                                            <ul>
                                                <li>User manuals</li>
												<li>Video tutorials</li>
												<li>Quick reference guides</li>
												<li>Case studies</li>
												<li>Practice exercises</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>Documentation:</strong>
                                            <ul>
                                                <li>Standard operating procedures</li>
												<li>Troubleshooting guides</li>
												<li>Best practice documents</li>
												<li>Process workflows</li>
												<li>System updates</li>
                                            </ul>
                                        </li>
									</ul>
								</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_10.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Performance Monitoring:</h5></a>
								<p>
									<ul style="text-align: left;">
										<li>
											<strong>Training Effectiveness:</strong>
                                            <ul>
                                                <li>Skill assessments</li>
												<li>Certification tracking</li>
												<li>Performance metrics</li>
												<li>Feedback surveys</li>
												<li>ROI measurement</li>
                                            </ul>
										</li>
										<li>
											<strong>Support Quality:</strong>
                                            <ul>
                                                <li>Response times</li>
												<li>Resolution rates</li>
												<li>User satisfaction</li>
												<li>Ticket analysis</li>
												<li>Service level agreements</li>
                                            </ul>
										</li>										
									</ul>
								</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_11.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Continuous Improvement:</h5></a>
								<p>
									<ul>
										<li>
											<strong>Program Updates:</strong>
											<ul style="text-align: left;">
												<li>Content refreshes</li>
												<li>New feature training</li>
												<li>Process improvements</li>
												<li>Technology updates</li>
												<li>Best practice evolution</li>
											</ul>
										</li>
										<li>
											<strong>Feedback Integration:</strong>
											<ul style="text-align: left;">
												<li>User suggestions</li>
												<li>Performance data</li>
												<li>Industry trends</li>
												<li>Technology changes</li>
												<li>Business needs</li>
											</ul>
										</li>
									</ul>
								</p>
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_12.svg" alt=""></div>
								<a href="service-details-V1.html"><h5>Success Metrics:</h5></a>
								<p>
									<ul style="text-align: left;">
										<li> 
											<strong>Training Metrics:</strong>
											<ul style="text-align: left;">
												<li>Completion rates</li>
												<li>Assessment scores</li>
												<li>Certification success</li>
												<li>User engagement</li>
												<li>Knowledge retention</li>
											</ul>
										</li>
										<li> 
											<strong>Support Metrics:</strong>
											<ul style="text-align: left;">
												<li>First-call resolution</li>
												<li>Average handle time</li>
												<li>Customer satisfaction</li>
												<li>Escalation rates</li>
												<li>Knowledge base usage</li>
											</ul>
										</li>										
									</ul>
								</p>
								
								<a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a>
							</div> 
						</div>
						<p>Would you like me to elaborate on any specific aspect of <strong>Training and Support implementation ?</strong></p>
					</div>
				</div>
			</div>
			

			<!-- 
			=============================================
				Feature Section Twenty Five
			============================================== 
			-->
			<div class="fancy-feature-twentyFive position-relative mt-120 lg-mt-80">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_36.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Video Intelligence</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> <!-- /.block-style-ten -->
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_37.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Machine Learning</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> <!-- /.block-style-ten -->
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_38.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Voice Tracking</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> <!-- /.block-style-ten -->
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_39.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Data Analysis</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> <!-- /.block-style-ten -->
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.fancy-feature-twentyFive -->



			<!-- 
			=============================================
				Feature Section Twelve
			============================================== 
			-->
			<div class="fancy-feature-twelve mt-200 pb-50 lg-mt-120">
				<div class="container">
					<div class="row align-items-center align-items-xl-start">
						<div class="col-xl-5 col-md-6 order-md-last">
							<div class="block-style-nine color-two">
								<div class="title-style-three pb-10" data-aos="fade-up">
									<div class="sc-title">WHY CHOOSE US</div>
									<h2 class="main-title">Why <span>choose us</span> for your business.</h2>
								</div> <!-- /.title-style-three -->
								<ul class="style-none list-item">
									<li data-aos="fade-up">Learn content by interacting with an expert lesson or watching a video.</li>
									<li data-aos="fade-up" data-aos-delay="100">Practice what you learned on realistic SAT test questions.</li>
									<li data-aos="fade-up" data-aos-delay="200">Review your practice questions and learn how to improve.</li>
								</ul>
							</div> <!-- /.block-style-nine -->
						</div>
						<div class="col-xl-7 col-md-6 order-md-first" data-aos="fade-right">
							<div class="illustration-holder position-relative d-inline-block pe-md-5 me-xxl-5 sm-mt-60">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_18.svg" alt="" class="transform-img-meta">
							</div>
						</div>
					</div>
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_25.svg" alt="" class="shapes bg-shape">
			</div> <!-- /.fancy-feature-twelve -->



			<!--
			=====================================================
				Feedback Slider One
			=====================================================
			-->
			<div class="feedback-section-four position-relative mt-130 pb-60 lg-mt-90 lg-pb-10">
				<div class="container">
					<div class="title-style-three text-center" data-aos="fade-up">
						<div class="sc-title">Testimonials</div>
						<h2 class="main-title">Trsuted by <span>Clients</span></h2>
					</div> <!-- /.title-style-three -->
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
										<div class="cost"><span>Qulaity & Cost:</span> 5.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
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
										<div class="cost"><span>Qulaity & Cost:</span> 35.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
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
										<div class="cost"><span>Qulaity & Cost:</span> 19.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
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
										<div class="cost"><span>Qulaity & Cost:</span> 15.00</div>
										<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-5.png" alt="">
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
			<div class="fancy-short-banner-five mt-50">
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
						<div class="subscribe-area">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="title-style-four sm-pb-20">
										<h4 class="main-title">Join Our <span>Newsletter</span> & Get updated.</h4>
									</div> <!-- /.title-style-four -->
								</div>
								<div class="col-md-6">
									<div class="subscribe-form">
										<form action="#">
											<input type="email" placeholder="Enter your email">
											<button class="ripple-btn tran3s">Subscribe</button>
										</form>
										<p>We only send interesting and relevant emails.</p>
									</div> <!-- /.subscribe-form -->
								</div>
							</div>
						</div> <!-- /.subscribe-area -->
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

		<!-- Theme js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>