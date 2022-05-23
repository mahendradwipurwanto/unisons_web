<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
		<span>Our newest collection on <a href="https://opensea.io/Unisons_CryptoLab?tab=created_collections" target="_blank" class="text-aqua font-weight-bold">OpenSea</a></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<div class="row gutter-40 col-mb-80">
				<!-- Post Content
						============================================= -->
				<div class="postcontent col-lg-12 order-lg-last">

					<!-- Shop
							============================================= -->
					<div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
						<?php if (!empty($collection)) : ?>
							<?php foreach ($collection as $key) : ?>
								<?php if (empty($key['primary_asset_contracts']) && $key['slug'] != 'goddess-on-the-blockchain') : ?>
									<div class="product col-md-3 col-sm-6 sf-dress">
										<div class="grid-inner">
											<div class="product-image photo">
												<a href="#"><img src="<?= !empty($key['featured_image_url']) ? $key['featured_image_url'] : $key['image_url']; ?>" alt="<?= $key['name']; ?>"></a>
												<div class="sale-flash badge bg-aqua p-2"><?= $key['stats']['count']; ?> Items</div>
												<div class="bg-overlay">
													<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
														<a href="<?= site_url('home/item-detail/' . $key['slug']); ?>" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
													</div>
													<div class="bg-overlay-bg bg-transparent"></div>
												</div>
											</div>
											<div class="product-desc">
												<div class="product-title">
													<h3><a href="<?= site_url('home/item-detail/' . $key['slug']); ?>" data-lightbox="ajax"><?= $key['name']; ?></a></h3>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>

					</div><!-- #shop end -->

				</div><!-- .postcontent end -->

				<!-- Sidebar
						============================================= -->
				<!-- <div class="sidebar col-lg-3">
					<div class="sidebar-widgets-wrap">

						<div class="widget widget-filter-links">

							<h4>Select Category</h4>
							<ul class="custom-filter pl-2" data-container="#shop" data-active-class="active-filter">
								<li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
								<li><a href="#" data-filter=".sf-dress">Dress</a></li>
								<li><a href="#" data-filter=".sf-tshirts">Tshirts</a></li>
								<li><a href="#" data-filter=".sf-pants">Pants</a></li>
								<li><a href="#" data-filter=".sf-sunglasses">Sunglasses</a></li>
								<li><a href="#" data-filter=".sf-shoes">Shoes</a></li>
								<li><a href="#" data-filter=".sf-watches">Watches</a></li>
							</ul>

						</div>

						<div class="widget widget-filter-links">

							<h4>Sort By</h4>
							<ul class="shop-sorting pl-2">
								<li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
								<li><a href="#" data-sort-by="name">Name</a></li>
								<li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
								<li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
							</ul>

						</div>

					</div>
				</div> -->
				<!-- .sidebar end -->
			</div>

		</div>
	</div>
</section><!-- #content end -->