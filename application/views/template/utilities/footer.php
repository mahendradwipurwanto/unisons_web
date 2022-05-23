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
        
        $('form').submit(function(event) {
            $('#submit-button').prop("disabled", true);
            // add spinner to button
            $('#submit-button').html(
                `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> loading...`
            );
            return;
        });
    </script>

    </body>

    </html>

    </body>

    </html>