    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
            <span>Showcase of Our Awesome Works</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="grid-filter-wrap">

                    <!-- Portfolio Filter
                    ============================================= -->
                    <ul class="grid-filter" data-container="#portfolio">
                        <li class="activeFilter"><a href="#" data-filter="*">Show All (<?php if (!empty($gallery)) {
                                                                                            echo count($gallery);
                                                                                        } ?>)</a></li>
                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $key) : ?>
                                <li><a href="#" data-filter=".<?= $key->categories; ?>"><?= $key->categories; ?> (<?= $this->M_admin->count_galleryOnCategories($key->id); ?>)</a></li>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </ul><!-- .grid-filter end -->

                    <div class="grid-shuffle rounded" data-container="#portfolio">
                        <i class="icon-random"></i>
                    </div>

                </div>

                <!-- Portfolio Items
                ============================================= -->
                <div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">

                    <?php if (!empty($gallery)) : ?>
                        <?php foreach ($gallery as $key) : ?>
                            <article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 <?= $key->categories; ?>">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <a href="<?= site_url('gallery/' . $key->permalink); ?>">
                                            <img src="<?= ($key->picture == null) ? 'https://i.ibb.co/LPnXRNG/default.png' : base_url() . 'berkas/gallery/' . $key->id . '/' . $key->picture; ?>" alt=" <?= $key->title; ?>">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="<?= ($key->picture == null) ? 'https://i.ibb.co/LPnXRNG/default.png' : base_url() . 'berkas/gallery/' . $key->id . '/' . $key->picture; ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="<?= $key->title; ?>"><i class="icon-line-plus"></i></a>
                                                <a href="<?= site_url('gallery/' . $key->permalink); ?>" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-eye"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc card-body px-3">
                                        <h3><a href="<?= site_url('gallery/' . $key->permalink); ?>"><?= $key->title; ?></a></h3>
                                        <span><?= str_replace(',', ', ', $key->tags) ?></span>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach ?>
                    <?php endif; ?>

                </div><!-- #portfolio end -->

            </div>
        </div>
    </section><!-- #content end -->