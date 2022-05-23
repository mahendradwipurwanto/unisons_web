<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Information</h2>
    </div>
</div>
<hr>

<div class="row mb-2">
    <div class="col-12">
        <div class="alert alert-info">
            <i class="icon-info"></i><strong>Information</strong> You can manage your website information in here, from
            adding hero to change union care content and others stuff.
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tabs tabs-alt tabs-tb clearfix" id="tab-8">

            <ul class="tab-nav clearfix">
                <li><a href="#website-information">Website information</a></li>
                <li><a href="#gallery-categories">Gallery Categories</a></li>
                <li><a href="#unisons-care">Unisons Care Content</a></li>
            </ul>

            <div class="tab-container">

                <div class="tab-content clearfix" id="website-information">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?= site_url('admin/change_websiteInfo'); ?>" method="post">
                                        <h4 class="card-header-title mb-4">Website information</h4>
                                        <div class="mb-2">
                                            <label for="inputTitle">Title</label>
                                            <input type="text" class="form-control" id="inputTitle" name="title" value="<?= $w_title; ?>" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="inputLogo">Logo</label><br>
                                            <button type="button" data-toggle="modal" data-target="#change-icon" class="button button-small button-circle button-border button-aqua" data-target="#change-icon"><i class="icon-image"></i>change
                                                icon</button>
                                            <button type="button" data-toggle="modal" data-target="#change-logo" class="button button-small button-circle button-border button-aqua" data-target="#change-logo"><i class="icon-image"></i>change
                                                logo</button>
                                        </div>
                                        <div class="mb-2">
                                            <label for="inputDescription">Description</label>
                                            <textarea type="text" class="form-control" id="inputDescription" name="description" maxlength="300" rows="4" required><?= $w_description; ?></textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" name="address" value="<?= $w_address; ?>" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="inputPhone">Contact Phone</label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone" value="<?= $w_phone; ?>" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="inputEmail">Contact Email</label>
                                            <input type="text" class="form-control" id="inputEmail" name="email" value="<?= $w_email; ?>" required>
                                        </div>
                                        <button type="submit" class="button button-border button-rounded button-fill button-aqua mt-3 float-right send-button" id="send-button"><span><i class="icon-save"></i> Save
                                                Information</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-header-title mb-4">Website content</h4>
                                    <div class="mb-2">
                                        <label for="inputAbout">Home content</label><br>
                                        <button type="button" class="button button-small button-circle button-border button-aqua" data-toggle="modal" data-target="#hero_sectionss"><i class="icon-desktop"></i>Change hero
                                            section</button>
                                        <button type="button" class="button button-small button-circle button-border button-aqua" data-toggle="modal" data-target="#featured_content"><i class="icon-feather-alt"></i>Featured
                                            content</button>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputAbout">About your website</label><br>
                                        <button type="button" class="button button-small button-circle button-border button-aqua" data-toggle="modal" data-target="#about_website"><span><i class="icon-clipboard"></i>Change
                                                about</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content clearfix" id="gallery-categories">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-header-title mb-4">Gallery Categories
                                        <button type="button" class="button button-mini mt-0 button-circle button-border float-right button-aqua" data-toggle="modal" data-target="#add_categories"><i class="icon-plus"></i>Add
                                            categories</button>
                                    </h4>
                                    <div class="mb-2">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" width="8%">No</th>
                                                        <th width="18%"></th>
                                                        <th>Categories</th>
                                                        <th class="text-center" width="10%">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (!empty($categories)) : ?>
                                                        <?php $no = 1;
                                                        foreach ($categories as $key) : ?>
                                                            <tr>
                                                                <td class="text-center"><?= $no++; ?></td>
                                                                <td class="text-center">
                                                                    <button class="button button-mini m-0 mr-2 text-center button-aqua" data-toggle="modal" data-target="#edit_categories-<?= $key->id; ?>"><i class="icon-edit m-0"></i></button>
                                                                    <button class="button button-mini m-0 text-center button-red" data-toggle="modal" data-target="#delete_categories-<?= $key->id; ?>"><i class="icon-trash m-0"></i></button>
                                                                </td>
                                                                <td><?= $key->categories; ?></td>
                                                                <td class="text-center">
                                                                    <?php if (isset($key->description)) : ?>
                                                                        <button class="button button-mini m-0 button-dirtygreen" data-toggle="modal" data-target="#desc_categories-<?= $key->id; ?>"><i class="icon-clipboard"></i> read</button>
                                                                    <?php else : ?>
                                                                        <button class="button button-mini m-0 button-leaf" data-toggle="modal" data-target="#edit_categories-<?= $key->id; ?>"><i class="icon-clipboard"></i> not yet set</button>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="edit_categories-<?= $key->id; ?>" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="hero_section">Edit
                                                                                categories</h5>
                                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="<?= site_url('admin/edit_categories'); ?>" method="post" class="mb-0">
                                                                                <input type="hidden" name="id" value="<?= $key->id; ?>">
                                                                                <div class="mb-2">
                                                                                    <label for="featuredTitle">Title <small class="text-danger">*</small></label>
                                                                                    <input type="text" class="form-control" id="featuredTitle" name="categories" value="<?= $key->categories; ?>" required>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label for="featuredDescription">Description
                                                                                        <small class="text-muted">(optional)</small></label>
                                                                                    <textarea class="form-control" name="description" maxlength="200" rows="3"><?= $key->description; ?></textarea>
                                                                                </div>
                                                                                <div class="modal-footer px-0">
                                                                                    <button type="submit" class="button button-border mb-0 button-rounded button-fill button-aqua mt-3 float-right send-button" id="send-button"><span>Edit
                                                                                            categories</span></button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="delete_categories-<?= $key->id; ?>" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="hero_section">Delete
                                                                                categories</h5>
                                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Dou you really want to delete categories:
                                                                                <?= $key->categories; ?>?</p>
                                                                            <div class="modal-footer px-0">
                                                                                <a href="<?= site_url('admin/delete_categories/' . $key->id); ?>" class="button button-border button-rounded button-fill button-red mt-3 mb-0 float-right send-button" id="send-button"><span>Delete
                                                                                        categories</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="desc_categories-<?= $key->id; ?>" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="hero_section">
                                                                                Description categories</h5>
                                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p><?= $key->description; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content clearfix" id="unisons-care">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?= site_url('admin/change_unionCare'); ?>" method="post">
                                        <h4 class="card-header-title mb-4">Union care content</h4>
                                        <div class="mb-2">
                                            <textarea type="text" class="form-control" id="inputUnionCare" name="union_care" rows="6" required><?= $w_unionCare; ?></textarea>
                                        </div>
                                        <button type="submit" class="button button-border button-rounded button-fill button-aqua mt-3 float-right send-button" id="send-button"><span><i class="icon-save"></i> Save</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="hero_sectionss" tabindex="-1" aria-labelledby="hero_sections" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_sections">Update hero section</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/change_hero'); ?>" method="post" enctype="multipart/form-data" class="mb-0">
                    <div class="mb-2">
                        <label for="">Background</label>
                        <label for="GETL_LOGO_HERO" class="upload-card mx-auto mb-1 border" style="width: 100%; height: 300px;">
                            <img id="L_LOGO_HERO" class="w-100 L_LOGO_HERO cursor" src="<?= ($hero->image == null ? base_url() . 'assets/img/pickanimage.png' : base_url() . 'berkas/hero/' . $hero->image); ?>" alt="<?= $hero->image; ?>">
                        </label>
                        <input type="file" id="GETL_LOGO_HERO" class="form-control-file hidden" name="image" onchange="previewL_LOGO_HERO(this);" accept="image/*">
                        <small class="text-muted">Max 2Mb size, and use 1:4 ratio. click image to changes</small>
                        <!-- <input id="input-hero" name="image" type="file" class="file-loading" data-show-upload="false"
							accept="image/*" data-show-preview="false"> -->
                    </div>
                    <div class="mb-2">
                        <label for="heroTitle">Title</label>
                        <input type="text" class="form-control" id="heroTitle" name="hero_title" value="<?= $hero->name; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="heroDescription">Description</label>
                        <textarea class="form-control" id="heroDescription" name="hero_description" maxlength="300" rows="3"><?= $hero->value; ?></textarea>
                    </div>
                    <div class="modal-footer px-0">
                        <button type="submit" class="button button-border button-rounded button-fill button-aqua mt-3 float-right send-button" id="send-button"><span>Update hero</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="about_website" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_section">About your website</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/change_websiteContent'); ?>" method="post" class="mb-0">
                    <label for="inputAbout">About your website</label>
                    <textarea name="about" class="form-control" id="inputAbout" rows="3"><?= $w_about; ?></textarea>
                    <div class="modal-footer px-0">
                        <button type="submit" class="button button-border button-rounded button-fill button-aqua mt-3 float-right send-button" id="send-button"><span>Update about</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="change-icon" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?= site_url('admin/change_icon'); ?>" method="post" enctype="multipart/form-data" class="mb-0">
                    <div class="center mb-3">
                        <h4>Change website icon
                            <button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"></button>
                        </h4>
                        <div class="form-group mx-auto mb-2">
                            <label for="GETL_LOGO_WHITE" class="upload-card mx-auto border">
                                <img id="L_LOGO_WHITE" class="w-100 L_LOGO_WHITE cursor" src="<?= ($logo == null ? base_url() . 'assets/img/pickanimage.png' : base_url() . 'berkas/' . $logo); ?>" alt="<?= $logo; ?>">
                            </label>
                            <input type="file" id="GETL_LOGO_WHITE" class="form-control-file hidden" name="image" onchange="previewL_LOGO_WHITE(this);" accept="image/*">
                        </div>
                    </div>
                    <small class="text-muted px-2">Max 2Mb size, and use 1:1 ratio.</small>
                    <button type="submit" class="button button-border button-small button-rounded button-aqua btn-sm float-right"><span><i class="icon-upload"></i> Change icon</span></button>
                    <!-- <input id="input-icon" name="image" type="file" class="file-loading" accept="image/*" data-show-preview="false"> -->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="change-logo" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?= site_url('admin/change_logo'); ?>" method="post" enctype="multipart/form-data" class="mb-0">
                    <div class="center mb-3">
                        <h4>Change website logo
                            <button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"></button>
                        </h4>
                        <div class="form-group mx-auto mb-2">
                            <label for="GETL_LOGO_BLACK" class="upload-card mx-auto border" style="width: 450px; height: 150px;">
                                <img id="L_LOGO_BLACK" class="w-100 L_LOGO_BLACK cursor" src="<?= ($logo2 == null ? base_url() . 'assets/img/pickanimage.png' : base_url() . 'berkas/' . $logo2); ?>" alt="<?= $logo2; ?>">
                            </label>
                            <input type="file" id="GETL_LOGO_BLACK" class="form-control-file hidden" name="image" onchange="previewL_LOGO_BLACK(this);" accept="image/*">
                        </div>
                    </div>
                    <small class="text-muted px-2">Max 2Mb size, and use 1:3 ratio.</small>
                    <button type="submit" class="button button-border button-small button-rounded button-aqua btn-sm float-right"><span><i class="icon-upload"></i> Change logo</span></button>
                    <!-- <input id="input-icon" name="image" type="file" class="file-loading" accept="image/*" data-show-preview="false"> -->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="featured_content" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_section">Featured content</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/change_featured'); ?>" method="post" class="mb-0">
                    <div class="mb-2">
                        <label for="featuredTitle">Title</label>
                        <input type="text" class="form-control" id="featuredTitle" name="featured_title" value="<?= $featured->name; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="featuredDescription">Description</label>
                        <textarea class="form-control" id="featuredDescription" name="featured_description" maxlength="200" rows="3"><?= $featured->value; ?></textarea>
                    </div>
                    <div class="modal-footer px-0">
                        <a href="<?= site_url('admin/change_featuredHide'); ?>" class="button button-border button-rounded button-fill button-dark mt-3 float-right" data-dismiss="modal"><span>Hide</span></a>
                        <button type="submit" class="button button-border button-rounded button-fill button-aqua mt-3 float-right send-button" id="send-button"><span>Update featured content</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_categories" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_section">Add new gallery categories</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/add_newCategories'); ?>" method="post" class="mb-0">
                    <div class="mb-2">
                        <label for="featuredTitle">Title <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="featuredTitle" name="categories" placeholder="Insert categories title" required>
                    </div>
                    <div class="mb-2">
                        <label for="featuredDescription">Description <small class="text-muted">(optional)</small></label>
                        <textarea class="form-control" name="description" maxlength="200" rows="3" placeholder="Insert categories description"></textarea>
                    </div>
                    <div class="modal-footer px-0">
                        <button type="submit" class="button button-border button-rounded button-fill mb-0 button-aqua mt-3 float-right send-button" id="send-button"><span>Add new categories</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('form').submit(function(event) {
        $('.send-button').prop("disabled", true);
        // add spinner to button
        $('.send-button').html(
            `<span>Loading...</span>`
        );
        return;
    });

    // TINYMCE
    tinymce.init({
        selector: '#inputAbout,#heroDescription,#featuredDescription',
        height: 400,
        menubar: false,
        branding: false,
        toolbar_sticky: true,
        plugins: [
            'lists preview',
            'visualblocks'
        ],
        toolbar: 'undo redo | fontsizeselect formatselect | forecolor' +
            'blockquote bold italic underline | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent'
    });

    // TINYMCE
    tinymce.init({
        selector: '#inputUnionCare',
        height: 600,
        menubar: false,
        branding: false,
        toolbar_sticky: true,
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality  visualblocks visualchars fullscreen image link media codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons lineheight',
        // plugins: [
        //     'lists preview',
        //     'visualblocks',
        //     'table paste wordcount emoticons'
        // ],
        toolbar: 'fullscreen  preview | undo redo | fontselect fontsizeselect formatselect lineheight | charmap emoticons | blockquote bold italic underline strikethrough |  alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | image media template link codesample',
        // toolbar: 'undo redo | fontsizeselect formatselect | forecolor backcolor removeformat | emoticons' +
        //     'blockquote bold italic underline strikethrough | alignleft aligncenter ' +
        //     'alignright alignjustify | bullist numlist outdent indent | ' +
        //     'removeformat preview'
    });

    function previewL_LOGO_BLACK(input) {
        $(".L_LOGO_BLACK").removeClass('hidden');
        var file = $("#GETL_LOGO_BLACK").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#L_LOGO_BLACK").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }

    function previewL_LOGO_WHITE(input) {
        $(".L_LOGO_WHITE").removeClass('hidden');
        var file = $("#GETL_LOGO_WHITE").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#L_LOGO_WHITE").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }

    function previewL_LOGO_HERO(input) {
        $(".L_LOGO_HERO").removeClass('hidden');
        var file = $("#GETL_LOGO_HERO").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#L_LOGO_HERO").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }
</script>