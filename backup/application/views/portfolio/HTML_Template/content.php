    <?php $this->load->view('layouts/link.php'); ?>
    <body>

    <style>
        /* Hero Banner Styles */
        .hero-banner {
            background: linear-gradient(45deg, #2c3e50, #3498db); /* Gradient background */
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

        /* Section Styles */
        .section {
            margin-bottom: 70px; /* Increased margin */
            padding: 50px; /* Increased padding */
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08); /* Increased shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
        }

        /* Section hover effect */
        .section:hover {
            transform: translateY(-8px); /* Increased hover effect */
            box-shadow: 0 8px 25px rgba(0,0,0,0.1); /* Increased shadow on hover */
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08); /* Increased shadow */
            transition: all 0.3s ease;
            height: 100%;
        }

        /* Card hover effect */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15); /* Increased shadow on hover */
        }

        /* Card body padding */
        .card-body {
            padding: 2.5rem; /* Increased padding */
        }

        /* Card title styles */
        .card-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1.2rem; /* Increased margin */
        }

        /* Section heading styles */
        .section h2 {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 35px; /* Increased margin */
            position: relative;
            padding-bottom: 18px; /* Increased padding */
            text-transform: uppercase; /* Uppercase text */
            letter-spacing: 1px; /* Letter spacing */
        }

        /* Underline effect for section headings */
        .section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px; /* Increased width */
            height: 4px; /* Increased height */
            background: #3498db;
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px); /* Increased translate */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animated background effect */
        @keyframes moveBackground {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 100% 100%;
            }
        }

        /* Hide section */
        .hidden-section {
            display: none;
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

    <div class="main-page-wrapper">

    <header class="theme-main-menu sticky-menu theme-menu-four">
			<div class="inner-content">
				<div class="d-flex align-items-center">
					<div class="logo order-lg-0">
						<a href="<?php echo base_url(); ?>portfolio" class="d-block">
							<img src="<?php echo base_url(); ?>assets/dist/css/images/logo/logo-03.png" alt="" width="200">
						</a>
						</div>

					<div class="right-widget d-flex align-items-center ms-auto order-lg-3 d-lg-none">
						<!-- <div class="call-button d-none d-xl-block me-5">Call us <a href="#">(+91) 9494827797</a></div> -->
						<button class="menu-search-btn tran3s" type="button" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i
								class="bi bi-search"></i></button>
						<!-- <a href="contact-us.html" class="send-msg-btn tran3s d-none d-lg-block">Send us Message</a> -->
					</div> <!-- /.right-widget -->

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
							<!-- Mobile Content -->
							<div class="mobile-content d-block d-lg-none">
								<div class="d-flex flex-column align-items-center justify-content-center mt-70">
									<a href="contact-us.html" class="send-msg-btn tran3s mb-10">Send us Message</a>
									<div class="call-button">Call us <a href="#">(+91) 9494827797</a></div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div> <!-- /.inner-content -->
</header> 


    <!-- Banner Section -->
    <div class="hero-banner" id="bannerSection">
        <div class="container">
            <h1 id="bannerTitle"></h1>
            <p id="bannerContent"></p>
        </div>
    </div>

    <div class="container">
        <!-- Cards Section -->
        <div class="section" id="cardsSection">
            <div class="row g-4">
                <div class="col-md-4" id="card1Container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" id="card1Title"></h5>
                            <input type="checkbox" id="toggle1" class="toggle-checkbox">
                            <p class="card-text text-content" id="card1Content"></p>
                            <label for="toggle1" class="toggle-label"></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="card2Container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" id="card2Title"></h5>
                            <input type="checkbox" id="toggle2" class="toggle-checkbox">
                            <p class="card-text text-content" id="card2Content"></p>
                            <label for="toggle2" class="toggle-label"></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="card3Container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" id="card3Title"></h5>
                            <input type="checkbox" id="toggle3" class="toggle-checkbox">
                            <p class="card-text text-content" id="card3Content"></p>
                            <label for="toggle3" class="toggle-label"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="section" id="servicesSection">
            <h2 id="serviceTitle"></h2>
            <div class="row mt-4 g-4">
                <div class="col-md-6" id="serviceCard1Container">
                    <div class="card">
                        <div class="card-body">
                            <h4 id="serviceCard1Title"></h4>
                            <p id="serviceCard1Content"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="serviceCard2Container">
                    <div class="card">
                        <div class="card-body">
                            <h4 id="serviceCard2Title"></h4>
                            <p id="serviceCard2Content"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Sections -->
        <div class="section" id="additionalSection">
            <div class="row g-4">
                <div class="col-md-4" id="s1Container">
                    <div class="card">
                        <div class="card-body">
                            <h3 id="s1Title"></h3>
                            <p id="s1Content"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="s2Container">
                    <div class="card">
                        <div class="card-body">
                            <h3 id="s2Title"></h3>
                            <p id="s2Content"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="s3Container">
                    <div class="card">
                        <div class="card-body">
                            <h3 id="s3Title"></h3>
                            <p id="s3Content"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Sections -->
        <div class="section" id="workpressSection">
            <h2 id="workpressTitle"></h2>
            <p id="workpressContent"></p>
        </div>

        <div class="section" id="solutionSection">
            <h2 id="solutionTitle"></h2>
            <p id="solutionContent"></p>
        </div>

        <div class="section" id="inquirySection">
            <h2 id="inquiryTitle"></h2>
            <p id="inquiryContent"></p>
        </div>
    </div>

 
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


    <script>
    $(document).ready(function() {
        const submenuId = '<?php echo $submenu_id; ?>';
        
        if (submenuId) {
            $.ajax({
                url: '<?php echo base_url("api/menu/content/"); ?>' + submenuId,
                type: 'GET',
                success: function(response) {
                    if (response.status && response.data) {
                        const content = response.data;
                        
                        // Update page title
                        document.title = content.banner_title || 'Content Page';
                        
                        // Helper function to check if a section has content
                        function hasContent(obj, keys) {
                            return keys.some(key => obj[key] && obj[key].trim() !== '');
                        }

                        // Banner Section
                        if (hasContent(content, ['banner_title', 'banner_content'])) {
                            $('#bannerTitle').text(content.banner_title);
                            $('#bannerContent').text(content.banner_content);
                        } else {
                            $('#bannerSection').addClass('hidden-section');
                        }

                        // Cards Section
                        const cards = [
                            { title: '#card1Title', content: '#card1Content', container: '#card1Container', data: { title: content.card1_title, content: content.card1_content } },
                            { title: '#card2Title', content: '#card2Content', container: '#card2Container', data: { title: content.card2_title, content: content.card2_content } },
                            { title: '#card3Title', content: '#card3Content', container: '#card3Container', data: { title: content.card3_title, content: content.card3_content } }
                        ];

                        let hasCards = false;
                        cards.forEach(card => {
                            if (hasContent(card.data, ['title', 'content'])) {
                                $(card.title).text(card.data.title);
                                $(card.content).text(card.data.content);
                                hasCards = true;
                            } else {
                                $(card.container).addClass('hidden-section');
                            }
                        });

                        if (!hasCards) {
                            $('#cardsSection').addClass('hidden-section');
                        }

                        // Services Section
                        if (hasContent(content, ['Service_title', 'Service_card_title_1', 'Service_card_content_1', 'Service_card_title_2', 'Service_card_content_2'])) {
                            $('#serviceTitle').text(content.Service_title);
                            $('#serviceCard1Title').text(content.Service_card_title_1);
                            $('#serviceCard1Content').text(content.Service_card_content_1);
                            $('#serviceCard2Title').text(content.Service_card_title_2);
                            $('#serviceCard2Content').text(content.Service_card_content_2);
                        } else {
                            $('#servicesSection').addClass('hidden-section');
                        }

                        // Additional Sections
                        const additionalSections = [
                            { title: '#s1Title', content: '#s1Content', container: '#s1Container', data: { title: content.S1_title, content: content.S1_content } },
                            { title: '#s2Title', content: '#s2Content', container: '#s2Container', data: { title: content.S2_title, content: content.S2_content } },
                            { title: '#s3Title', content: '#s3Content', container: '#s3Container', data: { title: content.S3_title, content: content.S3_content } }
                        ];

                        let hasAdditionalSections = false;
                        additionalSections.forEach(section => {
                            if (hasContent(section.data, ['title', 'content'])) {
                                $(section.title).text(section.data.title);
                                $(section.content).text(section.data.content);
                                hasAdditionalSections = true;
                            } else {
                                $(section.container).addClass('hidden-section');
                            }
                        });

                        if (!hasAdditionalSections) {
                            $('#additionalSection').addClass('hidden-section');
                        }

                        // Other Sections
                        ['workpress', 'solution', 'inquiry'].forEach(section => {
                            const titleKey = section === 'inquiry' ? 'Inquary_Title' : `${section}_title`;
                            const contentKey = section === 'inquiry' ? 'Inquary_content' : `${section}_content`;
                            
                            if (hasContent(content, [titleKey, contentKey])) {
                                $(`#${section}Title`).text(content[titleKey]);
                                $(`#${section}Content`).text(content[contentKey]);
                            } else {
                                $(`#${section}Section`).addClass('hidden-section');
                            }
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error loading content:', error);
                }
            });
        }
    });
    </script>

<script>
$(document).ready(function() {
	// Load menu data
	$.ajax({
		url: '<?php echo base_url("api/menu/list"); ?>',
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
										href="<?php echo base_url(); ?>content?id=${submenu.id}">
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
		},
		error: function(xhr, status, error) {
			console.error('Error loading menu:', error);
		}
	});
});
</script> 


</div>
</body>
</html> 