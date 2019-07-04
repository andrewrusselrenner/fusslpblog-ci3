<?php 
    if ($this->uri->segment(2) == 'login' || $this->uri->segment(2) == 'daftar')
    {
        ?>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
            </div>
        </div>
        <!-- Bagian kaki/footer -->
        <footer>
            <hr>
            <div class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6 p-3">
                            <h5> <b>Temukan Saya</b> </h5>
                            <ul class="list-unstyled">
                                <li> <a href="http://redcoffe.cf" target="_blank">Redcoffe</a> </li>
                                <li> <a href="http://untitledsomeoneproject.tumblr.com" target="_blank">Ugly Geeky Duck</a> </li>
                                <li> <a href="http://simonickalexs.tumblr.com" target="_blank">@simonickalexs</a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-6 p-3">
                            <h5> <b>Informasi Bantuan</b> </h5>
                            <ul class="list-unstyled">
                                <li> <a href="#">Pertanyaan Yang Sering Diajukan</a> </li>
                                <li> <a href="#">Daftar Produk Fusslp</a> </li>
                                <li> <a href="#">Apa itu Fusslp?</a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 p-3">
                            <h5> <b>Tentang</b> </h5>
                            <p class="mb-0"> Fusslp blog adalah blog yang sangat tidak berfaedah dan tidak tahu apa tujuan diciptakannya ini. Yaa ini sih cuman tugas pak jamal aja sih sama buat tutorial anak-anaknya buat blog menggunakan bootstrap 4. Tetap cemungut yaaa sayy! ;) </p>
                        </div>
                        <div class="col-lg-3 col-md-6 p-3">
                            <h5> <b>Ikuti Saya</b> </h5>
                            <div class="row">
                                <div class="col-md-12 d-flex align-items-center justify-content-between my-2">
                                    <a href="http://fb.com/benscott28">
                                        <i class="d-block fab fa-facebook text-muted fa-lg mr-2 anime-link"></i>
                                    </a>
                                    <a href="http://instagram.com/simonickalexs">
                                        <i class="d-block fab fa-instagram text-muted fa-lg mx-2 anime-link"></i>
                                    </a>
                                    <a href="http://twitter.com/_ariffahmi">
                                        <i class="d-block fab fa-twitter text-muted fa-lg ml-2 anime-link"></i>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="mb-0 mt-2">&copy; RMPPL. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php
    }
    ?>

<!-- Common Library -->
<!-- <script>alert("<?php echo $this->uri->segment(2); ?>");</script> -->
<script src="<?= npmURL(); ?>popper.js/dist/umd/popper.min.js"></script>
<script src="<?= npmURL(); ?>bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= npmURL(); ?>bootbox/dist/bootbox.min.js"></script>
<script src="<?= npmURL(); ?>bootbox/dist/bootbox.locales.min.js"></script>
<script src="<?= npmURL(); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= vendorURL(); ?>js/modalconfig.js"></script>

<?php

    if ($this->session->userdata('statuslogin') == TRUE)
    {
        ?>
        <script>
            Swal.fire({
            position: 'bottom-end',
            backdrop: false,
            width: '12rem',
            type: 'success',
            title: 'Selamat datang <?= $this->session->userdata('name'); ?>!',
            showConfirmButton: false,
            timer: 2900
            })
        </script>
        <?php
        $this->session->set_userdata('statuslogin', FALSE);
    }

    if ($this->session->userdata('status') == TRUE)
    {
        ?>
        <script>
        Swal.fire({
        position: 'bottom-end',
        backdrop: false,
        width: '12rem',
        type: 'success',
        title: 'Sukses diproses!',
        showConfirmButton: false,
        timer: 1900
        })
        </script>
        <?php
        $this->session->set_userdata('status', FALSE);
    }

if ($this->uri->segment(1) == 'ganti')
{
	echo '<script src="'.npmURL().'@ckeditor/ckeditor5-build-decoupled-document/build/ckeditor.js"></script>';
	echo '<script src="'.vendorURL().'js/gantijs.js"></script>';
}

if ($this->uri->segment(2) == 'dashboard')
	{
        echo '<script src="'.vendorURL().'js/jquery.dataTables.min.js"></script>';
        echo '<script src="'.vendorURL().'js/dataTables.bootstrap4.min.js"></script>';
        echo '<script src="'.vendorURL().'js/tabelpost.js"></script>';
        echo '<script src="'.vendorURL().'js/jquery.form.min.js"></script>';
        ?>
        <script>
        // Inisialisasi plugin JqueryDataTable
        $(document).ready(function() {
            $('#tabelPost').DataTable({
                "language": {
                    "url": "<?php echo vendorURL(); ?>js/indonesian-gaul.json"
                }
            });
            $('#tabelTamu').DataTable({
                "language": {
                    "url": "<?php echo vendorURL(); ?>js/indonesian-gaul.json"
                }
            });
        });

        // Atur variabel global yang bakal dipake disemua fungsi 
        // di javascript bair gak cape ngetik
        var uri = "<?= base_url(); ?>api/";
        var link = "<?= base_url(); ?>bukutamu/";
        </script>
        <?php

        if ($this->session->userdata('statuslogin') == TRUE)
        {
            ?>
            <script>
            Swal.fire({
            position: 'bottom-end',
            backdrop: false,
            size: small,
            type: 'success',
            title: 'Selamat datang <?= $this->session->userdata('name'); ?>!',
            showConfirmButton: false,
            timer: 1900
            })
            </script>
            <?php
            $this->session->set_userdata('statuslogin', FALSE);
        }
    }

if ($this->uri->segment(1) == 'bukutamu')
	{echo '<script src="'.vendorURL().'js/bukutamu.js"></script>';}

if ($this->uri->segment(2) == 'asp')
	echo '<script src="'.vendorURL().'js/aspapi.js"></script>';
?>

<?php
if ($this->uri->segment(2) == 'create' || $this->uri->segment(2) == 'edit')
{
    ?>
    <script src="<?= npmURL(); ?>dropzonejs/dist/min/dropzone.min.js"></script>
    <!-- Editor -->
<script src="<?= npmURL(); ?>froala-editor/js/froala_editor.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/third_party/font_awesome.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/font_size.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/inline_style.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/lists.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/paragraph_format.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/word_paste.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/url.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/quote.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/colors.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/emoticons.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/line_breaker.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/char_counter.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/align.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/link.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/draggable.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/entities.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/table.min.js"></script>
<!-- <script src="<?= npmURL(); ?>froala-editor/js/plugins/file.min.js"></script> -->
<script src="<?= npmURL(); ?>froala-editor/js/plugins/image.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/video.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/image_manager.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/help.min.js"></script>
<script src="<?= npmURL(); ?>froala-editor/js/plugins/help.min.js"></script>

<script src="<?= vendorURL(); ?>js/froalaconfig.js"></script>
    <?php
    if($this->uri->segment(2) == 'edit')
    {?>
        <script>
            var namafile = this.filename;
            console.log(this.namafile);

            var mockFile = { name: this.filename, size: 3655 };

            foto_upload.emit("addedfile", mockFile);
            foto_upload.files.push(mockFile);
            foto_upload.emit("thumbnail", mockFile, this.filepath);
            // foto_upload.createThumbnailFromUrl(mockFile, this.filepath, function() {
            //   foto_upload.emit("complete", mockFile);
            //   }, "anonymous");

            // Make sure that there is no progress bar, etc...
            foto_upload.emit("complete", mockFile);
        </script>
    <?php
    }
} else {
    // Not show anything
}
?>

</body>

</html>
