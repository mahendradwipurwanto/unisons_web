        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
        	<div class="container">

        		<!-- Footer Widgets
				============================================= -->
        		<div class="footer-widgets-wrap">

        			<div class="row col-mb-50">
        				<div class="col-lg-8">

        					<div class="row col-mb-50">
        						<div class="col-md-4">

        							<div class="widget clearfix">

        								<img src="<?= base_url(); ?>berkas/<?= $logo2; ?>" alt="Image" class="footer-logo">

        								<p><?= $web_description; ?></p>

        							</div>

        						</div>

        						<div class="col-md-4">

        							<div class="widget widget_links clearfix">

        								<h4>Sitemap</h4>

        								<ul>
        									<li><a href="https://opensea.io/Unisons_CryptoLab">Opensea page</a></li>
        									<li><a href="<?= base_url(); ?>">Home</a></li>
        									<li><a href="<?= site_url('gallery'); ?>">Gallery</a></li>
        									<li><a href="<?= site_url('new-collection'); ?>">Collection</a></li>
        								</ul>

        							</div>

        						</div>

        						<div class="col-md-4">

        							<div style="background: url('<?= base_url(); ?>assets/images/world-map.png') no-repeat center center; background-size: 100%;">
        								<address>
        									<strong>Address:</strong><br>
        									<?= $web_address; ?><br>
        								</address>
        								<!-- <abbr title="Phone Number"><strong>Phone:</strong></abbr> <?= $web_phone; ?><br> -->
        								<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:<?= $web_mail; ?>"><?= $web_mail; ?></a>
        							</div>
        						</div>
        					</div>

        				</div>
        			</div>

        		</div><!-- .footer-widgets-wrap end -->

        	</div>

        	<!-- Copyrights
			============================================= -->
        	<div id="copyrights">
        		<div class="container">

        			<div class="row col-mb-30">

        				<div class="col-md-6 text-center text-md-left">
        					Copyrights &copy; 2022 All Rights Reserved by Unisons cryptolab.
        				</div>

        				<div class="col-md-6 text-center text-md-right">

        					<div class="clear"></div>

        					<i class="icon-envelope2 mr-1"></i> <a href="mailto:<?= $web_mail; ?>"><?= $web_mail; ?></a>
        					<!-- <span class="middot">&middot;</span> <i class="icon-phone mr-1"></i> <?= $web_phone; ?> -->
        				</div>

        			</div>

        		</div>
        	</div><!-- #copyrights end -->
        </footer><!-- #footer end -->

        </div><!-- #wrapper end -->

        <!-- Go To Top
	============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- JavaScripts
	============================================= -->
        <script src="<?= base_url(); ?>assets/js/plugins.min.js"></script>

        <!-- Footer Scripts
	============================================= -->
        <script src="<?= base_url(); ?>assets/js/functions.js"></script>

        <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/addons/revolution.addon.paintbrush.min.js"></script>

        <!-- SLIDER REVOLUTION EXTENSIONS  -->
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?= base_url(); ?>assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

        <script>
        	(function() {
        		var cx = '006140480002229796823:3f-_bji0d1w';
        		var gcse = document.createElement('script');
        		gcse.type = 'text/javascript';
        		gcse.async = true;
        		gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        			'//www.google.com/cse/cse.js?cx=' + cx;
        		var s = document.getElementsByTagName('script')[0];
        		s.parentNode.insertBefore(gcse, s);
        	})();

        	var revapi143,
        		tpj;
        	var $ = jQuery.noConflict();

        	(function() {
        		if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
        		else onLoad();

        		function onLoad() {
        			if (tpj === undefined) {
        				tpj = jQuery;
        				if ("off" == "on") tpj.noConflict();
        			}
        			if (tpj("#rev_slider_143_1").revolution == undefined) {
        				revslider_showDoubleJqueryError("#rev_slider_143_1");
        			} else {
        				revapi143 = tpj("#rev_slider_143_1").show().revolution({
        					sliderType: "standard",
        					jsFileLocation: "include/rs-plugin/js",
        					sliderLayout: "fullscreen",
        					dottedOverlay: "none",
        					delay: 9000,
        					navigation: {
        						keyboardNavigation: "off",
        						keyboard_direction: "horizontal",
        						mouseScrollNavigation: "off",
        						mouseScrollReverse: "default",
        						onHoverStop: "off",
        						arrows: {
        							style: "uranus",
        							enable: true,
        							hide_onmobile: false,
        							hide_onleave: false,
        							tmp: '',
        							left: {
        								h_align: "left",
        								v_align: "center",
        								h_offset: 20,
        								v_offset: 0
        							},
        							right: {
        								h_align: "right",
        								v_align: "center",
        								h_offset: 20,
        								v_offset: 0
        							}
        						}
        					},
        					responsiveLevels: [1240, 1024, 778, 480],
        					visibilityLevels: [1240, 1024, 778, 480],
        					gridwidth: [1240, 1024, 778, 480],
        					gridheight: [868, 768, 960, 720],
        					lazyType: "none",
        					parallax: {
        						type: "3D",
        						origo: "slidercenter",
        						speed: 400,
        						speedbg: 0,
        						speedls: 0,
        						levels: [5, 10, 15, 20, 25, 30, 35, 40, -2, -4, -6, -8, -10, -12, -14, 55],
        						ddd_shadow: "off",
        						ddd_bgfreeze: "on",
        						ddd_overflow: "hidden",
        						ddd_layer_overflow: "hidden",
        						ddd_z_correction: 150,
        						disable_onmobile: "on"
        					},
        					spinner: "off",
        					stopLoop: "on",
        					stopAfterLoops: 0,
        					stopAtSlide: 1,
        					shuffle: "off",
        					autoHeight: "off",
        					fullScreenAutoWidth: "off",
        					fullScreenAlignForce: "off",
        					fullScreenOffsetContainer: "",
        					fullScreenOffset: "",
        					disableProgressBar: "on",
        					hideThumbsOnMobile: "off",
        					hideSliderAtLimit: 0,
        					hideCaptionAtLimit: 0,
        					hideAllCaptionAtLilmit: 0,
        					debugMode: false,
        					fallbacks: {
        						simplifyAll: "off",
        						nextSlideOnWindowFocus: "off",
        						disableFocusListener: false,
        					}
        				});
        			}; /* END OF revapi call */

        			if (typeof ExplodingLayersAddOn !== "undefined") ExplodingLayersAddOn(tpj, revapi143);

        			RevSliderPaintBrush(tpj, revapi143);
        		} /* END OF ON LOAD FUNCTION */
        	}()); /* END OF WRAPPING FUNCTION */
        </script>

        </body>

        </html>