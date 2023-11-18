document.addEventListener("DOMContentLoaded", function () {
	var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");
	var passwordInput = document.getElementById("password");
    var passwordInput1 = document.getElementById("password1");

	showPasswordCheckbox.addEventListener("change", function () {
		if (showPasswordCheckbox.checked) {
			passwordInput.type = "text";
            passwordInput1.type = "text";
		} else {
			passwordInput.type = "password";
			passwordInput1.type = "password";
		}
	});
});
function delete_error() {
	$("#error-Nama").hide();
	$("#error-email").hide();
	$("#error-no_hp").hide();
	$("#error-username").hide();
	$("#error-password").hide();
	$("#error-password1").hide();
}
function daftar(){
	var formData = new FormData();
	formData.append("nama", $("[name='Nama']").val());
	formData.append("email", $("[name='Email']").val());
	formData.append("telepon", $("[name='no_hp']").val());
	formData.append("username", $("[name='username']").val());
	formData.append("password", $("[name='password']").val());
	formData.append("password1", $("[name='password1']").val());

	$.ajax({
		type: "POST",
		url: base_url + "/" + _controller + "/daftar",
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
				$("body").append(response.success);
			}
		},
		error: function (xhr, status, error) {
			console.error("AJAX Error: " + error);
		},
	});
}
