<!DOCTYPE html>
<html>
	<!-- HTML HEAD -->
	<?php 
		include('includes/head.php');
	?>
	<!-- /HTML HEAD -->
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<!-- Top NavBar -->
			<?php include('includes/top-nav.php'); ?>
		<!-- Top NavBar -->

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- sidebar-left -->
		<?php include('includes/sidebar.php'); ?>
		<!-- /sidebar-left -->
		
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>pricing Table</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											pricing Table
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

					<div class="container px-0">
						<h4 class="mb-30 text-blue h4">Pricing Table Style 1</h4>
						<div class="row">
							<div class="col-md-4 mb-30">
								<div class="card-box pricing-card mt-30 mb-30">
									<div class="pricing-icon">
										<img src="vendors/images/icon-Cash.png" alt="" />
									</div>
									<div class="price-title">Beginner</div>
									<div class="pricing-price"><sup>$</sup>49<sub>/mo</sub></div>
									<div class="text">
										Card servicing<br />
										for 1month
									</div>
									<div class="cta">
										<a href="#" class="btn btn-primary btn-rounded btn-lg"
											>Order Now</a
										>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-30">
								<div class="card-box pricing-card mt-30 mb-30">
									<div class="pricing-icon">
										<img src="vendors/images/icon-debit.png" alt="" />
									</div>
									<div class="price-title">expert</div>
									<div class="pricing-price"><sup>$</sup>199<sub>/mo</sub></div>
									<div class="text">
										Card servicing<br />
										for 6month
									</div>
									<div class="cta">
										<a href="#" class="btn btn-primary btn-rounded btn-lg"
											>Order Now</a
										>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-30">
								<div class="card-box pricing-card mt-30 mb-30">
									<div class="pricing-icon">
										<img src="vendors/images/icon-online-wallet.png" alt="" />
									</div>
									<div class="price-title">experience</div>
									<div class="pricing-price"><sup>$</sup>599<sub>/yr</sub></div>
									<div class="text">
										Card servicing<br />
										for 1year
									</div>
									<div class="cta">
										<a href="#" class="btn btn-primary btn-rounded btn-lg"
											>Order Now</a
										>
									</div>
								</div>
							</div>
						</div>

						<h4 class="mb-30 mt-30 text-blue h4">Pricing Table Style 2</h4>
						<div class="row">
							<div class="col-md-4 mb-30">
								<div class="card-box pricing-card-style2">
									<div class="pricing-card-header">
										<div class="left">
											<h5>Standard</h5>
											<p>For small businesses</p>
										</div>
										<div class="right">
											<div class="pricing-price">€10<span>/month</span></div>
										</div>
									</div>
									<div class="pricing-card-body">
										<div class="pricing-points">
											<ul>
												<li>2 TB of space</li>
												<li>120 days of file recovery</li>
												<li>Smart Sync</li>
												<li>Dropbox Paper admin tools</li>
												<li>Granular sharing permissions</li>
												<li>User and company-managed groups</li>
												<li>Live chat support</li>
											</ul>
										</div>
									</div>
									<div class="cta">
										<a href="#" class="btn btn-primary btn-rounded btn-lg"
											>Get Started</a
										>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-30">
								<div class="card-box pricing-card-style2">
									<div class="pricing-card-header">
										<div class="left">
											<h5>Advanced</h5>
											<p>For big businesses</p>
										</div>
										<div class="right">
											<div class="pricing-price">€15<span>/month</span></div>
										</div>
									</div>
									<div class="pricing-card-body">
										<div class="pricing-points">
											<ul>
												<li>Everything in Standard</li>
												<li>As much space as needed</li>
												<li>Advanced admin controls</li>
												<li>Dropbox Showcase</li>
												<li>Tiered admin roles</li>
												<li>Advanced user management tools</li>
												<li>Domain verification</li>
											</ul>
										</div>
									</div>
									<div class="cta">
										<a href="#" class="btn btn-primary btn-rounded btn-lg"
											>Get Started</a
										>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-30">
								<div class="card-box pricing-card-style2">
									<div class="pricing-card-header">
										<div class="left">
											<h5>Enterprise</h5>
											<p>For enterprises</p>
										</div>
										<div class="right">
											<div class="pricing-price">€25<span>/month</span></div>
										</div>
									</div>
									<div class="pricing-card-body">
										<div class="pricing-points">
											<ul>
												<li>Everything in Advanced</li>
												<li>Account Capture</li>
												<li>Network control</li>
												<li>Enterprise management support</li>
												<li>Domain Insights</li>
												<li>Advanced training for end users</li>
												<li>24/7 phone support</li>
											</ul>
										</div>
									</div>
									<div class="cta">
										<a href="#" class="btn btn-primary btn-rounded btn-lg"
											>Get Started</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-wrap pd-20 mb-20 card-box">
						DeskApp - Bootstrap 4 Admin Template By
						<a href="https://github.com/dropways" target="_blank"
							>Ankit Hingarajiya</a
						>
					</div>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
