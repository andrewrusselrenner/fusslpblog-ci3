<section>
    <div class="col-md-12">
        <h4 class="display-4 text-center">Data post yang kamu posting disini</h4>
        <br>
        <br>
        <!-- Disini tabelnya -->
        <table class="table table-center table-hover table-dark" id="tabelPost">

            <!-- Disini kepalanya tabel -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <!-- Disini badan tabelnya -->
            <tbody>
            <?php

            // Inisialisasi terlebih dahulu, nanti akan bertambah di foreach
            $nomor = 1;
            // Perulangan, gak perlu satu-satu datanya ditulis ulang
            foreach ($post as $d)
            {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><a href="<?= site_url('/post/'.$d['Slug']); ?>" style="color: white !important;"> <?= $d['Judul']; ?></a></td>
                    <td><?php echo word_limiter($d['Isi'],50); ?></td>
                    <td><?php echo $d['Kategori']; ?></td>
                    <td><?php echo timeconvert($d['Tanggal']); ?></td>
                    <td>
                        <a href="<?= site_url('/post/edit/'.$d['Slug']); ?>" class="btn btn-primary float-right mb-2 text-white mx-2">Sunting</a>
                        <?php 
                        $atribut = array('id'=>'hapuspost');
                        $hidden = array('namagbr' => $d['GbrHeader']);
                        echo form_open('post/hapus/'.$d['PostId'], $atribut, $hidden);
                        ?>
                            <input type="submit" class="btn btn-danger mb-2 text-white float-right mx-2" value="Hapus">
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
<hr style="min-width: 45rem;">
<section>
    <div class="col-md-12">
        <h4 class="display-4 text-center">Data buku tamu</h4>
        <br>
        <br>
        <!-- Disini tabelnya -->
        <table class="table table-center table-hover table-dark" id="tabelTamu">

            <!-- Disini kepalanya tabel -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Surel</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <!-- Disini badan tabelnya -->
            <tbody>
            <?php

            // Inisialisasi terlebih dahulu, nanti akan bertambah di foreach
            $nomor = 1;
            // Perulangan, gak perlu satu-satu datanya ditulis ulang
            foreach ($bukutamu as $d)
            {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?= $d['NamaPenulis']; ?></td>
                    <td><?php echo $d['Email']; ?></td>
                    <td><?php echo word_limiter($d['Pesan'],50); ?></td>
                    <td><?php echo timeconvert($d['Tanggal']); ?></td>
                    <td>
                        <button type="submit" id="<?php echo $d['Id'] ?>" class="btn btn-danger mb-2 mx-2" onclick="hapusDataTamu(this.id)">Hapus</button>
                        <!-- <?php 
                        $atribut = array('id'=>'hapuspost');
                        // echo form_open('pages/hapus/'.$d['Id'], $atribut);
                        ?>
                            <input type="submit" class="btn btn-danger mb-2 text-white float-right mx-2" value="Hapus">
                        </form> -->
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
