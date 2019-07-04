<div class="col-md-8 mx-auto">
    <!-- Postingan -->
    <div class="intro">
        <a href="<?php echo site_url('/post/'.$tulisan['Slug']); ?>"><h1 class="text-center p-0"><?php echo $tulisan['Judul']; ?></h1></a>
        <p class="text-center">
            <span class="by">by</span>
            <a href="#"><?php echo $tulisan['Author']; ?></a>
            <span class="date"><?php echo timeconvert($tulisan['Tanggal']); ?> </span>
        </p>
        <img class="img-fluid d-block mx-auto" src="<?= imageURL(); echo $tulisan['GbrHeader'];?>">
        <!-- <figcaption class="text-center"> <i>Anak-anak ngelem</i> </figcaption> -->
    </div>
    <div class="text">
        <?php echo $tulisan['Isi'];?>
    </div>
    <hr>
    <?php
    if ($this->session->userdata('hakakses') === 'penulis'){
        if ($this->session->userdata('name') === $tulisan['Author']){
            ?>
            <a href="edit/<?php echo $tulisan['Slug'] ?>" class="btn btn-outline-putih float-right mx-2">Sunting</a>
            <?php 
            $atribut = array('id'=>'hapuspost');
            $hidden = array('namagbr' => $tulisan['GbrHeader']);
            echo form_open('post/hapus/'.$tulisan['PostId'], $atribut, $hidden);
            ?>
                <input type="submit" class="btn btn-outline-putih float-right mx-2" value="Hapus">
            </form>
            <?php
        }
    }
    ?>
</div>