<style>
    /*Textbox*/
    .document-editor__editable-container .ck-editor__editable {
        min-width: 100%;
        max-width: 24.9cm;
        width: 24.9cm;
    }
    /*Toolbar
    .ck-editor__top {
        min-width: 55%;
        width: 55%;
    }*/
</style>
<div class="col-md-11 d-block mx-auto px-2">
	<div class="text-center">
		<h2>Buat Template Surat</h2>
		<p>
			Disinilah template dimana Anda bisa membuat surat yang akan Anda pakai
			<br>
			<small><i>Note: Ukuran hanya bisa A4 saja. Namun, saat di print bisa Legal atau A5(Kalau ini akan berubah format).</i></small>
			<br>
		</p>
	</div>
	<br>
	<h5>Function: </h5>
	<button class="btn btn-outline-putih mb-3" onclick="surateditorhelp()">Bantuan Fungsi</button>
	<br>
    <form action="javascript:void(0);" method="POST" name="formcoba" id="formcoba">
        <div class="form-group">
            <div class="document-editor">
                <div class="document-editor__toolbar"></div>
                <div class="document-editor__editable-container">
                    <div class="document-editor__editable">
                        <p>The initial editor data.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-white" style="width: 210mm; height: 297mm;">
                <label for="editor text-center">Isi</label> -->
                <!-- The toolbar will be rendered in this container. -->
                <!-- <div id="toolbar-container"></div> -->

                <!-- This container will become the editable. -->
                <!-- <div id="editor">
                    <p>This is the initial editor content.</p>
                </div>
            </div> -->
          <!-- <textarea class="form-control" name="editor" id="editor" cols="50" placeholder="isi disini"></textarea> -->
        </div>
        <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-outline-putih">Kirim</button>
        </div>
    </form>
    <hr>
    <p id="results"></p>
    <div id="hasil"></div>
</div>

<script>
    function surateditorhelp() {
        bootbox.alert({
            title: "Function",
            message: "yeayy"
        });
    }
</script>
