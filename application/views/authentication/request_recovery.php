<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap py-0">
        <div class="section p-0 m-0 h-100 position-absolute" style="background: url('<?= base_url(); ?>assets/img/background-login.jpg') center center no-repeat; background-size: cover;">
        </div>

        <div class="section bg-transparent min-vh-100 p-0 m-0">
            <div class="vertical-middle">
                <div class="container-fluid py-5 mx-auto">
                    <a href="<?= base_url(); ?>" style="position: fixed; top: 20px; right: 15px;"><i class="fa fa-home fa-2xl text-dark cursor"></i></a>
                    <br><br><br><br><br><br><br>

                    <div class="card mx-auto shadow rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                        <div class="card-body" style="padding: 40px;">
                            <form id="login-form" name="login-form" class="mb-0" action="<?= site_url('authentication/send_link_recovery_password'); ?>" method="post">
                                <h3>Recovery password</h3>

                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="login-form-email">Email <small class="text-danger">*</small></label>
                                        <input type="email" id="login-form-email" name="email" placeholder="Your email" class="form-control not-dark" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <small class="text-muted">Please input your email, we will send link recovery
                                            password to your email.</small>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button type="submit" class="button button-3d button-black m-0" id="submit-button" name="login-form-submit" id="submit-button">Request
                                            link</button>
                                        <a href="<?= site_url('login'); ?>" class="float-right">Login now?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="text-center dark mt-3"><small>Copyrights &copy; All Rights Reserved by UC LAB.</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- #content end -->