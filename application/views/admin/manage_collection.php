<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Manage Collection</h2>
    </div>
    <div class="col-4">
        <a href="https://opensea.io/Unisons_CryptoLab?tab=created_collections" target="_blank" class="btn btn-info float-right"><i class="fa-solid fa-up-right-from-square mr-1"></i> Check your opensea account</a>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12">
        <div class="alert alert-info">
            <i class="icon-line-codepen"></i><strong>New collection data's!</strong> This new collection list is from your opensea account, we get this data using opensea API, please contact us if you want adding another features on this.
        </div>
    </div>
</div>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pt-4">
        <div class="container-fuild clearfix">

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
                                    <div class="product col-md-3 col-sm-6 sf-dress mb-3">
                                        <div class="grid-inner card">
                                            <div class=" product-image photo">
                                                <a href="#"><img src="<?= !empty($key['featured_image_url']) ? $key['featured_image_url'] : $key['image_url']; ?>" alt="<?= $key['name']; ?>"></a>
                                                <div class="sale-flash badge badge-secondary p-2"><?= $key['stats']['count']; ?> Items</div>
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                                        <a href="<?= site_url('home/item-detail/' . $key['slug']); ?>" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                                    </div>
                                                    <div class="bg-overlay-bg bg-transparent"></div>
                                                </div>
                                            </div>
                                            <div class="product-desc px-3">
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
            </div>

        </div>
    </div>
</section><!-- #content end -->