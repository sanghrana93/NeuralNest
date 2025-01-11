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
        <div class="theme-inner-banner" style="background: #CCCCFF!important;">
            <div class="container">
                <h2 class="intro-title text-center">Work Gallery</h2>
                <ul class="page-breadcrumb style-none d-flex justify-content-center">
                    <li><a href="<?php echo base_url(); ?>portfolio">Home</a></li>
                    <li class="current-page">Portfolio</li>
                </ul>
            </div>
            <img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_38.svg" alt=""
                class="shapes shape-one">
            <img src="<?php echo base_url(); ?>assets/dist/css/images/shape/shape_39.svg" alt=""
                class="shapes shape-two">
        </div> <!-- /.theme-inner-banner -->

        <!-- 
			=============================================
				Demo Form
			============================================== 
			-->
        <div class="portfolio-gallery-three mt-140 mb-150 lg-mt-90 lg-mb-100">
            <div class="container mt-5 d-flex justify-content-center">
                <div class="card shadow" style="width:50%">
                    <div class="card-header text-white text-center" style="background:#DDDDDD;">
                        <h4 class="intro-title text-center mb-0" style="font-weight: 700;">Company Demo Request</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url(); ?>requestDemo" method="POST">
                            <!-- Client Name -->
                            <div class="mb-3">
                                <label for="clientName" class="form-label">Client Name</label>
                                <input type="text" class="form-control" name="clientName" placeholder="Enter your name"
                                    required>
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    required>
                            </div>

                            <!-- Company Name -->
                            <div class="mb-3">
                                <label for="companyName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="companyName"
                                    placeholder="Enter your company name" required>
                            </div>

                            <!-- Preferred Date for Demo -->
                            <div class="mb-3">
                                <label for="demoDate" class="form-label">Preferred Date for Demo</label>
                                <input type="date" class="form-control" name="demoDate" required>
                            </div>

                            <!-- Preferred Time for Demo -->
                            <div class="mb-3">
                                <label for="demoTime" class="form-label">Preferred Time for Demo</label>
                                <input type="time" class="form-control" name="demoTime" required>
                            </div>

                            <!-- Additional Notes -->
                            <div class="mb-3">
                                <label for="notes" class="form-label">Additional Notes</label>
                                <textarea class="form-control" name="notes" rows="3"
                                    placeholder="Provide any additional details or requests"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Request Demo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- 
			=============================================
				Portfolio Gallery Three
			============================================== 
			-->
        <!-- <div class="portfolio-gallery-three mt-140 mb-150 lg-mt-90 lg-mb-100">
            <div class="container">
                <ul class="style-none text-center isotop-menu-wrapper g-control-nav-one pb-30 lg-pb-10">
                    <li class="is-checked" data-filter="*">All</li>
                    <li data-filter=".dev">Development</li>
                    <li data-filter=".plugin">Plugin</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".mobile">Mobile App</li>
                    <li data-filter=".branding">Branding</li>
                </ul>

                <div id="isotop-gallery-wrapper" class="grid-3column">
                    <div class="grid-sizer"></div>
                    <div class="isotop-item plugin branding">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_01.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Data Research</span>
                                <span class="pj-name">Product Analysis</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_01.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item dev mobile">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_02.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Design</span>
                                <span class="pj-name">UI, UX Design</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_02.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item plugin design">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_03.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Marketing</span>
                                <span class="pj-name">Content Marketing</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_03.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item dev design">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_04.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Development</span>
                                <span class="pj-name">Market System</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_04.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item plugin mobile">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_05.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Marketing</span>
                                <span class="pj-name">Content Marketing</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_05.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item dev branding">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_06.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Data Research</span>
                                <span class="pj-name">Product Analysis</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_06.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item design mobile">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_07.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Development</span>
                                <span class="pj-name">Market System</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_07.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item dev design branding">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_08.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Marketing</span>
                                <span class="pj-name">Content Marketing</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_08.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                    <div class="isotop-item plugin">
                        <div class="portfolio-block-one mt-40 xs-mt-30">
                            <div class="img-meta"><img
                                    src="<?php echo base_url(); ?>assets/dist/css/images/gallery/img_04.jpg" alt=""
                                    class="w-100"></div>
                            <a href="portfolio-details-V1.html"
                                class="title tran3s d-flex flex-column justify-content-center align-items-center">
                                <span class="tag">Data Research</span>
                                <span class="pj-name">Product Analysis</span>
                            </a>
                            <div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox=""
                                    title="Click for large view" href="images/gallery/img_04.jpg" tabindex="0"><i
                                        class="bi bi-plus"></i></a></div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>  -->
        <!-- /.portfolio-gallery-three -->



        <!-- 
			=============================================
				Fancy Short Banner Five
			============================================== 
			-->
        <div class="fancy-short-banner-five">
            <div class="container">
                <div class="bg-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h3 class="pe-xxl-5 md-pb-20">Having any Query? Book an appointment.</h3>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
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
        <div class="footer-style-four space-fix-one">
            <!-- <div class="container">
                <div class="inner-wrapper">
                    
                    <div class="row">
                        <div class="col-lg-4 footer-intro mb-40">
                            <div class="logo"><a href="<?php echo base_url(); ?>portfolio"><img
                                        src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-03.png" alt=""
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
                </div> 
            </div> -->

            <?php $this->load->view('layouts/footer.php'); ?>
        </div> 
        <!-- /.footer-style-four -->


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
        <script src="<?php echo base_url(); ?>assets/dist/css/vendor/isotope.pkgd.min.js"></script>

        <!-- Theme js -->
        <script src="<?php echo base_url(); ?>assets/dist/css/js/theme.js"></script>
    </div> <!-- /.main-page-wrapper -->
</body>

</html>