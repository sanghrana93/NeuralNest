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

			<div class="container mt-5">
				<h2>Blogs</h2>
				<?php foreach ($blogs as $blog): ?>
				<div class="card mb-3">
					<div class="card-body">
						<h3><?= $blog->title ?></h3>
						<p><?= $blog->content ?></p>
						<?php if ($blog->image): ?>
						<img src="<?= base_url('uploads/img/' . $blog->image) ?>" class="img-fluid">
						<?php endif; ?>
						<?php if ($blog->video): ?>
						<div class="mt-3">
							<video controls width="100%">
								<source src="<?= base_url('uploads/videos/' . $blog->video) ?>" type="video/mp4">
							</video>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

			<!-- End -->

			<div class="theme-inner-banner" style="background: #E9F2BF!important;">
				<div class="container">
					<h2 class="intro-title text-center">Blog Grid</h2>
					<ul class="page-breadcrumb style-none d-flex justify-content-center">
						<li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
						<li class="current-page">Blog</li>
					</ul>
				</div>
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_38.svg" alt="" class="shapes shape-one">
				<img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_39.svg" alt="" class="shapes shape-two">
			</div> <!-- /.theme-inner-banner -->
			


			<!--
			=====================================================
				Blog Section Three
			=====================================================
			-->
			<div class="blog-section-three pt-90 mb-150 lg-pt-40 lg-mb-100">
				<div class="container">
					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_01.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Make more daily productive  working flow like pro.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_02.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">UI/UX Design</a> - 10 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Internet of the things and why it’s becoming important in the century.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_03.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Marketing</a> - 8 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>The power product and the quotient rules.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_08.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Make more daily productive  working flow like pro.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_09.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">UI/UX Design</a> - 10 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Internet of the things and why it’s becoming important in the century.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_10.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Marketing</a> - 8 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>The power product and the quotient rules.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_11.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Data Science</a> - 15 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Make more daily productive  working flow like pro.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_12.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">UI/UX Design</a> - 10 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>Internet of the things and why it’s becoming important in the century.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
							<article class="blog-meta-one color-two tran3s mt-45">
								<figure class="post-img m0"><a href="blog-details.html" class="w-100 d-block"><img src="<?php echo base_url(); ?>assets/dist/css/images/blog/blog_img_13.jpg" alt="" class="w-100 tran4s"></a></figure>
								<div class="post-data">
									<div class="post-tag"><a href="blog-details.html">Marketing</a> - 8 minute read</div>
									<a href="blog-details.html" class="blog-title"><h5>The power product and the quotient rules.</h5></a>
								</div> <!-- /.post-data -->
							</article>
						</div>
					</div> <!-- /.row -->
					<div class="page-pagination-one pt-90">
						<ul class="d-flex align-items-center justify-content-center style-none">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.blog-section-three -->



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
		<!-- isotop -->
		<script  src="<?php echo base_url(); ?>assets/dist/css/vendor/isotope.pkgd.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>