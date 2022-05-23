<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Dashboard</h2>
        <p class="mb-0">Hai, <?= $this->session->userdata('name'); ?> - Malang, East Java</p>
    </div>
    <div class="col-4">
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12">
        <div class="alert alert-info">
            <i class="icon-info"></i><strong>Development version!</strong> This is a development version.
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="info-card border">
            <div class="info-text-ctn">
                <div class="info-head">
                    <h1 style="line-height: 65px;margin-bottom: 0px;">Welcome to your site, <?= $this->session->userdata('name'); ?></h1>
                </div>
                <div class="info-text">
                    <p>You can manage your website in here, you can see briefly of our features by click button down below
                    </p>
                </div>
                <div class="info-buton">
                    <button type="button" onclick="tournow()" class="button button-border m-0 button-circle button-dark mr-2">Website tour</button>
                    <a href="mailto:ngodingin.indonesia@gmail.com" class="button button-border m-0 button-circle button-aqua" id="tour-emailus">Send us email</a>
                </div>
            </div>
            <div class="info-image">
                <img src="https://cdni.iconscout.com/illustration/free/thumb/concept-of-remote-team-2112518-1785598.png" alt="">
            </div>
        </div>
    </div>
</div>