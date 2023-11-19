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
	$("#error-akta").hide();
	$("#error-kia").hide();
}
