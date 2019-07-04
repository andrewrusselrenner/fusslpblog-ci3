<?php 
echo validation_errors();
if(isset($error)) {print $error;}

$gbr = $tulisan['GbrHeader'];
?>

<div class="col-md-10 mx-auto">
    <div class="text col-md-12">
        <h1 class="text-center">Sunting Post</h1>
        <h5 class="text-center">Menyunting Post <i><?php echo $tulisan['Judul']; ?></i> ditulis oleh <i><?php echo $tulisan['Author']; ?></i>.</h5>
        <hr>
        <?php echo form_open_multipart('post/update'); ?>
            <div class="form-group">
                <input type="hidden" name="postid" value="<?php echo $tulisan['PostId']; ?>">
                <input type="hidden" name="gbrpost" value="<?php echo $gbr; ?>">
                <input type="hidden" id="gbrnama" name="namagbr">
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Artikel" value="<?php echo $tulisan['Judul']; ?>">
            </div>
            <div class="form-group">
                <label for="isiartikel">Isi artikel</label>
                <textarea class="form-control" name="isiartikel" id="froala-editor" rows="4"><?php echo $tulisan['Isi']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Ketik Kategori" value="<?php echo $tulisan['Kategori']; ?>">
            </div>
            <div class="form-group dropzone" id="fileupload">
              <label for="file">Ubah Gambar</label>
              
              <div class="dz-message">
                <h3> Klik atau Drop gambar disini</h3>
              </div>
              <!-- <input type="file" class="form-control-file btn btn-outline-putih" name="file" id="fileup" placeholder="file gambar"> -->
            </div>           
            <div class="form-group">
                <input type="submit" class="btn btn-outline-putih px-2" value="Kirim" id="kirimgb">
                <input type="reset" class="btn btn-outline-putih px-2" value="Ketik ulang form" id="resetgb">
            </div>
        </form>
        <br>
    </div>
</div>
<script>
var filename = "<?php echo $gbr; ?>";
var filepath = "<?php echo imageURL().$gbr; ?>";
</script>
<!-- <script src="<?= vendorURL(); ?>js/node_modules/@editorjs/editorjs/dist/editor.js"></script> -->
<!-- <script src="<?= vendorURL(); ?>js/index.js"></script> -->