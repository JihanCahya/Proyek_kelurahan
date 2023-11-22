delete_error();

function previewImage(event, imageContainerId) {
	const imageInput = event.target;
	const imageContainer = document.getElementById(imageContainerId);

	if (imageInput.files && imageInput.files[0]) {
		const reader = new FileReader();

		reader.onload = function (e) {
			imageContainer.innerHTML = `<img src="${e.target.result}" alt="Preview Image" class="img-thumbnail" style="width: 100px; height: auto;">`;
		};

		reader.readAsDataURL(imageInput.files[0]);
	} else {
		imageContainer.innerHTML = "";
	}
}

function delete_error() {
	$("#error-kk").hide();
	$("#error-ktp").hide();
	$("#error-akta").hide();
	$("#error-kia").hide();
	$("#error-pengantar").hide();
}

function insert_2() {
	var ktpInput = $("[name='ktp']")[0];
	var pengantarInput = $("[name='pengantar']")[0];

	var formData = new FormData();
	if (ktpInput.files.length > 0) {
		formData.append("ktp", ktpInput.files[0]);
	}
	if (pengantarInput.files.length > 0) {
		formData.append("pengantar", pengantarInput.files[0]);
	}

	$.ajax({
		type: "POST",
		url: base_url + _controller + "/insert_2",
		data: formData,
		dataType: "json",
		processData: false,
		contentType: false,
		success: function (response) {
			delete_error();
			if (response.errors) {
				for (var fieldName in response.errors) {
					$("#error-" + fieldName).show();
					$("#error-" + fieldName).html(response.errors[fieldName]);
				}
			} else if (response.success) {
				$("#modalAjukan").modal("hide");
				get_data();
			}
		},
		error: function (xhr, status, error) {
			console.error("AJAX Error: " + error);
			console.log("Response Text:", xhr.responseText);
		},
	});
}
