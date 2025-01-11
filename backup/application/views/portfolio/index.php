<?php $this->load->view('layouts/link.php'); ?>

<body>
	<!-- Home Screen -->
	<div class="main-page-wrapper">
		<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- <section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-01.svg" alt="" class="m-auto d-block" width="38">
							</div>
							<div class="txt-loading mt-2">

								<span data-text-preloader="N" class="letters-loading">
									N
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="U" class="letters-loading">
									U
								</span>
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="L" class="letters-loading">
									L
								</span>
								<span data-text-preloader=" " class="letters-loading">

								</span>
								<span data-text-preloader="N" class="letters-loading">
									N
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="S" class="letters-loading">
									S
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								
							</div>
						</div>
					</div>
				</div>
			</section> -->

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
			<div class="hero-banner-five">
			<div class="container">
				<div class="row">
					<div class="col-xxl-6 col-md-7">
						<h1 class="hero-heading">
							<!-- Empowering Business With Modern Data Strategies And <span> Artificial Intelligence</span> -->
							<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->b_title); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
							<?php } ?>
						</h1>
						<p class="text-lg mb-50 pt-40 pe-xl-5 md-pt-30 md-mb-40">
							<!-- Driving corporate growth through
							Innovative Data Management, Machine Learning and Generative AI – Transforming data into
							strategic insights for a competitive edge. -->
							<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->b_content); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
							<?php } ?>
						</p>
						<ul class="style-none button-group d-flex align-items-center">
							<li class="me-4"><a href="<?php echo base_url(); ?>productAndSolutions" class="demo-btn ripple-btn tran3s" target="_blank">Request A
									Demo</a>
							</li>
							<!-- <li><a class="fancybox video-icon tran3s" data-fancybox=""
									href="https://www.youtube.com/embed/aXFSJTjVjw0"><i class="fas fa-play"></i></a>
							</li> -->
						</ul>
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="illustration-holder">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_13.svg" alt="" class="main-illustration ms-auto">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_13_1.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_13_2.svg" alt="" class="shapes shape-two" data-aos="fade-down">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_13_2.svg" alt="" class="shapes shape-three" data-aos="fade-down">
			</div> <!-- /.illustration-holder -->
			<div class="shapes oval-one"></div>
		</div> <!-- /.hero-banner-five -->

		<!-- 
			=============================================
				Feature Section Seventeen
			============================================== 
		-->

		<div class="fancy-feature-seventeen position-relative mt-160 xl-mt-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-5" data-aos="fade-right">
						<div class="title-style-three text-center text-lg-start">
							<h2 class="main-title">
								<!-- <span>Services</span> We Provide with Quality. -->
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->Serv_title); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
							</h2>
						</div> <!-- /.title-style-three -->
					</div>
					<div class="col-xl-6 col-lg-7" data-aos="fade-left">
						<p class="m0 text-center text-lg-start md-pt-30">
							<!-- Natural Language Processing (NLP) combines computational linguistics and machine learning to
							analyze and understand human language. By applying sophisticated algorithms, NLP systems can
							identify patterns, extract rules, and convert unstructured language data—like text or
							speech—into structured formats. This transformation enables tasks such as sentiment
							analysis, language translation, text summarization, and more, making it possible for
							machines to process, interpret, and respond to human language in a meaningful way. -->

							<!-- NLP entails applying algorithms to identify and extract rules such that the unstructured
							language data is converted. -->
							
							<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->Serv_content); ?></td>
												
											</tr>
										<?php } ?>
							<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
							<?php } ?>
							
						</p>
					</div>
				</div>

				<div class="row justify-content-center pt-30">
					<div class="col-lg-4 col-md-6" data-aos="fade-right">
						<div class="block-style-twelve mt-30 ps-lg-0 pe-xl-5 me-xl-2">
							<div class="icon d-flex align-items-end">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_31.svg" alt="">
							</div>
							<h5>
								<!-- <a href="service-details-V1.html">Data Science</a> -->
								<a>
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->s1_title); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
								</a>
							</h5>
							<!-- <p>Convert data noise intelligent insights for competitive differentiation qulaity check
								equlity.</p> -->
							<p>
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->s1_content); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
							</p>
							<a href="service-details-V1.html" class="tran3s more-btn">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_20.svg" alt="">
							</a>
						</div> <!-- /.block-style-twelve -->
					</div> <!-- /.item -->
					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<div class="block-style-twelve mt-30 active">
							<div class="icon d-flex align-items-end">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_32.svg" alt="">
							</div>
							<h5>
								<!-- <a href="service-details-V1.html">Customer Support</a> -->
								<a>
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->s2_title); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
								</a>
							</h5>
							<!-- <p>Convert data noise to intelligent insights for competitive differentiation qulaity check.
							</p> -->
							<p>
							<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->s2_content); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
							</p>
							<a href="service-details-V1.html" class="tran3s more-btn">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_20.svg" alt=""></a>
						</div> <!-- /.block-style-twelve -->
					</div> <!-- /.item -->
					<div class="col-lg-4 col-md-6" data-aos="fade-left">
						<div class="block-style-twelve mt-30">
							<div class="icon d-flex align-items-end">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_33.svg" alt="">
							</div>
							<h5>
								<!-- <a href="service-details-V1.html">Machine Learning</a> -->
								<a>
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->s3_title); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
								</a>
							</h5>
							<!-- <p>Convert data noise intelligent insights for competitive differentiation qulaity check
								equlity.</p> -->
							<p>
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->s3_content); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
							</p>		
							
							<a href="service-details-V1.html" class="tran3s more-btn">
								<img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_20.svg" alt=""></a>
						</div> <!-- /.block-style-twelve -->
					</div> <!-- /.item -->
				</div>
			</div> <!-- /.container -->
			<div class="shapes shape-one"></div>
		</div> <!-- /.fancy-feature-seventeen -->

		<!-- 
			=============================================
				Feature Section Eighteen
			============================================== 
		-->
		<div class="fancy-feature-eighteen position-relative pt-200 pb-225 lg-pt-130 md-pt-100 xl-pb-150 lg-pb-100">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 col-md-7 ms-auto">
						<div class="block-style-two" data-aos="fade-left">
							<div class="title-style-three">
								<div class="sc-title">Over 150k+ Client</div>
								<h2 class="main-title">
								<a>
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->target_title); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
								</a>
									<!-- Target <span>Audience</span> for your business. -->
								</h2>
							</div> <!-- /.title-style-three -->
							<p class="pt-20 pb-25 lg-pb-20">
								<!-- AI technology is perfect for best business solutions & we
								offer help to achieve your goals. -->
								<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->target_content); ?></td>
												
											</tr>
										<?php } ?>
								<?php } else { ?>
											<tr>
												<td colspan="1" class="text-center">No records found</td>
											</tr>
								<?php } ?>
							</p>
							<!-- <ul class="style-none list-item color-rev">
								<li>Various analysis options.</li>
								<li>Page Load (time, size, number of requests).</li>
								<li>Advance Data analysis operation.</li>
							</ul> -->
							<!-- <a href="about-us2.html" class="btn-eight mt-50 lg-mt-30">More about us</a> -->
						</div> <!-- /.block-style-two -->
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="illustration-holder" data-aos="fade-right">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14.svg" alt="" class="w-100 main-illustration">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_1.svg" alt="" class="shapes shape-one" data-aos="fade-down">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_2.svg" alt="" class="shapes shape-two" data-aos="fade-down"
					data-aos-delay="100">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_3.svg" alt="" class="shapes shape-three" data-aos="fade-down"
					data-aos-delay="200">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_4.svg" alt="" class="shapes shape-four">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_5.svg" alt="" class="shapes shape-five">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_6.svg" alt="" class="shapes shape-six">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_14_7.svg" alt="" class="shapes shape-seven">
			</div> <!-- /.illustration-holder -->
			<div class="shapes oval-one"></div>
			<div class="shapes oval-two"></div>
			<div class="shapes oval-three"></div>
		</div> <!-- /.fancy-feature-eighteen -->


		<!-- 
			=============================================
				Feature Section Nineteen
			============================================== 
		-->

		<div class="fancy-feature-nineteen position-relative pt-130 lg-pt-80">
			<div class="container">
				<div class="row">
					<div class="col-xxl-5 col-lg-6 col-md-7">
						<div class="block-style-thirteen" data-aos="fade-right">
							<div class="title-style-three pb-15">
								<div class="sc-title">WORK PROCESS</div>
								<h2 class="main-title">
									<!-- How Neural Nest, LLC <span>process</span> & works. -->
									<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->workprocess_title); ?></td>
												
											</tr>
										<?php } ?>
									<?php } else { ?>
												<tr>
													<td colspan="1" class="text-center">No records found</td>
												</tr>
									<?php } ?>
								</h2>
							</div> <!-- /.title-style-three -->
							<p>
									<?php if (!empty($userAnalysisRecords)) { ?>
										<?php foreach ($userAnalysisRecords as $record) { ?>
											<tr>
												<td><?php echo htmlspecialchars($record->workprocess_content); ?></td>
												
											</tr>
										<?php } ?>
									<?php } else { ?>
												<tr>
													<td colspan="1" class="text-center">No records found</td>
												</tr>
									<?php } ?>
							</p>
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
									<span>Have to be repudiated annoyances accepted the wise lorem ispum sample
										text.</span>
								</li>
							</ul> -->

						</div><!-- /.block-style-thirteen -->
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="illustration-holder" data-aos="fade-left">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15.svg" alt="" class="w-100 main-illustration">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_1.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_2.svg" alt="" class="shapes shape-two">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_3.svg" alt="" class="shapes shape-three">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_4.svg" alt="" class="shapes shape-four">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_5.svg" alt="" class="shapes shape-five" data-aos="fade-down"
					data-aos-delay="200" data-aos-duration="2000">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_6.svg" alt="" class="shapes shape-six" data-aos="fade-down"
					data-aos-delay="100" data-aos-duration="2000">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_15_7.svg" alt="" class="shapes shape-seven" data-aos="fade-down"
					data-aos-duration="2000">
			</div> <!-- /.illustration-holder -->
			<div class="shapes oval-one"></div>
			<div class="shapes oval-two"></div>
			<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_35.svg" alt="" class="shapes bg-shape">
		</div> <!-- /.fancy-feature-nineteen -->

		<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
		
			<div class="counter-section-one mt-140 lg-mt-100">
			<div class="container">
				<div class="inner-container bg-color">
					<div class="row justify-content-center">
						<div class="col-md-4 col-sm-6" data-aos="fade-up">
							<div class="counter-block-one text-center mb-20">
								<div class="main-count"><span class="counter">20</span>mil</div>
								<p>Human labor hours saved <br> with help of AI</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="counter-block-one text-center mb-20">
								<div class="main-count"><span class="counter">1.3</span>b+</div>
								<p>Generated revenue by <br>AI Solutions</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="counter-block-one text-center mb-20">
								<div class="main-count">$<span class="counter">15</span>mil+</div>
								<p>Saved operational costs <br>due to AI</p>
							</div> <!-- /.counter-block-one -->
						</div>
					</div>
				</div> <!-- /.inner-container -->
			</div>
		</div> <!-- /.counter-section-one -->

		<!--
			=====================================================
				Feedback Slider Four
			=====================================================
			-->
			<div class="feedback-section-five pt-130 lg-pt-100 pb-95 lg-pb-40">
			<div class="container">
				<div class="title-style-three text-center" data-aos="fade-up">
					<div class="sc-title">Members</div>
					<h2 class="main-title">Our <span>Team</span></h2>
				</div> <!-- /.title-style-three -->

				<div class="feedback_slider_four pt-70 lg-pt-50" data-aos="fade-up">
					<!-- <div class="item">
						<div class="row">
							<div class="col-xxl-9 col-xl-10 col-lg-8 m-auto">
								<div class="feedback-block-four mb-80 ms-xxl-4 me-xxl-4">
									<img src="<?php echo base_url(); ?>assets/dist/css/images/team/co-founder.png" alt="" class="m-auto" style="height:50vh;">
									<div class="cp-info pt-4">
										<h6>Sujit Kumar Singh</h6>
										<span>Founder and CEO</span>
									</div>
									<p>Having a home based business is a wonderful asset to your life. The problem still
										stands it comes timeadvertise your business for a cheap cost. I know you have
										looked answer everywhere.</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-xxl-9 col-xl-10 col-lg-8 m-auto">
								<div class="feedback-block-four mb-80 ms-xxl-4 me-xxl-4">
									<img src="<?php echo base_url(); ?>assets/dist/css/images/team/vp_sales.png" alt="" class="m-auto" style="height:50vh;">
									<div class="cp-info pt-4">
										<h6>John Sender</h6>
										<span>VP, Sales</span>
									</div>
									<p>Having a home based business is a wonderful asset to your life. The problem still
										stands it comes timeadvertise your business for a cheap cost. I know you have
										looked answer everywhere.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-xxl-9 col-xl-10 col-lg-8 m-auto">
								<div class="feedback-block-four mb-80 ms-xxl-4 me-xxl-4">
									<img src="<?php echo base_url(); ?>assets/dist/css/images/team/solution_Architech.png" alt="" class="m-auto" style="height:50vh;">
									<div class="cp-info">
										<h6>Alexander Morales</h6>
										<span>Solutions Architect</span>
									</div>
									<p>Having a home based business is a wonderful asset to your life. The problem still
										stands it comes timeadvertise your business for a cheap cost. I know you have
										looked answer everywhere.</p>
									
								</div> 
							</div>
						</div>
					</div> -->

					<?php if (!empty($ourTeamRecords)) { ?>
					<div class="team-section-two mt-110 mb-160 lg-mt-60 lg-mb-100">
						<div class="container">
							<div class="row">
								<?php foreach ($ourTeamRecords as $record) { ?>
									<div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up">
										<div class="team-block-one tran3s mt-50">
											<div class="img-meta">                                    
												<img src="<?= base_url(htmlspecialchars($record->member_photo)); ?>" alt="Team Member Photo" class="w-100">
											</div>
											<a href="<?php echo base_url() . (htmlspecialchars($record->member_name) == 'Sujit Kumar Singh' ? 'teamDetailsFounder' : (htmlspecialchars($record->member_name) == 'John Sender' ? 'teamDetailsSales' : (htmlspecialchars($record->member_name) == 'Alexander Morales' ? 'teamDetailsArchitect' : (htmlspecialchars($record->member_name) == 'Tyler Kreider' ? 'teamDetailsDataScientist' : '')))); ?>" class="team-info">
												<span class="designation-text"><?= htmlspecialchars($record->member_designation); ?></span>
												<span class="name tran3s"><?= htmlspecialchars($record->member_name); ?></span>
											</a>
										</div> <!-- /.team-block-one -->    
									</div> <!-- /.col -->
								<?php } ?>
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div> <!-- /.team-section-two -->
				<?php } else { ?>
					<div class="text-center">No records found</div>
				<?php } ?>
				</div> <!-- /.feedback_slider_four -->
			</div>
			<!-- <img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_08.jpg" alt="" class="shapes avatar-one" width="45" height="45"
				style="outline-width: 6px;">
			<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_09.jpg" alt="" class="shapes avatar-two" width="85" height="85"
				style="outline-width: 10px;">
			<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_10.jpg" alt="" class="shapes avatar-three" width="85" height="85"
				style="outline-width: 10px;">
			<img src="<?php echo base_url(); ?>assets/dist/css/images/media/img_11.jpg" alt="" class="shapes avatar-four" width="50" height="50"
				style="outline-width: 5px;"> -->
		</div> <!-- /.feedback-section-five -->

		<!--
			=====================================================
				Feature Section Twenty
			=====================================================
			-->

			<div class="fancy-feature-twenty position-relative mt-160 lg-mt-100 lg-pb-70">
			<!-- <div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="block-style-five pe-xxl-5 me-xxl-5 md-pb-50" data-aos="fade-right">
							<div class="title-style-three">
								<div class="sc-title">QUESTIONS & ANSWERS</div>
								<h2 class="main-title">Any <span>Questions?</span> Find here.</h2>
							</div>
							<p class="pt-20 pb-15">Don’t find your answer here? just send us a message for any query.
							</p>
							<a href="contact-us.html" class="btn-eight ripple-btn">Contact us</a>
						</div>
					</div>

					<div class="col-lg-7" data-aos="fade-left">
						<div class="accordion accordion-style-one" id="accordionOne">
							<div class="accordion-item">
								<div class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										What is web hosting?
									</button>
								</div>
								<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
									data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>They not only understand what I say but read between the lines and also give
											me ideas of my own. AI technology is perfect for best business solutions.
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										How do you weigh different criteria in your process?
									</button>
								</div>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
									data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>They not only understand what I say but read between the lines and also give
											me ideas of my own. AI technology is perfect for best business solutions.
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseThree" aria-expanded="false"
										aria-controls="collapseThree">
										What can I use to build my website?
									</button>
								</div>
								<div id="collapseThree" class="accordion-collapse collapse"
									aria-labelledby="headingThree" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>They not only understand what I say but read between the lines and also give
											me ideas of my own. AI technology is perfect for best business solutions.
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingFour">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseFour" aria-expanded="true"
										aria-controls="collapseFour">
										If I already have a website, can I transfer it to your web hosting?
									</button>
								</div>
								<div id="collapseFour" class="accordion-collapse collapse show"
									aria-labelledby="headingFour" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>They not only understand what I say but read between the lines and also give
											me ideas of my own. AI technology is perfect for best business solutions.
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseFive" aria-expanded="false"
										aria-controls="collapseFive">
										How can I accept credit cards online?
									</button>
								</div>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
									data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>They not only understand what I say but read between the lines and also give
											me ideas of my own. AI technology is perfect for best business solutions.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>  -->
			<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_36.svg" alt="" class="shapes shape-one">
			<div class="shapes oval-one"></div>
		</div> <!-- /.fancy-feature-twenty -->

		<!--
			=====================================================
				Blog Section Three
			=====================================================
			-->

		<!-- <div class="blog-section-three position-relative pt-70 lg-pt-40">
			<div class="container">
				<div class="title-style-three text-center mb-50 lg-mb-20" data-aos="fade-up">
					<div class="sc-title">RECENT NEWS</div>
					<h2 class="main-title">Inside Story & <span>Blog</span></h2>
				</div> 

				<div class="row gx-xxl-5">
					<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
						<article class="blog-meta-one color-two tran3s mt-30">
							<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_01.jpg" alt="" class="w-100 tran4s"></a></figure>
							<div class="post-data">
								<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read
								</div>
								<a href="blog-details.html" class="blog-title">
									<h5>Make more daily productive working flow like pro.</h5>
								</a>
							</div> 
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
						<article class="blog-meta-one color-two tran3s mt-30">
							<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_02.jpg" alt="" class="w-100 tran4s"></a></figure>
							<div class="post-data">
								<div class="post-tag"><a href="blog-details.html">UI/UX Design</a> - 10 minute read
								</div>
								<a href="blog-details.html" class="blog-title">
									<h5>Internet of the things and why it’s becoming important in the century.</h5>
								</a>
							</div> 
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
						<article class="blog-meta-one color-two tran3s mt-30">
							<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_03.jpg" alt="" class="w-100 tran4s"></a></figure>
							<div class="post-data">
								<div class="post-tag"><a href="blog-details.html">Marketing</a> - 8 minute read</div>
								<a href="blog-details.html" class="blog-title">
									<h5>The power product and the quotient rules.</h5>
								</a>
							</div> 
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 d-lg-none d-flex" data-aos="fade-up">
						<article class="blog-meta-one color-two tran3s mt-30">
							<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_01.jpg" alt="" class="w-100 tran4s"></a></figure>
							<div class="post-data">
								<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read
								</div>
								<a href="blog-details.html" class="blog-title">
									<h5>Make more daily productive working flow like pro.</h5>
								</a>
							</div> 
						</article>
					</div>
				</div>
			</div>
		</div> -->
		 <!-- /.blog-section-three -->

		<!--
			=====================================================
				Feature Section Twenty One
			=====================================================
		-->
			<div class="fancy-feature-twentyOne mt-200 pb-100 lg-mt-120 lg-pb-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-7 ms-auto">
						<div class="block-style-five ps-xxl-5" data-aos="fade-left">
							<div class="title-style-three">
								<div class="sc-title">Contact us</div>
								<h2 class="main-title">Get Ready to Started. It’s Fast & Easy.</h2>
							</div> <!-- /.title-style-three -->
							<p class="pt-20 pb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut quis nostrud ullamco laboris
								nisi.</p>
							<a href="contact-us.html" class="btn-eight ripple-btn">Send Message</a>
						</div> <!-- /.block-style-five -->
					</div>
				</div>
			</div>
			<div class="illustration-holder" data-aos="fade-right">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/assets/ils_16.svg" alt="" class="w-100 main-illustration">
			</div> <!-- /.illustration-holder -->
			<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_37.svg" alt="" class="shapes shape-one">
			<div class="shapes oval-one"></div>
			<div class="shapes oval-two"></div>
		</div> <!-- /.fancy-feature-twentyOne -->

		<!--
			=====================================================
				Partner Section Two
			=====================================================
		-->

		<div class="partner-section-two mt-30 mb-130 lg-mb-80">
			<div class="container">
				<div class="row">
					<div class="col-12 m-auto">
						<ul class="style-none text-center mt-40 lg-mt-10">
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><a href="#"
									class="d-flex align-items-center justify-content-center"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-13.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="100"><a
									href="#" class="d-flex align-items-center justify-content-center"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-12.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="200"><a
									href="#" class="d-flex align-items-center justify-content-center"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-9.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="300"><a
									href="#" class="d-flex align-items-center justify-content-center"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-7.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="400"><a
									href="#" class="d-flex align-items-center justify-content-center"><img
										src="<?php echo base_url(); ?>assets/dist/css/images/logo/Plogo-8.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.partner-section-two -->

		<!--
			=====================================================
				Footer
			=====================================================
		-->

		<div class="footer-style-four theme-basic-footer">
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
					</div> -->
					 <!-- /.subscribe-area -->
					<!-- <div class="row">
						<div class="col-lg-4 footer-intro mb-40">
							<div class="logo"><a href="<?php echo base_url(); ?>portfolio"><img src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-03.png" alt=""
										width="130"></a></div>
							<p>In this class, you will learn about the most effective machine learning techniques, and
								gain practice implementing them.</p>
							<ul class="d-flex social-icon style-none">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-sm-4 ms-auto mb-30">
							<h5 class="footer-title">Links</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/<?php echo base_url(); ?>portfolio">Home</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/pricing.html">Pricing</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/about-us2.html">About us</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/service-V1.html">Service</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/blog-V1.html">Blog</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-4 mb-30">
							<h5 class="footer-title">Services</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/service-details-V1.html">Artificial Intelligence</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/service-details-V1.html">Data Analytics</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/service-details-V1.html">Data Visualization</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/service-details-V1.html">Deep Learning</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/service-details-V1.html">Statistical Modeling</a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-lg-3 col-sm-4 mb-30">
							<h5 class="footer-title">Legal</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Terms of use</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Terms & conditions</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Privacy policy</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Cookie policy</a></li>
							</ul>
						</div>
					</div> -->

					<div class="bottom-footer">
						<div class="d-lg-flex justify-content-between align-items-center">
							<ul class="order-lg-1 pb-15 d-flex justify-content-center footer-nav style-none">
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Privacy &amp; Terms.</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">FAQ</a></li>
								<li><a href="<?php echo base_url(); ?>application/views/portfolio/contact-us.html">Contact Us</a></li>
							</ul>
							<p class="copyright text-center order-lg-0 pb-15">Copyright @2024 Neural Nest inc.</p>
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