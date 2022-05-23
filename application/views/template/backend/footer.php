</div><!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<script src="<?= base_url(); ?>assets/js/plugins.min.js"></script>

<!-- Bootstrap File Upload Plugin -->
<script src="<?= base_url(); ?>assets/js/components/bs-filestyle.js"></script>

<script src="https://cdn.jsdelivr.net/npm/intro.js@5.0.0/minified/intro.min.js"></script>
<!-- Footer Scripts
	============================================= -->
<script src="<?= base_url(); ?>assets/js/functions.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Bootstrap Switch Plugin -->
<script src="<?= base_url(); ?>assets/js/components/bs-switches.js"></script>

<!-- Bootstrap Data Table Plugin -->
<script src="<?= base_url(); ?>assets/js/components/bs-datatable.js"></script>

<script>
	$(document).ready(function() {
		$("#input-icon,#input-logo,#input-hero").fileinput({
			maxFileCount: 1,
			allowedFileTypes: ["image"]
		});

		$('.select2').select2();

		$('.datatable').dataTable();
	});

	function tournow() {
		introJs().setOptions({
			disableInteraction: true,
			steps: [{
				intro: "Welcome to tour guide, we will explain briefly about our features"
			}, {
				element: document.querySelector('#tour-emailus'),
				intro: "If you had any question, you can contact us by email"
			}, {
				element: document.querySelector('#tour-landing'),
				intro: "You can quickly view landing page"
			}, {
				element: document.querySelector('#tour-dashboard'),
				intro: "You can overview about your site in this page"
			}, {
				element: document.querySelector('#tour-information'),
				intro: "You can changes your website information in this page"
			}, {
				element: document.querySelector('#tour-gallery'),
				intro: "You can see your gallery list and add new gallery in this page"
			}, {
				element: document.querySelector('#tour-collection'),
				intro: "You can see your collection from opensea account in this page"
			}]
		}).start();
	};

	jQuery(".bt-switch").bootstrapSwitch();
</script>
</body>

</html>