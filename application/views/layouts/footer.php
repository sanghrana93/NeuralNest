<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Data Science, Analytics, Data, sass, software company">
	<meta name="description"
		content="Sinco - Data Science & Analytics HTML5 Template is designed especially for the agency, multipurpose and business and those who offer business-related services.">
	<meta property="og:site_name" content="Sinco">
	<meta property="og:url" content="https://heloshape.com/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Sinco - Data Science & Analytics HTML5 Template">
	<meta name='og:image' content='images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#913BFF">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#913BFF">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">
	<title>Neural Nest, LLC</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo base_url(); ?>assets/dist/css/images/fav-icon/icon-02.png">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/css/css/style.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/css/css/responsive.css" media="all">
	<!-- navbar style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/css/css/navbar.css" media="all">
	<!-- framework style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/css/css/framework.css" media="all">
	<!-- custom-animation style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/css/css/custom-animation.css" media="all">
	<!-- custom-animation style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/css/css/animate.min.css" media="all">

	<!-- AOS CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

	<style>
		.hero-banner {
            /* background: linear-gradient(45deg, #2c3e50, #3498db); Gradient background */
            background: linear-gradient(45deg, #3495D6, #C7E2FF); /* Gradient background */
            color: white;
            padding: 100px 0; /* Increased padding */
            margin-bottom: 70px; /* Increased margin */
            position: relative;
            overflow: hidden;
            /* Add transition for smooth background changes */
            transition: background 0.5s ease;
        }
        
        /* Animated background effect */
        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.05); /* Subtle overlay */
            animation: moveBackground 10s linear infinite; /* Animated overlay */
        }

        /* Wave effect at the bottom */
        .hero-banner::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 120px; /* Increased height */
            background: linear-gradient(to bottom right, transparent 49%, white 50%);
        }

        /* Hero banner heading */
        .hero-banner h1 {
            font-size: 4rem; /* Increased font size */
            font-weight: 700;
            margin-bottom: 25px; /* Increased margin */
            animation: fadeInUp 1s ease; /* Fade-in animation */
            margin-top: 100px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2); /* Text shadow for depth */
        }

        /* Hero banner paragraph */
        .hero-banner p {
            font-size: 1.3rem; /* Increased font size */
            line-height: 1.9; /* Increased line height */
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s; /* Delayed fade-in animation */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1); /* Text shadow for depth */
        }

        /* Cards Container */
        .cards-container {
            padding: 60px 30px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 50px;
            margin: 40px 0;
            position: relative;
            overflow: hidden;
        }

        .cards-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 60%);
            animation: rotate 30s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .card-row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .card-col {
            flex: 1;
            min-width: 300px;
            transition: transform 0.3s ease;
        }

        .card-col:hover {
            transform: translateY(-10px);
        }

        /* Media Card Styles */
        .media-card {
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.95);
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
        }

        .media-card .card-media {
            position: relative;
            padding-top: 75%; /* 4:3 Aspect Ratio */
            overflow: hidden;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        .media-card .card-media::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .media-card:hover .card-media::before {
            opacity: 1;
        }

        .media-card .card-media img,
        .media-card .card-media video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 0;
        }

        .media-card:hover .card-media img,
        .media-card:hover .card-media video {
            transform: scale(1.1) rotate(-2deg);
        }

        /* Video specific styles */
        .media-card .card-media video {
            object-fit: cover;
        }

        .media-card .card-media video::-webkit-media-controls {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            margin: 10px;
        }

        /* Add overlay effect for images */
        .media-card .card-media.image-media::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent
            );
            transform: skewX(-25deg);
            transition: 0.5s;
            z-index: 2;
        }

        .media-card:hover .card-media.image-media::after {
            left: 100%;
        }

        /* Add zoom icon for images */
        .media-card .card-media.image-media::before {
            content: '\f00e'; /* FontAwesome zoom icon */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            color: white;
            font-size: 2rem;
            z-index: 3;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .media-card:hover .card-media.image-media::before {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        /* Play button for videos */
        .media-card .card-media.video-media::before {
            content: '\f144'; /* FontAwesome play icon */
            font-family: 'Font Awesome 5 Free';
            font-weight: 400;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3rem;
            z-index: 3;
            opacity: 0;
            transition: all 0.3s ease;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        .media-card:hover .card-media.video-media::before {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }

        /* Card body enhancements */
        .media-card .card-body {
            padding: 25px;
            background: white;
            position: relative;
            z-index: 1;
        }

        .media-card .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 15px;
        }

        .media-card .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, #3498db, #2c3e50);
            border-radius: 3px;
            transition: width 0.3s ease;
        }

        .media-card:hover .card-title::after {
            width: 100px;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #2c3e50, #3498db);
            border-radius: 5px;
        }

        /* Footer Enhancement */
        .bottom-footer {
            background: linear-gradient(45deg, #2c3e50, #3498db);
            padding: 40px 0;
            margin-top: 80px;
            border-radius: 50px 50px 0 0;
            position: relative;
            overflow: hidden;
        }

        .bottom-footer .d-lg-flex {
            padding: 0 40px;
        }

        .footer-nav {
            gap: 30px;
            margin: 0;
            padding: 15px 0;
        }

        .footer-nav li {
            padding: 0 20px;
        }

        .footer-nav a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            position: relative;
            padding: 8px 0;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .footer-nav a:hover {
            color: #ffffff;
        }

        .footer-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .footer-nav a:hover::after {
            width: 100%;
        }

        .copyright {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            padding: 15px 0;
            margin: 0;
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: #3498db;
            position: relative;
            animation: spin 1s ease-in-out infinite;
        }

        .loader::before,
        .loader::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            border: 3px solid transparent;
        }

        .loader::before {
            width: 40px;
            height: 40px;
            border-top-color: #2c3e50;
            animation: spin 0.8s ease-in-out infinite reverse;
        }

        .loader::after {
            width: 20px;
            height: 20px;
            border-top-color: #e74c3c;
            animation: spin 0.6s ease-in-out infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .hero-banner {
                border-radius: 0 0 30% 30% / 50px;
            }
            
            .cards-container {
                border-radius: 30px;
                padding: 40px 20px;
            }

            .bottom-footer {
                border-radius: 30px 30px 0 0;
                padding: 30px 0;
            }

            .bottom-footer .d-lg-flex {
                padding: 0 20px;
            }

            .footer-nav {
                margin-bottom: 20px;
            }

            .footer-nav li {
                padding: 0 15px;
            }
        }

        @media (max-width: 575px) {
            .hero-banner {
                border-radius: 0 0 20% 20% / 30px;
            }

            .cards-container {
                border-radius: 20px;
                padding: 30px 15px;
            }

            .bottom-footer {
                border-radius: 20px 20px 0 0;
                padding: 25px 0;
            }

            .bottom-footer .d-lg-flex {
                padding: 0 15px;
            }

            .footer-nav li {
                padding: 0 10px;
            }

            .footer-nav a {
                font-size: 1rem;
            }

            .copyright {
                font-size: 1rem;
            }

            .media-card {
                border-radius: 20px;
            }

            .media-card .card-media {
                border-radius: 20px 20px 0 0;
            }

            .media-card .card-body {
                border-radius: 0 0 20px 20px;
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .media-card .card-media {
                padding-top: 66.67%; /* 3:2 Aspect Ratio for mobile */
            }

            .media-card .card-body {
                padding: 20px;
            }

            .media-card .card-title {
                font-size: 1.2rem;
            }
        }

        /* Blog Slider Styles */
        .blog-carousel {
            padding: 40px 0;
            position: relative;
        }

        .blog-carousel .carousel-control-prev,
        .blog-carousel .carousel-control-next {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .blog-carousel .carousel-control-prev-icon,
        .blog-carousel .carousel-control-next-icon {
            filter: invert(1) grayscale(100);
        }

        .view-all-blogs {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 8px 25px;
            background: linear-gradient(-45deg, #ee7752, #e73c7e);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .view-all-blogs:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Blog Modal Styles */
        .blog-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 1050;
            overflow-y: auto;
            padding: 20px;
        }

        .blog-modal-content {
            max-width: 1200px;
            margin: 40px auto;
            background: white;
            border-radius: 20px;
            position: relative;
            padding: 30px;
        }

        .blog-modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #333;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .blog-modal-close:hover {
            transform: rotate(90deg);
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        /* Ellipse */
        .text-container {
            position: relative;
            width: 400px; /* Adjust as needed */
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        .text-content {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            max-height: 6em; /* Approximate height for 250 characters (adjust based on font-size and line-height) */
            line-height: 1.5em;
            transition: max-height 0.3s ease;
        }

        .toggle-checkbox {
            display: none; /* Hide the checkbox */
        }

        .toggle-label {
            display: block;
            margin-top: 10px;
            color: #3498db;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            text-align: left;
        }

        .toggle-label::after {
            content: "Read More"; /* Default label */
        }

        .toggle-checkbox:checked ~ .text-content {
            max-height: 100%; /* Expand to show full content */
        }

        .toggle-checkbox:checked ~ .toggle-label::after {
            content: "Read Less"; /* Change label to 'Read Less' */
        }
	</style>
</head>

<body>

	<!-- Footer -->
	<footer>
        <div class="bottom-footer">
            <div class="d-lg-flex justify-content-between align-items-center">
                <ul class="order-lg-1 d-flex justify-content-center footer-nav style-none">
                    <!-- <li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Privacy &amp; Terms</a></li> -->
                    <li><a href="<?php echo base_url(); ?>portfolio">Home</a></li> 
                    <li><a href="<?php echo base_url(); ?>productAndSolutions">Request Demo</a></li>
                    <li><a href="<?php echo base_url(); ?>contactUs_">Contact Us</a></li>
                </ul>
                <p class="copyright text-center order-lg-0">Copyright @2024-25 Neural Nest, LLC</p>
            </div>
        </div>
	</footer>
	

	<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AOS js -->
		<script src="<?php echo base_url(); ?>assets/dist/css/vendor/aos-next/dist/aos.js"></script>
		<!-- AOS JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
		<script> AOS.init(); </script>
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
</body>