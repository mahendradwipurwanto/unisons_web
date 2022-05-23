<style>
    .center .heading-block::after,
    .text-center .heading-block::after,
    .heading-block.center::after,
    .heading-block.text-center::after {
        margin: 10px auto 0;
    }
</style>

<?php if (!empty($hero)) : ?>

    <section id="slider" class="slider-element revslider-wrap h-auto include-header">

        <div id="rev_slider_143_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="paintbrush-addon" data-source="gallery" style="background:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_slider_143_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
                <ul>
                    <?php foreach ($hero as $key) : ?>
                        <!-- SLIDE  -->
                        <li data-index="rs-361" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?= base_url(); ?>berkas/hero/<?= $key->image; ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-revaddonpaintbrush='{"size":200,"origsize":200,"blurAmount":10,"fadetime":600,"image":"<?= base_url(); ?>berkas/hero/<?= $key->image; ?>","edgefix":10,"fixedges":true,"style":"round","blur":true,"scaleblur":false,"responsive":false,"disappear":true,"carousel":false}' data-revaddonpaintbrushedges="1">
                            <!-- MAIN IMAGE -->
                            <img src="<?= base_url(); ?>berkas/hero/<?= $key->image; ?>" alt="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2" id="slide-361-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['375','295','295','245']" data-width="360" data-height="3" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:-45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:0deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgb(255,255,255);">
                                <div class="rs-looped rs-slideloop" data-easing="Linear.easeNone" data-speed="5" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"> </div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-1" id="slide-361-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['375','295','295','245']" data-width="360" data-height="3" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:-45deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(255,255,255);">
                                <div class="rs-looped rs-slideloop" data-easing="Linear.easeNone" data-speed="5" data-xs="0" data-xe="0" data-ys="10" data-ye="-10"> </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-361-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['310','230','240','208']" data-fontsize="['50','50','40','25']" data-lineheight="['60','60','50','35']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"x:-150px;z:0;rX:0deg;rY:-45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:150px;rY:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,2]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[10,10,10,10]" style="z-index: 7; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
                                <div class="rs-looped rs-slideloop" data-easing="Linear.easeNone" data-speed="10" data-xs="-20" data-xe="20" data-ys="0" data-ye="0">Welcome to<div class='frontcornertop'></div>
                                    <div class='backcornertop'></div>
                                </div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-10" id="slide-361-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['378','298','298','248']" data-fontsize="['50','50','40','25']" data-lineheight="['60','60','50','35']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:150px;z:0;rX:0deg;rY:45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:-150px;rY:-45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,2]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[10,10,10,10]" style="z-index: 8; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
                                <div class="rs-looped rs-slideloop" data-easing="Linear.easeNone" data-speed="10" data-xs="20" data-xe="-20" data-ys="0" data-ye="0"><?= $key->name; ?><div class='frontcorner'></div>
                                    <div class='backcorner'></div>
                                </div>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-361-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['600','520','520','430']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:100px;z:0;rX:-45deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"y:50px;rX:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 300; color: #000000; letter-spacing: 0px;font-family:Poppins;"><span style="font-weight:600;">Collection NFT</span><br />Now Available exclusively<br />
                                on our opensea account. </div>

                            <!-- LAYER NR. 6 -->
                            <a class="tp-caption   tp-resizeme rs-parallaxlevel-13" href="https://opensea.io/Unisons_CryptoLab?tab=created_collections" target="_blank" id="slide-361-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['730','650','650','570']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"y:100px;z:0;rX:-45deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"y:50px;rX:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Power1.easeInOut","to":"o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[2,2,2,2]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[7,7,7,7]" style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 28px; font-weight: 700; color: #000000; letter-spacing: 5px;font-family:Poppins;border-color:rgb(0,0,0);border-style:solid;border-width:3px 3px 3px 3px;cursor:pointer;text-decoration: none;">Opensea page </a>
                        </li>
                        <!-- SLIDE  -->
                    <?php endforeach; ?>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </section>
<?php endif; ?>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">

        <?php if (!empty($featured_hero)) : ?>
            <div class="promo promo-full p-5 header-stick bottommargin-lg">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3><?= $featured_hero->name; ?></h3>
                            <span><?= $featured_hero->value; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- <?php if (!empty($featured_list)) : ?>
            <div class="container clearfix">

                <div class="row col-mb-50">
                    <?php foreach ($featured_list as $key) : ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-effect">
                                <div class="fbox-icon">
                                    <a href="#"><i class="<?= $key->image; ?> i-alt"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3><?= $key->name; ?></h3>
                                    <p><?= $key->value; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        <?php endif; ?> -->
        <!-- <div class="clear"></div>
        <div class="line"></div> -->

        <div class="section mt-0 border-top-0">
            <div class="container center clearfix">
                <div class="heading-block center m-0">
                    <h3>Latest from us</h3>
                </div>
                <a href="https://opensea.io/Unisons_CryptoLab?tab=created_collections" target="_blank" class="button button-small button-circle button-border button-aqua mt-2"><i class="icon-desktop"></i>visit our opensea page</a>
            </div>
        </div>

        <div class="container">
            <div class="row posts-md col-mb-30">

                <?php if (!empty($collection)) : ?>
                    <?php foreach ($collection as $key) : ?>
                        <?php if (empty($key['primary_asset_contracts'])) : ?>
                            <div class="product col-md-3 col-sm-6 sf-dress">
                                <div class="grid-inner">
                                    <div class="product-image photo">
                                        <a href="#"><img src="<?= !empty($key['featured_image_url']) ? $key['featured_image_url'] : $key['image_url']; ?>" alt="<?= $key['name']; ?>"></a>
                                        <div class="sale-flash badge badge-secondary p-2"><?= $key['stats']['count']; ?> Items</div>
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

            </div>
        </div>
    </div>
</section><!-- #content end -->