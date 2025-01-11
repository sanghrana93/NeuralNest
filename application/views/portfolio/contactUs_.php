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
			<!-- <div class="theme-inner-banner" style="background: #C7E2FF!important;"> -->
			<div class="theme-inner-banner" style="background: #DDEB9F!important;">
				<div class="container">
					<h2 class="intro-title text-center">Get in Touch</h2>
					<ul class="page-breadcrumb style-none d-flex justify-content-center">
						<li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
						<li class="current-page">Contact</li>
					</ul>
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_38.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_39.svg" alt="" class="shapes shape-two">
			</div> <!-- /.theme-inner-banner -->

			
			

			<!-- 
			=============================================
				Contact Section One
			============================================== 
			-->

			<?php if (!empty($contactUsRecords)) { ?>
				<?php foreach ($contactUsRecords as $record) {
					
				?>	

			<div class="contact-section-one mb-170 lg-mb-120">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="address-block-two text-center mb-40 sm-mb-20">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_17.svg" alt=""></div>
								<h5 class="title"><?php echo htmlspecialchars($record->address_title); ?></h5>
								<p>
								    <?php echo htmlspecialchars($record->address_content); ?>
								</p>
							</div> <!-- /.address-block-two -->
						</div>
						<div class="col-md-4">
							<div class="address-block-two text-center mb-40 sm-mb-20">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_18.svg" alt=""></div>
								<h5 class="title"><?php echo htmlspecialchars($record->contact_title); ?></h5>
								<p>
									<?php echo htmlspecialchars($record->contact_content); ?>
									<!-- Open a chat or give us call at <br><a href="tel:310.841.5500" class="call">9494827797</a><br>
                                Mon - Fri: 09.00 to 17.00 -->
                                </p>
							</div> <!-- /.address-block-two -->
						</div>
						<div class="col-md-4">
							<div class="address-block-two text-center mb-40 sm-mb-20">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="<?php echo base_url(); ?>assets/dist/css/images/icon/icon_19.svg" alt=""></div>
								<h5 class="title"><?php echo htmlspecialchars($record->support_title); ?></h5>
								<p>
									<?php echo htmlspecialchars($record->support_content); ?>
									<!-- live chat service <br><a href="#" class="webaddress">support@neuralnest.net</a><br>
                                sales@neuralnest.net -->
                                </p>
							</div> <!-- /.address-block-two -->
						</div>
					</div>
				</div>

				<div class="mt-100 lg-mt-70">
					<div class="container">
						<div class="row gx-xxl-5">
							<div class="col-lg-6 d-flex order-lg-last">
								<div class="form-style-one">
									<h3 class="form-title pb-40 lg-pb-20"><?php echo htmlspecialchars($record->message_title); ?></h3>
									<div>
									<?php echo htmlspecialchars($record->message_content); ?>
										<!-- At Neural Nest LLC, we’re dedicated to empowering businesses with innovative AI-driven solutions. Whether you have questions, need assistance, or want to explore how our cutting-edge technologies can help you achieve your goals, we’re here for you. Feel free to reach out via the contact form below, or connect with us directly through email or phone. We value every opportunity to collaborate and are excited to hear from you. -->
									</div>
									<p><strong><?php echo htmlspecialchars($record->message_sub_title); ?></strong></p>
									<!-- <form action="inc/contact.php" id="contact-form"  data-toggle="validator">
										<div class="messages"></div>
										<div class="row controls">
											<div class="col-12">
												<div class="input-group-meta form-group mb-30">
													<label>Name*</label>
													<input type="text" placeholder="Your First Name*" name="name" required="required" data-error="Name is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-12">
												<div class="input-group-meta form-group mb-30">
													<label>Email*</label>
													<input type="email" placeholder="example@email.com" name="email" required="required" data-error="Valid email is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta form-group mb-30">
													<textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12"><button class="btn-eight ripple-btn">Send Message</button></div>
										</div>
									</form> -->
								</div> <!-- /.form-style-one -->
							</div>

							<div class="col-lg-6 d-flex order-lg-first">
								<div class="map-area-one mt-10 me-lg-4 md-mt-50">
									<div class="mapouter">
										<div class="gmap_canvas">
											<iframe class="gmap_iframe" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=4642%20Sierra%20Tree%20Ln,%20Irvine,%20CA%2092612&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
										</div>
									</div>
								</div> <!-- /.map-area-one -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.contact-section-one -->




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
								<a href="<?php echo base_url(); ?>productAndSolutions" class="msg-btn tran3s">Send Us Message</a>
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
			<div class="footer-style-four space-fix-one">
				<!-- <div class="container">
					<div class="inner-wrapper">
						<div class="bottom-footer">
							<div class="d-lg-flex justify-content-between align-items-center">
								<ul class="order-lg-1 pb-15 d-flex justify-content-center footer-nav style-none">
									<li><a href="faq.html">Privacy &amp; Terms.</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
								</ul>
								<p class="copyright text-center order-lg-0 pb-15">Copyright @2022 sinco inc.</p>
							</div>
						</div>
					</div> 
				</div> -->

				<?php $this->load->view('layouts/footer.php'); ?>
			</div> 
			<!-- /.footer-style-four -->


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
		<!-- validator js -->
    	<script src="<?php echo base_url(); ?>assets/dist/css/vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>