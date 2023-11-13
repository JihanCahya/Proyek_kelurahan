get_data();

$(".filter").select2({
	theme: "bootstrap4",
});

$(".filter").on("change", function () {
	filterData();
});

function filterData() {
	$("#example").DataTable().search($(".filter").val()).draw();
}

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
					{ data: "name", className: "text-center" },
					{ data: "letter_name", className: "text-center" },
					{ data: "submit_date", className: "text-center" },
					{ data: "finish_date", className: "text-center" },
					{
						data: null,
						className: "text-center",
						render: function (data, type, row) {
							return (
								'<button class="btn btn-info" data-toggle="modal" data-target="#detailArsip" title="detail" onclick="detail(' +
								row.id +
								')"><i class="fa-solid fa-circle-info"></i></button> '
							);
						},
					},
				],
				initComplete: function () {
					$("th").css("text-align", "center");
				},
			});
		},
		error: function (xhr, textStatus, errorThrown) {
			console.log(xhr.statusText);
		},
	});
}

function detail(x) {
	$.ajax({
		type: "POST",
		data: "id=" + x,
		url: base_url + "/" + _controller + "/get_data_id",
		dataType: "json",
		success: function (hasil) {
			$("[name='id']").val(hasil[0].id);
			$("[name='nama']").val(hasil[0].name);
			$("[name='letter']").val(hasil[0].letter_name);
			$("[name='date']").val(hasil[0].submit_date);
			$("[name='date2']").val(hasil[0].finish_date);
			var url = hasil[0].file_name;
			$("embed").attr("src", base_url + "assets/file_letter/" + url);
		},
	});
}
