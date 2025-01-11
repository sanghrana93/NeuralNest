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