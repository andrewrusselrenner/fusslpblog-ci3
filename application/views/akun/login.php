<div class="mx-auto col-md-6 col-10 p-4 shadow-lg">
    <div class="row">
        <div class="px-0 col-md-1 py-1">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo asetURL(); ?>img/logo.jpg" class="img-fluid" width="80"></a>
        </div>
        <div class="col-md-0">
            <h2 class="my-1 text-left text-lowercase mx-1 menulogin px-2" style="font-style: underline;">Universal Account</h2>
        </div>
    </div>
    <h1 class="mb-3 mt-2 text-left font-weight-bold">Akun Fusslp</h1>
    <p><?php echo $this->session->flashdata('msg');?></p>
    <?php echo form_open('akun/login'); ?>
        <div class="form-group"> <input type="email" class="form-control" placeholder="Surel" name="surel" required autocomplete="off"> </div>
        <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Kata Sandi" name="katasandi" required autocomplete="off"> </div>
        <div class="form-group link my-3">
            <small class="form-text text-muted text-right">
                <a href="lupasandi.html" class="mb-0 mt-2"> Lupa Kata Sandi?</a>
                <br>
                <a href="daftar.html"> Buat Akun</a>
            </small>
        </div>
        <button type="submit" name="masuk" class="btn btn-outline-putih btn-lg w-50" data-callback="submitForm" data-badge="inline">Masuk</button>
    </form>
</div>