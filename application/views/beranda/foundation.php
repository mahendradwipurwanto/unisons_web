<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
        <span>See list of our foundation </span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item">Foundation</li>
            <li class="breadcrumb-item active" aria-current="page"><?= ucwords(str_replace('-', ' ', $this->uri->segment(2))); ?></li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->

<!-- #content end -->

<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="heading-block text-center border-bottom-0">
                <h1>This page currently Under Construction</h1>
                <span>Please check back again within Some Days as We're Pretty Close</span>
            </div>

            <div id="countdown-ex1" class="countdown countdown-large mx-auto bottommargin" data-year="2021" style="max-width:700px;"></div>

            <div class="clear"></div>

            <div class="progress topmargin mx-auto" style="height: 10px; max-width:600px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete</span>
                </div>
            </div>

            <div class="divider divider-center divider-sm divider-margin-lg"><i class="icon-time"></i></div>

        </div>
    </div>
</section><!-- #content end -->