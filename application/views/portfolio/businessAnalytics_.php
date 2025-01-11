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

			<?php if (!empty($businessAnalyticsRecords)) { ?>
				<?php foreach ($businessAnalyticsRecords as $record) {
					
				?>

            <div class="fancy-feature-twentyFour">
				<div class="container">
				<div class="title-style-three">
					<h1 class="main-title"><?php echo htmlspecialchars($record->banner_title); ?></h1>
					<p>
						<?php echo htmlspecialchars($record->banner_content); ?>
					</p>
					<p>
						<strong><?php echo htmlspecialchars($record->b_sub_title); ?></strong>	
					</p>
					<p>
					    <?php echo htmlspecialchars($record->b_sub_content); ?>
						<!-- <span style="color:#913BFF; font-weight: 600;">Data Architecture Design encompasses</span>	the comprehensive framework for managing an organization's data assets. Here's a detailed analysis: -->
					</p>
				</div>	
				<!-- content Design Start -->
				<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center">
									<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_35.svg" alt=""></div>
									<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->card1_title); ?></h5></a>
									<div class="content text-start">
										<?php echo htmlspecialchars($record->card2_content); ?>
										<!-- <ul style="text-align: left;">
											<li>
												<strong>Data Collection and Integration:</strong> 
												<ul>
													<li>Automated data gathering from multiple sources</li>
													<li>Real-time data streaming capabilities</li>
													<li>Data quality management and validation</li>
													<li>ETL/ELT process optimization</li>
													<li>Data warehouse/lake integration</li>
												</ul>
											</li>
											<li>
												<strong>Analysis Capabilities:</strong> 
												<ul>
													<li>Descriptive analytics (what happened)</li>
													<li>Diagnostic analytics (why it happened)</li>
													<li>Predictive analytics (what might happen)</li>
													<li>Prescriptive analytics (what should be done)</li>
													<li>Statistical analysis and modeling</li>
												</ul>
											</li>		
											<li>
												<strong>Visualization and Reporting:</strong> 
												<ul>
													<li>Interactive dashboards</li>
													<li>Customizable reports</li>
													<li>Self-service analytics tools</li>
													<li>Data storytelling features</li>
													<li>Mobile-friendly interfaces</li>
												</ul>
											</li>	
											<li>
												<strong>Implementation Framework:</strong> 
												<ul>
													
													<li>
														<strong>Strategy Development: </strong>Define business objectives, Identify key performance indicators (KPIs), Set measurement criteria, Establish governance policies, Create roadmap for implementation.
													</li>
													<li> <strong> Data Architecture: </strong> Source system identification, Data modeling and design, Storage solution selection, Integration pattern definition, Security implementation </li>
													<li> <strong> Tool Selection and Development: </strong> BI platform evaluation, Custom solution development, Integration with existing systems, User interface design, Mobile accessibility	 </li>
													<li><strong> Analysis Methods: </strong>Historical trend analysis, Comparative analysis, Variance analysis, Correlation studies, Forecasting models</li>
												</ul>
											</li>	
											<li>
												<strong>Analysis Capabilities:</strong> 
												<ul>
													<li>Descriptive analytics (what happened)</li>
													<li>Diagnostic analytics (why it happened)</li>
													<li>Predictive analytics (what might happen)</li>
													<li>Prescriptive analytics (what should be done)</li>
													<li>Statistical analysis and modeling</li>
												</ul>
											</li>	
										</ul> -->
									</div>
									<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_08.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->card2_title); ?></h5></a>
								<div class="content text-start">
									<?php echo htmlspecialchars($record->card2_content); ?>
									<!-- <ul style="text-align: left;">
										<li>
                                            <strong>Financial Analytics:</strong>
                                            <ul>
                                                <li>Revenue analysis</li>
                                                <li>Cost optimization</li>
												<li>Profitability tracking</li>
												<li>Budget forecasting</li>
												<li>Risk assessment</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>Customer Analytics:</strong>
                                            <ul>
                                                <li>Behavior analysis</li>
												<li>Segmentation</li>
												<li>Lifetime value calculation</li>
												<li>Churn prediction</li>
												<li>Satisfaction measurement</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>Operational Analytics:</strong>
                                            <ul>
                                                <li>Process efficiency</li>
												<li>Resource utilization</li>
												<li>Quality metrics</li>
												<li>Supply chain optimization</li>
												<li>Capacity planning</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>Marketing Analytics:</strong>
                                            <ul>
                                                <li>Campaign performance</li>
												<li>Channel effectiveness</li>
												<li>ROI measurement</li>
												<li>Customer journey analysis</li>
												<li>Market basket analysis</li>
                                            </ul>
                                        </li>
									</ul> -->
								</div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_09.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->card3_title); ?> </h5></a>
								<div class="content text-start">
									<?php echo htmlspecialchars($record->card3_content); ?>
									<!-- <ul style="text-align: left;">
										<li>
                                            <strong>Data Governance:</strong>
                                            <ul>
                                                <li>Data quality standards</li>
												<li>Access control policies</li>
												<li>Privacy compliance</li>
												<li>Documentation requirements</li>
												<li>Change management procedures</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>User Adoption:</strong>
                                            <ul>
                                                <li>Training programs</li>
												<li>Support systems</li>
												<li>User feedback loops</li>
												<li>Change management</li>
												<li>Performance monitoring</li>
                                            </ul>
                                        </li>
										<li>
                                            <strong>Technical Optimization:</strong>
                                            <ul>
                                                <li>Query performance</li>
												<li>Cache management</li>
												<li>Resource allocation</li>
												<li>Scaling strategies</li>
												<li>Backup procedures</li>
                                            </ul>
                                        </li>
									</ul> -->
						        </div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_10.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->s1_title); ?></h5></a>
								<div class="content text-start">
								<?php echo htmlspecialchars($record->s1_content); ?>
									<!-- <ul style="text-align: left;">
										<li>Machine learning integration</li>
										<li>Natural language processing</li>
										<li>Automated insights</li>
										<li>Real-time analytics</li>
										<li>Embedded analytics</li>
									</ul> -->
						        </div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_11.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->s2_title); ?></h5></a>
								<div class="content text-start">
								<?php echo htmlspecialchars($record->s2_content); ?>
									<!-- <ul style="text-align: left;">
										<li>Self-service capabilities</li>
										<li>Collaborative features</li>
										<li>Knowledge sharing</li>
										<li>Citizen data scientist enablement</li>
										<li>Automated reporting</li>
									</ul> -->
								</div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-four">
								<div class="icon d-flex align-items-end justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_12.svg" alt=""></div>
								<a href="service-details-V1.html"><h5><?php echo htmlspecialchars($record->s3_title); ?></h5></a>
								<div class="content text-start">
									<?php echo htmlspecialchars($record->s3_content); ?>
									<!-- <ul>
										<li> <strong>Bias Detection and Mitigation:</strong>  Developing systems to identify and reduce biases in data and algorithms.</li>
										<li><strong>Explainability:</strong> Ensuring AI models provide transparent and understandable results.</li>
										<li><strong>Compliance:</strong> Adhering to global data privacy and AI governance standards.</li>
										<li><strong>Sustainability:</strong> Leveraging analytics and AI for environmentally responsible decision-making.</li>
									</ul> -->
						        </div>
								<button class="read-more">Read More</button>
								<!-- <a href="service-details-V1.html" class="more-btn"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_13.svg" alt="" class="tran3s"></a> -->
							</div> 
						</div>
						<p>Would you like me to delve deeper into any particular aspect of <strong> Business Intelligence and Analytics ?</strong></p>
					</div>
				</div>
			</div>
			

			<!-- 
			=============================================
				Feature Section Twenty Five
			============================================== 
			-->
			<!-- <div class="fancy-feature-twentyFive position-relative mt-120 lg-mt-80">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_36.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Video Intelligence</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> 
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_37.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Machine Learning</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> 
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_38.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Voice Tracking</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> 
						</div>
						<div class="col-xl-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-ten color-two tran3s mt-30">
								<div class="icon d-flex align-items-end"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_39.svg" alt=""></div>
								<h6><a href="service-details-V1.html">Data Analysis</a></h6>
								<p>Convert data nois intelligent insights for quis competitive differentiation.</p>
								<a href="service-details-V1.html" class="read-btn tran3s"><i class="bi bi-arrow-right"></i></a>
							</div> 
						</div>
					</div>
				</div> 
			</div>  -->
			<!-- /.fancy-feature-twentyFive -->



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
									<h2 class="main-title"><?php echo htmlspecialchars($record->workprocess_title); ?></h2>
								</div> <!-- /.title-style-three -->
								<div>
									<?php echo htmlspecialchars($record->workprocess_content); ?>
								</div>
								<!-- <ul class="style-none list-item">
									<li data-aos="fade-up">Learn content by interacting with an expert lesson or watching a video.</li>
									<li data-aos="fade-up" data-aos-delay="100">Practice what you learned on realistic SAT test questions.</li>
									<li data-aos="fade-up" data-aos-delay="200">Review your practice questions and learn how to improve.</li>
								</ul> -->
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
			<!-- <div class="feedback-section-four position-relative mt-130 pb-60 lg-mt-90 lg-pb-10">
				<div class="container">
					<div class="title-style-three text-center" data-aos="fade-up">
						<div class="sc-title">Testimonials</div>
						<h2 class="main-title">Trsuted by <span>Clients</span></h2>
					</div> 
				</div> 
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
			=============================================
				Fancy Short Banner Five
			============================================== 
			-->
			<div class="fancy-short-banner-five mt-50">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row align-items-center">
							<div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
								<h3 class="pe-xxl-5 md-pb-20"><?php echo htmlspecialchars($record->Inquary_Title); ?></h3>
							</div>
							<div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
								<a href="<?php echo base_url(); ?>productAndSolutions" class="msg-btn tran3s">Request a demo</a>
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