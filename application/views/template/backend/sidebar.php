		<header id="header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div class="my-3 w-100">
							<a href="<?= base_url(); ?>" class="standard-logo" data-dark-logo="<?= base_url(); ?>berkas/<?= $logo2; ?>" data-mobile-logo="<?= base_url(); ?>berkas/<?= $logo2; ?>">
								<img src="<?= base_url(); ?>berkas/<?= $logo2; ?>" alt="<?= $web_title; ?>" style="height: 65px !important;">
							</a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100">
								<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
								</path>
								<path d="m 30,50 h 40"></path>
								<path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
								</path>
							</svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu on-click">

							<ul class="menu-container">
								<li class="menu-item" id="tour-landing">
									<a class="menu-link" href="<?= base_url(); ?>">
										<div>Landing page</div>
									</a>
								</li>
								<li class="menu-item" id="tour-dashboard">
									<a class="menu-link" href="<?= site_url('dashboard'); ?>">
										<div>Dashboard</div>
									</a>
								</li>
								<li class="menu-item" id="tour-information">
									<a class="menu-link" href="<?= site_url('dashboard/information'); ?>">
										<div>Information</div>
									</a>
								</li>
								<li class="menu-item" id="tour-gallery">
									<a class="menu-link">
										<div>Gallery</div>
									</a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="<?= site_url('dashboard/list-gallery'); ?>">
												<div>See gallery</div>
											</a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="<?= site_url('dashboard/add-new-gallery'); ?>">
												<div>Add new</div>
											</a>
										</li>
									</ul>
								</li>
								<li class="menu-item" id="tour-collection">
									<a class="menu-link" href="<?= site_url('dashboard/manage-collection'); ?>">
										<div>Collection</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="<?= site_url('logout'); ?>">
										<div>Logout</div>
									</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->