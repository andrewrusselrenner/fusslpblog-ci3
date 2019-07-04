<style>
	#spoiler {
		display: none ;
	}
</style>
<div class="col-md-10 mx-auto">
	<h3 class="display-2 text-center">To-do CRUD In-Memory</h3>
	<br>
	<!-- Tambah -->
	<h4>Tambah</h4>
	<form action="javascript:void(0);" method="post" onsubmit="addItem()">
		<div class="form-group">
		  <label for="tambah-nama">Nama</label>
		  <input type="text" class="form-control" name="tambah-nama" id="tambah-nama" placeholder="Contoh: Kocheng">
		</div>
		<div class="form-group">
			<input type="submit" value="Tambah" class="btn btn-outline-putih">
		</div>
	</form>
	<!-- Edit -->
	<div id="spoiler">
		<h4>Edit</h4>
		<form id="form-gue">
			<div class="form-group">
			  <label for="edit-id"></label>
			  <input type="hidden" name="edit-id" id="edit-id">
			</div>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="edit-isComplete" id="edit-isComplete">
					<input type="text" class="form-control" name="editNama" id="editNama" placeholder="Contoh: Kocheng">
				</div>
				<!-- <div class="form-check-inline">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" name="edit-isComplete" id="edit-isComplete">
						<input type="text" class="form-control" name="editNama" id="editNama" placeholder="Contoh: Kocheng">
					</label>
				</div> -->
			</div>
			<div class="form-group">
				<input type="submit" value="Simpan" class="btn btn-outline-putih">
				<a onclick="tutupInput()" aria-label="Tutup" class="btn btn-outline-putih">&#10006;</a>
			</div>
		</form>
	</div>

	<p id="counter"></p>

	<!-- Tabel -->
	<table class="table">
		<thead>
			<tr>
				<th>Is Complete</th>
				<th>Nama</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody id="todos"></tbody>
	</table>
</div>
