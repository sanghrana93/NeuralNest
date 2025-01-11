<?php $this->load->view('layouts/link.php'); ?>
<body>
    <style>
        /* Animations */
        /* @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        } */

        /* Banner Styles */
        /* .hero-banner {
            background: linear-gradient(-45deg, #C7E2FF, #FFFFFF, #E8EDF4, #F3F5F9);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            margin-bottom: 80px;
            overflow: hidden;
            border-radius: 0 0 50% 50% / 100px;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40"/></svg>') 0 0/50px 50px;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .hero-banner h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 25px;
            animation: fadeInUp 1s ease;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            background: linear-gradient(to right, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-banner p {
            font-size: 1.4rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeInUp 1s ease 0.3s forwards;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        } */

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

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loader"></div>
    </div>

    <div class="main-page-wrapper">
        <!-- Header -->
        <header class="theme-main-menu sticky-menu theme-menu-four">
            <div class="inner-content">
                <div class="d-flex align-items-center">
                    <div class="logo order-lg-0">
                        <a href="<?php echo base_url(); ?>portfolio" class="d-block">
                            <img src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-03.png" alt="" width="200">
                        </a>
                    </div>

                    <nav class="navbar navbar-expand-lg order-lg-2">
                        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav" id="dynamicMenu">
                                <!-- Dynamic menu will be loaded here -->
                            </ul>
                            <ul class="navbar-nav">
                                <!-- Main Menu Item -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>team" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Our Team
                                    </a>
                                    <!-- Sub-menu -->
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>teamDetailsFounder">Founder And CEO</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>teamDetailsSales">VP - Sales</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>teamDetailsArchitect">Solutions Architect</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>teamDetailsDataScientist">Data Scientist</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>contactUs_" role="button">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="hero-banner">
            <div class="container">
                <h1 id="bannerTitle"></h1>
                <p id="bannerContent"></p>
            </div>
        </div>

        <div class="container">
            <input type="checkbox" id="toggle1" class="toggle-checkbox">
            <div class="cards-container text-content" id="cardsContainer">
                <!-- Cards will be dynamically added here -->
            </div>
            <label for="toggle1" class="toggle-label"></label>
        </div>

        <!-- Footer -->
        <!-- <div class="bottom-footer">
            <div class="d-lg-flex justify-content-between align-items-center">
                <ul class="order-lg-1 d-flex justify-content-center footer-nav style-none">
                    <li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">Privacy &amp; Terms</a></li>
                    <li><a href="<?php echo base_url(); ?>application/views/portfolio/faq.html">FAQ</a></li>
                    <li><a href="<?php echo base_url(); ?>productAndSolutions">Request Demo</a></li>
                    <li><a href="<?php echo base_url(); ?>contactUs_">Contact Us</a></li>
                </ul>
                <p class="copyright text-center order-lg-0">Copyright @2024-25 Neural Nest, LLC</p>
            </div>
        </div> -->
        <?php $this->load->view('layouts/footer.php'); ?>
    </div>

    <!-- Add this modal HTML after your existing content -->
    <div class="blog-modal" id="blogModal">
        <div class="blog-modal-content">
            <div class="blog-modal-close">&times;</div>
            <h2 class="text-center mb-4">All Blog Posts</h2>
            <div class="blog-grid">
                <!-- Blog items will be dynamically added here -->
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Add loading state management
        function showLoading() {
            $('#loadingOverlay').fadeIn();
        }

        function hideLoading() {
            $('#loadingOverlay').fadeOut();
        }

        // Add animation to cards
        function animateCards() {
            $('.card-row').each(function(index) {
                $(this).css({
                    'animation-delay': `${index * 0.2}s`
                });
            });
        }

        const submenuId = '<?php echo $submenu_id; ?>';
        const baseUrl = '<?php echo base_url(); ?>';
        
        // Simplified AJAX request without authentication
        $.ajax({
            url: `${baseUrl}api/menu/list`,
            type: 'GET',
            success: function(response) {
                if (response.status && response.data) {
                    const menus = response.data;
                    let menuHtml = '';
                    
                    menus.forEach(menu => {
                        menuHtml += `
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" 
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" 
                                    aria-expanded="false">${menu.name}</a>
                                <ul class="dropdown-menu">
                        `;
                        
                        if (menu.submenus && menu.submenus.length > 0) {
                            menu.submenus.forEach(submenu => {
                                menuHtml += `
                                    <li>
                                        <a class="dropdown-item" 
                                            href="${baseUrl}content?id=${submenu.id}">
                                            <span>${submenu.name}</span>
                                        </a>
                                    </li>
                                `;
                            });
                        }
                        
                        menuHtml += `
                                </ul>
                            </li>
                        `;
                    });
                    
                    $('#dynamicMenu').html(menuHtml);
                }
            }
        });

        function renderCards(content) {
            const cardsContainer = $('#cardsContainer');
            cardsContainer.empty();

            if (content.banner.menu_name === 'Blog') {
                // Filter out empty cards first
                const validCards = content.cards.flat().filter(card => 
                    card.title || card.content || card.media_url
                );

                if (validCards.length === 0) {
                    cardsContainer.html('<div class="no-content">No blog posts available</div>');
                    return;
                }

                // Create carousel for Blog content
                const carouselHtml = `
                    <div class="blog-carousel">
                        ${validCards.length > 5 ? '<button class="view-all-blogs">View All</button>' : ''}
                        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                ${createCarouselItems(validCards.slice(0, 5))}
                            </div>
                            ${validCards.length > 1 ? `
                                <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            ` : ''}
                        </div>
                    </div>
                `;
                cardsContainer.html(carouselHtml);

                // Handle View All button only if there are more than 5 cards
                if (validCards.length > 5) {
                    $('.view-all-blogs').click(function() {
                        const blogGrid = $('.blog-grid');
                        blogGrid.empty();
                        
                        validCards.forEach(card => {
                            blogGrid.append(`
                                <div class="media-card">
                                    ${renderCardContent(card)}
                                </div>
                            `);
                        });
                        
                        $('#blogModal').fadeIn();
                    });
                }

                // Handle modal close
                $('.blog-modal-close').click(function() {
                    $('#blogModal').fadeOut();
                });

                // Close modal when clicking outside
                $(window).click(function(e) {
                    if ($(e.target).hasClass('blog-modal')) {
                        $('#blogModal').fadeOut();
                    }
                });
            } else {
                // Regular card rendering for other content
                if (content.cards && content.cards.length > 0) {
                    let hasValidContent = false;

                    content.cards.forEach(rowCards => {
                        const validRowCards = rowCards.filter(card => 
                            card.title || card.content || card.media_url
                        );

                        if (validRowCards.length > 0) {
                            hasValidContent = true;
                            const cardRow = $('<div class="card-row"></div>');
                            
                            validRowCards.forEach(card => {
                                cardRow.append(`
                                    <div class="card-col">
                                        <div class="media-card">
                                            ${renderCardContent(card)}
                                        </div>
                                    </div>
                                `);
                            });

                            cardsContainer.append(cardRow);
                        }
                    });

                    if (!hasValidContent) {
                        cardsContainer.html('<div class="no-content">No content available</div>');
                    }
                } else {
                    cardsContainer.html('<div class="no-content">No content available</div>');
                }
            }
        }

        // Helper function to create carousel items
        function createCarouselItems(cards) {
            return cards.map((card, index) => `
                <div class="carousel-item ${index === 0 ? 'active' : ''}">
                    <div class="media-card">
                        ${renderCardContent(card)}
                    </div>
                </div>
            `).join('');
        }

        // Helper function to render card content
        function renderCardContent(card) {
            let mediaContent = '';
            if (card.content_type === 'image' && card.media_url) {
                mediaContent = `
                    <div class="card-media">
                        <img src="${baseUrl}${card.media_url}" alt="${card.title}" loading="lazy">
                    </div>
                `;
            } else if (card.content_type === 'video' && card.media_url) {
                mediaContent = `
                    <div>
                        <video controls>
                            <source src="${baseUrl}${card.media_url}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                `;
            }

            const cardContent = card.content ? `<p class="card-text">${card.content}</p>` : '';
            
            return `
                ${mediaContent}
                <div class="card-body">
                    ${card.title ? `<h3 class="card-title">${card.title}</h3>` : ''}
                    ${cardContent}
                </div>
            `;
        }

        // Load content without authentication
        if (submenuId) {
            $.ajax({
                url: `${baseUrl}api/menu/content/${submenuId}`,
                type: 'GET',
                success: function(response) {
                    if (response.status && response.data) {
                        const content = response.data;
                        
                        // Update banner
                        $('#bannerTitle').text(content.banner.banner_title || '');
                        $('#bannerContent').text(content.banner.banner_content || '');
                        
                        // Render cards
                        renderCards(content);
                        animateCards();
                        
                        hideLoading();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error loading content:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to load content. Please try again.'
                    });
                    hideLoading();
                }
            });
        }
    });
    </script>

    
</body>
</html> 