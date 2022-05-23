		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-mini">

			<div class="container clearfix">
				<h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
				<span>Everything you need to know about our Company</span>
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

					<div class="row mb-0">

						<div class="col-12">

							<div class="heading-block center border-bottom-0">
								<h2><?= $web_title; ?></h2>
								<span style="max-width: 100%;"><?= $web_about; ?></span>
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- <?php if (!empty($featured_about)) : ?>
				<div class="container clearfix">

					<div class="row col-mb-50 mb-0">

						<?php foreach ($featured_about as $key) : ?>
							<div class="col-lg-4">

								<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
									<h4><?= $key->name; ?></h4>
								</div>

								<p><?= $key->value; ?></p>

							</div>
						<?php endforeach; ?>

					</div>

				</div>
			<?php endif; ?> -->
			<br><br><br>
		</section><!-- #content end -->