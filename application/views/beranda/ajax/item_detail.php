                <div class="single-product shop-quick-view-ajax">

                    <div class="ajax-modal-title">
                        <h2><?= $data['collection']['name']; ?></h2>
                    </div>

                    <div class="product modal-padding">

                        <div class="row gutter-40 col-mb-50">
                            <div class="col-md-6">
                                <div class="product-image">
                                    <div class="slide">
                                        <a href="<?= !empty($data['collection']['featured_image_url']) ? $data['collection']['featured_image_url'] : $data['collection']['image_url'] ?>" title="<?= $data['collection']['name']; ?>" class="photo-ajax">
                                            <img src="<?= !empty($data['collection']['featured_image_url']) ? $data['collection']['featured_image_url'] : $data['collection']['image_url']; ?>" alt="<?= $data['collection']['name']; ?>">
                                        </a>
                                    </div>
                                    <div class="sale-flash badge badge-danger p-2"><?= $data['collection']['stats']['count']; ?> Items</div>
                                </div>
                            </div>
                            <div class="col-md-6 product-desc pt-0">
                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                                <div class="cart mb-0 mt-0">
                                    <a href="https://opensea.io/collection/<?= $data['collection']['slug']; ?>" target="_blank" class="btn bg-info btn-block text-center button m-0">Check on OpenSea</a>
                                </div><!-- Product Single - Quantity & Cart Button End -->

                                <div class="clear"></div>
                                <div class="line"></div>
                                <p class="collection-box"><?= !empty($data['collection']['description'] && $data['collection']['description']) ? $data['collection']['description'] : 'Explore the ' . $data['collection']['name'] . ' collection'; ?></p>
                                <ul class="iconlist">
                                    <?php if (!empty($data['collection']['payment_tokens'])) : ?>
                                        <?php foreach ($data['collection']['payment_tokens'] as $key) : ?>
                                            <li class="mb-2"><i class="icon-caret-right"></i>
                                                <img src="<?= $key['image_url']; ?>" alt="<?= $key['name']; ?>" width="20px" height="25px" class="mr-1">
                                                <?= $key['eth_price']; ?> <span style="font: 15px;"><?= $key['name']; ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                                <div class="card product-meta mb-3">
                                    <div class="card-body py-2">
                                        <span class="posted_in">
                                            <div class="product-price text-muted" style="font-size: 1.4rem;"><span style="font-size: 15px; margin-right: 10px">Floor Price</span><img src="https://storage.opensea.io/files/6f8e2979d428180222796ff4a33ab929.svg" width="20px" height="25px" style="margin-top:-3px" class="mr-1"><?= empty($data['collection']['stats']['floor_price']) ? '---' : $data['collection']['stats']['floor_price']; ?></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>