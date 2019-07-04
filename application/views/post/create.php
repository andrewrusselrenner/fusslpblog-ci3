<?php 
echo validation_errors();
if(isset($error)) {print $error;}
?>

<div class="col-md-10 mx-auto">
    <div class="text col-md-12">
        <h1 class="text-center">Konten Anda</h1>
        <h3 class="text-center">Silahkan Ketik Disini</h3>
        <hr>
        <?php echo form_open_multipart('post/create'); ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
                <label for="isiartikel">Isi artikel</label>
                <textarea class="form-control" name="isiartikel" id="froala-editor" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Ketik Kategori">
            </div>
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" id="author" placeholder="ketik angka 12">
            </div>
            <div class="form-group dropzone" id="fileupload">
              <label for="file">Ubah Gambar</label>
              
              <div class="dz-message">
                <h3> Klik atau Drop gambar disini</h3>
              </div>
              <input type="hidden" id="gbrnama" name="namagbr">
              <!-- <input type="file" class="form-control-file btn btn-outline-putih" name="file" id="fileup" placeholder="file gambar"> -->
            </div>
            <!-- <div class="form-group">
              <label for="gbrheader">Upload Gambar</label>
              <input type="file" class="form-control-file btn btn-outline-putih" name="gbrheader" id="gbrheader" placeholder="file gambar">
            </div> -->
            <div class="form-group">
                <input type="submit" class="btn btn-outline-putih px-2" value="Kirim" id="kirimgb">
                <input type="reset" class="btn btn-outline-putih px-2" value="Ketik ulang form" id="resetgb">
            </div>
        </form>
        <br>
    </div>
</div>
<script>
  var namafile;
</script>

<!-- <script type="module" src="<?= vendorURL(); ?>js/node_modules/@editorjs/editorjs/dist/editor.js"></script>
<script type="module" src="<?= vendorURL(); ?>js/index.js"></script> -->