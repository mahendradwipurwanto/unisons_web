		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
				<span><?= $gallery->title; ?></span>
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

					<div class="row">

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col-lg-8 portfolio-single-image">
							<div class="w-100 mb-5 portfolio-single-image masonry-thumbs grid-container grid-3" data-big="3" data-lightbox="gallery">
								<?php if (!empty($pictures)) : ?>
									<?php foreach ($pictures as $key) : ?>
										<a class="grid-item det-gallery border" href="<?= ($key->picture == null) ? 'https://i.ibb.co/LPnXRNG/default.png' : base_url() . 'berkas/gallery/' . $key->id_gallery . '/' . $key->picture; ?>" data-lightbox="gallery-item">
											<img src="<?= ($key->picture == null) ? 'https://i.ibb.co/LPnXRNG/default.png' : base_url() . 'berkas/gallery/' . $key->id_gallery . '/' . $key->picture; ?>" alt="<?= $key->picture; ?>">
										</a>
									<?php endforeach; ?>
								<?php else : ?>
									<a class="grid-item det-gallery border" href=https://i.ibb.co/LPnXRNG/default.png" data-lightbox="gallery-item">
										<img src="https://i.ibb.co/LPnXRNG/default.png" alt="<?= $gallery->title; ?>">
									</a>
								<?php endif; ?>
							</div><!-- .portfolio-single-image end -->
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col-lg-4 portfolio-single-content">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2><?= $gallery->title; ?></h2>
							</div>
							<p><?= $gallery->description; ?></p>
							<!-- Portfolio Single - Description End -->

							<div class="line"></div>

							<!-- Portfolio Single - Meta
							============================================= -->
							<ul class="portfolio-meta bottommargin">
								<li><span><i class="icon-user"></i>Created by:</span> Admin</li>
								<li><span><i class="icon-calendar3"></i>Uploaded on:</span>
									<?= date("d F Y", $gallery->created_at); ?></li>
								<li><span><i class="icon-lightbulb"></i>Categories:</span> <?= $gallery->categories; ?></li>
								<li><span><i class="icon-link"></i>Tags:</span><?= str_replace(",", ", ", $gallery->tags); ?>
								</li>
							</ul>
							<!-- Portfolio Single - Meta End -->

							<!-- Portfolio Single - Share
							============================================= -->
							<div class="si-share d-flex justify-content-between align-items-center mt-4">
								<span>Share:</span>
								<div>
									<?php $this_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?= $this_url ?>" class="social-icon si-borderless si-facebook" target="_blank">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://twitter.com/intent/tweet?url=<?= $this_url ?>&text=" class="social-icon si-borderless si-twitter" target="_blank">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-pinterest" target="_blank">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<a href="https://api.whatsapp.com/send?text=<?= $this_url ?>" class="social-icon si-borderless si-email3" target="_blank">
										<i class="icon-whatsapp"></i>
										<i class="icon-whatsapp"></i>
									</a>
								</div>
							</div>
							<!-- Portfolio Single - Share End -->

						</div><!-- .portfolio-single-content end -->

					</div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Others gallery:</h4>

					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
						<?php if (!empty($gallery_rand)) : ?>
							<?php foreach ($gallery_rand as $key) : ?>
								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="portfolio-single.html">
												<img src="<?= ($key->picture == null) ? 'https://i.ibb.co/LPnXRNG/default.png' : base_url() . 'berkas/gallery/' . $key->id . '/' . $key->picture; ?>" alt="<?= $key->title; ?>">
											</a>
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
													<a href="<?= ($key->picture == null) ? 'https://i.ibb.co/LPnXRNG/default.png' : base_url() . 'berkas/gallery/' . $key->id . '/' . $key->picture; ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
													<a href="<?= site_url('gallery/' . $key->permalink); ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-eye"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350">
												</div>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3><a href="portfolio-single.html">Open Imagination</a></h3>
											<span><a href="#">Media</a>, <a href="#">Icons</a></span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div><!-- .portfolio-carousel end -->

				</div>
			</div>
		</section><!-- #content end -->