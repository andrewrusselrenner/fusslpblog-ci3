<!-- Disini form nya -->
<div class="col-md-3 ml-auto mr-0">
    <h1 class="text-bold">Kenneth's Guest Book</h1>
    <p>Thanks for checking this out. This is my guestbook. Feel free to sign it so I can see you were here.
    </p>
    <hr>
    <h3>Sign The Guestbook!</h3>
    <form action="javascript:void(0);" method="POST" id="formgb" name="formgb">
        <div class="form-group">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Depan" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Surel" required>
        </div>
        <div class="form-group">
            <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="10" placeholder="Masukkan pesan Anda disini" required></textarea>
        </div>
        <input type="submit" class="btn btn-outline-putih px-2" value="Kirim" id="kirimgb">
        <input type="reset" class="btn btn-outline-putih px-2" value="Ketik ulang form" id="resetgb">
    </form>
</div>