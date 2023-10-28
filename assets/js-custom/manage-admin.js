get_data();

$("#hapusAdmin").on("show.bs.modal", function (e) {
	var button = $(e.relatedTarget);
	var id = button.data("id");
	var modalButton = $(this).find("#btn-hapus");
	modalButton.attr("onclick", "delete_data(" + id + ")");
});

function get_data() {
	$.ajax({
		url: base_url + _controller + "/get_data",
		method: "GET",
		dataType: "json",
		success: function (data) {
			var table = $("#example").DataTable({
				destroy: true,
				data: data,
				columns: [
					{
						data: null,
						className: "text-center",
						render: function (data, type, row, meta) {
							return meta.row + 1;
						},
					},
					{ data: "name" },
					{ data: "email" },
					{ data: "address" },
					{
						data: "image",
						className: "text-center",
						render: function (data, type, row) {
							var imageUrl = base_url + "assets/image/user/" + data;
							return (
								'<img src="' +
								imageUrl +
								'" style="max-width: 100px; max-height: 400px;">'
							);
						},
					},
					{
						data: null,
						className: "text-center",
						render: function (data, type, row) {
							return (
								'<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="edit" onclick="submit(' +
								row.id_carousel_menu +
								')"><i class="fa-solid fa-pen-to-square"></i></button> ' +
								'<button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="edit" onclick="submit(' +
								row.id_carousel_menu +
								')"><i class="fa-solid fa-eye"></i></button> ' +
								'<button class="btn btn-warning" data-toggle="modal" data-target="#hapusAdmin" title="hapus" data-id="' +
								row.id_carousel_menu +
								'"><i class="fa-solid fa-trash-can"></i></button>'
							);
						},
					},
				],
				initComplete: function () {
					// Set column titles alignment to center
					$("th").css("text-align", "center");
				},
			});
		},
		error: function (xhr, textStatus, errorThrown) {
			console.log(xhr.statusText);
		},
	});
}
