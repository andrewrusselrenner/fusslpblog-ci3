<!-- Disini komentar buku tamunya/entri buku tamunya. Ini kodenya sama aja -->
<!-- Ini entri pertama -->
<div class="col-md-4 menulogin ml-0 mr-auto">
    <?php
    foreach($entri as $entries) : 
        $tgl = $entries['Tanggal'];
        $tanggal = date("d M Y @ g a", strtotime($tgl));
    ?>
    <div class="entry mb-2">
        <div class="row m-2">
            <div class="col-md-5">
                <img class="img-fluid d-block rounded-circle mx-auto text-center" src="<?= imageURL(); echo $entries['Ava'];?>">
                <div class="d-flex align-items-center justify-content-between my-2">
                    <a href="">
                        <i class="d-block fab fa-facebook fa-lg text-muted p-3"></i>
                    </a>
                    <a href="">
                        <i class="d-block fab fa-instagram fa-lg text-muted p-3"></i>
                    </a>
                    <a href="">
                        <i class="d-block fab fa-twitter fa-lg text-muted p-3"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-7 pt-2">
                <h2 class="penulis"><?php echo $entries['NamaPenulis']; ?></h2>
                <p class="text-small"><span class="tanggal"><?php echo $tanggal; ?></span></p>
                <div class="entry-text text-justify">
                    <?php echo $entries['Pesan']; ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php endforeach; ?>
</div>