<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu" data-mobile-sticky="true">
    <div id="page-menu-wrap">
        <div class="container">
            <div class="page-menu-row" style="height: 50px;">

                <div class="page-menu-title">What is <span>Union Care</span></div>

                <div id="page-menu-trigger"><i class="icon-reorder"></i></div>

            </div>
        </div>
    </div>
</div><!-- #page-menu end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <p><?= (!empty($w_unionCare)) ? $w_unionCare : ' - ';?></p>

        </div>
    </div>
</section><!-- #content end -->