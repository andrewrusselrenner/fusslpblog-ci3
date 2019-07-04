<?php
if($this->session->userdata('logged_in') === TRUE)
{
    $status = 'Hai '.$this->session->userdata('name');
} else {$status = 'Akun';}
?>
<!-- Navigasi Bar Atas -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #FFDF6E;">
        <a class="navbar-brand judul" href="<?php echo base_url(); ?>">fusslp</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-hamburger fa-lg"></i></button>
        <div class="collapse navbar-collapse pt-2" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Katalog <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://soundcloud.com/akpt08" target="_blank">Podcast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>bukutamu">Buku Tamu</a>
                </li>
            </ul>
            <form action="/post/cari/" class="form-inline my-2 my-lg-0 mr-0" method="GET">
                <input class="form-control mr-sm-2 transparant-form" type="text" placeholder="Cari sesuatu..." id="q" name="q" <?php if(isset($keyword)){echo 'value='.$keyword;} ?>>
                <button class="btn btn-outline-putih my-2 my-sm-0" type="submit">Cari</button>
            </form>
            <ul class="navbar-nav menulogin ml-1 mt-2 mt-lg-0 mr-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $status; ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <?php
                        if($this->session->userdata('logged_in') !== TRUE){
                        ?>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>akun/login">Masuk</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>akun/daftar">Daftar</a>
                        <?php
                        } else {
                        ?>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>akun/dashboard">Dash</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>akun/logout">Logout</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>post/create">Buat Post</a>
                        <?php
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>