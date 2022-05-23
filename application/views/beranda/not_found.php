		<!-- Page Title
		============================================= -->
		<section id="page-title">

		    <div class="container clearfix">
		        <h1>Page Not Found</h1>
		        <ol class="breadcrumb">
		            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
		            <li class="breadcrumb-item active" aria-current="page">404</li>
		        </ol>
		    </div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
		    <div class="content-wrap">
		        <div class="container clearfix">

		            <div class="row align-items-center col-mb-80">

		                <div class="col-lg-6">
		                    <div class="error404 center">404</div>
		                </div>

		                <div class="col-lg-6">

		                    <div class="heading-block text-center text-lg-left border-bottom-0">
		                        <h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
		                        <span>Try searching for the best match or browse the links below:</span>
		                    </div>

		                    <form action="#" method="get" class="mb-5">
		                        <div class="input-group input-group-lg">
		                            <input type="text" class="form-control" placeholder="Search for Pages...">
		                            <div class="input-group-append">
		                                <button class="btn btn-danger" type="button">Search</button>
		                            </div>
		                        </div>
		                    </form>

		                    <div class="row col-mb-30">

		                        <div class="col-6 col-sm-4 widget_links">
		                            <ul>
		                                <li><a href="<?= base_url(); ?>">Home</a></li>
		                                <li><a href="<?= site_url('about'); ?>">About</a></li>
		                            </ul>
		                        </div>

		                        <div class="col-6 col-sm-4 widget_links">
		                            <ul>
		                                <li><a href="<?= site_url('gallery'); ?>">Gallery</a></li>
		                                <li><a href="<?= site_url('new-collection'); ?>">Collection</a></li>
		                            </ul>
		                        </div>

		                        <div class="col-6 col-sm-4 widget_links">
		                            <ul>
		                                <li><a href="<?= site_url('foundation'); ?>">Foundation</a></li>
		                            </ul>
		                        </div>
		                    </div>

		                </div>

		            </div>

		        </div>
		    </div>
		</section><!-- #content end -->