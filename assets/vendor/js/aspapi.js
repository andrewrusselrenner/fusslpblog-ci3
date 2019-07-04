const uri = "https://localhost:5001/api/TodoItem";
let todos = null;

// Counter
function getHitung(data) {
	const el = $("#counter");
	let name = "to-do";

	if(data) {
		if(data > 1) {
			name = "to-dos";
		}
		el.text(data + " " + name);
	} else {
		el.text("No " + name);
	}
}

$(document).ready(function() {
	getData();
});

// Fetching semua data dari API dan input ke tabel
function getData() {
	$.ajax({
		type: "GET",
		url: uri,
		cache: false,
		success: function(data) {
			const tBody = $("#todos");

			$(tBody).empty();

			getHitung(data.length);
			
			// Input ke tabel
			$.each(data, function(key, item) {
				const tr = $("<tr></tr>")
					.append(
						$("<td></td>").append(
							$("<input/>", {
								type: "checkbox",
								disabled: true,
								checked: item.isComplete,
								class: "form-check-input"
							})
						)
					)
					.append($("<td></td>").text(item.name))
					.append(
						$("<td></td>").append(
							$('<button class="btn btn-outline-putih">Edit</button>').on("click", function() {
								editItem(item.id);
							})
						)
					)
					.append(
						$("<td></td>").append(
							$('<button class="btn btn-outline-putih">Hapus</button>').on("click", function() {
								deleteItem(item.id);
							})
						)
					);
				tr.appendTo(tBody);
			});

			todos = data;
		}
	});
}

// Tambah item
function addItem() {
	const item = {
		name: $("#tambah-nama").val(),
		isComplete: false
	};

	$.ajax({
		type: "POST",
		accepts: "application/json",
		url: uri,
		contentType: "application/json",
		data: JSON.stringify(item),
		error: function(jqXHR, textStatus, errorThrown) {
			bootbox.alert("Upps ada yang aneh");
		},
		success: function(result) {
			getData();
			$("#tambah-nama").val("");
		}
	});
}


// Hapus
function deleteItem(id) {
	$.ajax({
		url: uri + "/" + id,
		type: "DELETE",
		success: function(result) {
			getData();
		}
	});
}

// Edit item
function editItem(id) {
	$.each(todos, function(key, item) {
		if(item.id === id) {
			$("#editNama").val(item.name);
			$("#edit-id").val(item.id);
			$("#edit-isComplete")[0].checked = item.isComplete;
		}
	});
	$("#spoiler").css({ display: "block" });
}

// Ketika form untuk edit di submit, kirim ajax ke API
$("#form-gue").on("submit", function() {
	const item = {
		name: $("#editNama").val(),
		isComplete: $("#edit-isComplete").is(":checked"),
		id: $("#edit-id").val()
	};

	$.ajax({
		url: uri + "/" + $("#edit-id").val(),
		type: "PUT",
		accepts: "application/json",
		contentType: "application/json",
		data: JSON.stringify(item),
		success: function(result) {
			getData();
		}
	});

	tutupInput();
	return false;
});

function tutupInput() {
	$("#spoiler").css({ display: "none" });
}
