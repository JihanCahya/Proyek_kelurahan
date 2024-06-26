$(function () {
	bsCustomFileInput.init();
});

get_data();

function delete_error() {
	$("#error-nama").hide();
	$("#error-alamat").hide();
	$("#error-telepon").hide();
	$("#error-email").hide();
	$("#error-map").hide();
	$("#error-sejarah").hide();
	$("#error-visi").hide();
	$("#error-misi").hide();
}

function previewImage(event) {
	const imageInput = event.target;
	const imagePreview = document.getElementById("imagePreview");

	if (imageInput.files && imageInput.files[0]) {
		const reader = new FileReader();

		reader.onload = function (e) {
			imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview Image" class="img-thumbnail" style="max-width: 50%; height: auto;">`;
		};
		$("#error-image").html("");

		reader.readAsDataURL(imageInput.files[0]);
	} else {
		imagePreview.innerHTML = "";
	}
}

function get_data() {
	delete_error();
	$.ajax({
		url: base_url + _controller + "/get_data",
		method: "GET",
		dataType: "json",
		success: function (data) {
			console.log(data);
			$("[name='id']").val(data[0].id);
			$("[name='nama']").val(data[0].name);
			$("[name='alamat']").val(data[0].address);
			$("[name='telepon']").val(data[0].phone_number);
			$("[name='email']").val(data[0].email);
			$("[name='sejarah']").val(data[0].sejarah);
			$("[name='visi']").val(data[0].visi);
			$("[name='misi']").val(data[0].misi);
			$("[name='map']").val(data[0].embed_address);
			var imageUrl = base_url + "/assets/image/district/" + data[0].logo;
			imagePreview.innerHTML = `<img src="${imageUrl}" alt="Preview Image" class="img-thumbnail" style="max-width: 50%; height: auto;">`;

			$("#image").attr("src", imageUrl);

			var mapUrl = data[0].embed_address;
			$("iframe").attr("src", mapUrl);
		},
		error: function (xhr, textStatus, errorThrown) {
			console.log(xhr.statusText);
		},
	});
}

function edit_data() {
	var formData = new FormData();
	formData.append("id", $("[name='id']").val());
	formData.append("nama", $("[name='nama']").val());
	formData.append("alamat", $("[name='alamat']").val());
	formData.append("telepon", $("[name='telepon']").val());
	formData.append("email", $("[name='email']").val());
	formData.append("sejarah", $("[name='sejarah']").val());
	formData.append("visi", $("[name='visi']").val());
	formData.append("misi", $("[name='misi']").val());
	formData.append("map", $("[name='map']").val());

	var imageInput = $("[name='image']")[0];
	if (imageInput.files.length > 0) {
		formData.append("image", imageInput.files[0]);
	}

	$.ajax({
		type: "POST",
		url: base_url + _controller + "/edit_data",
		data: formData,
		dataType: "json",
		processData: false,
		contentType: false,
		success: function (response) {
			if (response.errors) {
				delete_error();
				for (var fieldName in response.errors) {
					$("#error-" + fieldName).show();
					$("#error-" + fieldName).html(response.errors[fieldName]);
				}
			} else if (response.success) {
				$("body").append(response.success);
				get_data();
			}
		},
		error: function (xhr, status, error) {
			console.error("AJAX Error: " + error);
		},
	});
}
