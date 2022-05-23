<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Edit Gallery</h2>
    </div>
    <div class="col-4">
        <a href="<?= site_url('dashboard/list-gallery'); ?>" class="button button-rounded button-aqua float-right mr-0"><i class="fa fa-image mr-1"></i> List gallery</a>
    </div>
</div>
<hr>

<form action="<?= site_url('admin/procces_editNewGallery'); ?>" method="post" enctype="multipart/form-data">
    <!-- <form action="#" method="get" enctype="multipart/form-data"> -->
    <input type="hidden" name="id" value="<?= $gallery->id; ?>">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-header-title mb-0">
                        Gallery content
                    </h4>
                    <hr class="my-2">
                    <div class="mb-3">
                        <div>
                            <div action="#" class="dropzone p-1">
                                <div class="fallback">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-2">
                                        <i class="display-4 text-muted mdi mdi-upload-network-outline"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= site_url('admin/procces_deleteNewGallery/'.$gallery->id);?>" class="button button-border button-rounded button-fill button-red float-right mr-0" id="btn-submit"><span><i class="icon-trash"></i> Delete gallery</span></a>
                    <button type="submit" onclick="inikirim()" class="button button-border button-rounded button-fill button-aqua float-right mr-0" id="btn-submit"><span><i class="icon-save"></i> Save changes gallery</span></button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-header-title mb-0">
                        Gallery information
                    </h4>
                    <hr class="my-2">
                    <div class="mb-3">
                        <label for="inputTitle">Title <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" name="title" id="inputTitle" value="<?= $gallery->title; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputCategories">Categories <small class="text-danger">*</small></label>
                        <div class="row mr-0">
                            <div class="col-11">
                                <select class="form-control select2" name="id_categories" id="inputCategories" required>
                                    <option value="<?= $gallery->id_categories; ?>"><?= $gallery->categories; ?></option>
                                    <?php if (!empty($categories)) : ?>
                                        <?php foreach ($categories as $key) : ?>
                                            <option value="<?= $key->id; ?>"><?= $key->categories; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="col-1 px-0">
                                <a href="<?= site_url('dashboard/information#gallery-categories'); ?>" class="btn btn-info btn-block"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription">Description <small class="text-muted">(optional)</small></label>
                        <textarea type="text" class="form-control" name="description" id="inputDescription" rows="3" value="Description"><?= $gallery->description; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputTags">Tags <small class="text-muted">(optional)</small></label>
                        <input type="text" class="form-control tagsinput" name="tags" id="inputTags" value="<?= $gallery->tags; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- id submit button clicked -->
<script>
    $("form").on('submit', function(e) {
        $('#btn-submit').html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Loading...'
        ).addClass('disabled');
        Swal.fire({
            title: 'Loading...',
            text: 'Please wait, adding data.',
            imageUrl: 'https://im7.ezgif.com/tmp/ezgif-7-18a9a35278.gif',
            imageAlt: 'loading',
            allowOutsideClick: false,
            showCancelButton: false,
            showConfirmButton: false,
        })
    });

    $('input').on('keypress', function(event) {
        var regex = new RegExp("^[a-zA-Z0-9_ ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

    $('#inputTags').tagsInput({
        'width': 'auto',
        'delimiter': ',',
        'defaultText': 'Tag',
        onAddTag: function(item) {
            $($(".tagsinput").get(0)).find(".tag").each(function() {
                if (!ValidateText($(this).text().trim().split(/(\s+)/)[0])) {
                    $(this).addClass("badge-primary");
                }
            });
        },
        'onChange': function(item) {
            $($(".tagsinput").get(0)).find(".tag").each(function() {
                if (!ValidateText($(this).text().trim().split(/(\s+)/)[0])) {
                    $(this).addClass("badge-primary");
                }
            });
        }

    });

    function ValidateText(mail) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
            return (true)
        }
        return (false)
    }

    Dropzone.autoDiscover = false;

    $('.dz-message').addClass('hidden');

    var foto_upload = new Dropzone(".dropzone", {
        // renameFile: function(file) {
        //     var ext = (file.name.substr(file.name.length - 5)).split('.')[1];
        //     let newName = 'poster_' + new Date().getTime() + '.' + ext;
        //     return newName;

        //     console.log(newName);
        // },
        autoProcessQueue: false,
        url: "<?= site_url('admin/gallery_uploadPicture/' . $gallery->id) ?>",
        maxFilesize: 2,
        maxFiles: 30,
        parallelUploads: 30,
        method: "post",
        acceptedFiles: "image/*",
        paramName: "userfile",
        dictInvalidFileType: "File type not allowed",
        addRemoveLinks: true,
        init: function() {
            let myDropzone = this;

            // If you only have access to the original image sizes on your server,
            // and want to resize them in the browser:
            // let mockFile = {
            //     name: "Filename 2",
            //     size: 12345
            // };
            // myDropzone.displayExistingFile(mockFile, "https://i.picsum.photos/id/959/600/600.jpg");

            // If the thumbnail is already in the right size on your server:
            let mockFile = null;
            let callback = null; // Optional callback when it's done
            let crossOrigin = null; // Added to the `img` tag for crossOrigin handling
            let resizeThumbnail = false; // Tells Dropzone whether it should resize the image first

            <?php if (!empty($pictures)) : ?>
                <?php foreach ($pictures as $key) : ?>
                    mockFile = {
                        name: "<?= $key->picture; ?>",
                        size: 12345
                    };

                    myDropzone.displayExistingFile(mockFile, "<?= base_url(); ?>berkas/gallery/<?= $key->id_gallery; ?>/<?= $key->picture; ?>", callback, crossOrigin, resizeThumbnail);
                <?php endforeach; ?>
            <?php endif; ?>

            // If you use the maxFiles option, make sure you adjust it to the
            // correct amount:
            let fileCountOnServer = 2; // The number of files already uploaded
            myDropzone.options.maxFiles = myDropzone.options.maxFiles - fileCountOnServer;
        },
        removedfile: function(file) {
            var fileName = file.name;

            $.ajax({
                type: 'POST',
                url: '<?= site_url('admin/gallery_deletePicture/' . $gallery->id) ?>',
                data: {
                    filename: fileName,
                    request: 'delete'
                },
                success: function(data) {
                    console.log('success: ' + data);
                }
            });

            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });

    function inikirim() {
        foto_upload.processQueue();
    }
</script>