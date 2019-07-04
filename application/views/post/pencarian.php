<div class="col-md-8 mx-auto">
<h4 class="text-center display-4">Hasil Pencarian "<?= $keyword; ?>".</h4>
<?php
if($hasil > 0)
{
    foreach ($hasil as $posts) : ?>
    <!-- Postingan Kedua -->
    <div class="intro">
        <a href="<?php echo site_url('/post/'.$posts['Slug']); ?>"><h1 class="text-center p-0"><?php echo $posts['Judul']; ?></h1></a>
        <p class="text-center">
            <span class="by">by</span>
            <a href="#"><?php echo $posts['Author']; ?></a>
            <span class="date"><?php echo timeconvert($posts['Tanggal']); ?> </span>
        </p>
        <img class="img-fluid d-block mx-auto" src="<?= imageURL(); echo $posts['GbrHeader'];?>">
        <!-- <figcaption class="text-center"> <i>Anak-anak ngelem</i> </figcaption> -->
    </div>
    <div class="text">
        <?php 
        $brief = word_limiter($posts['Isi'],50);
        echo $brief;
        ?>
    </div>
    <a href="<?php echo site_url('/post/'.$posts['Slug']); ?>" class="btn btn-outline-putih">Baca Lebih...</a>
    <hr>
<?php endforeach; 
} else {
    ?> <h3 class="display-3 text-center">Tidak ada hasil</h3> <?php
}
?>
</div>