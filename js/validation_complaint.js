 function  validation_complaint(){
	var first_name, last_name, email, phone,address, zip, messenger, expressionMail, expressionText;
	first_name = document.getElementById("first_name").value;
	last_name = document.getElementById("last_name").value;
	email = document.getElementById("email").value;
	phone = document.getElementById("phone").value;
	address = document.getElementById("address").value;
	zip = document.getElementById("zip").value;
	messenger = document.getElementById("messenger").value;
	expressionMail =/\w+@\w+\.+[a-z]/;
	expressionText = /[A-Za-zñÑ\s]/;

	if (first_name.length >= 30) {
		alert("El nombre es muy largo (Máximo 30 caracteres)");
		return false;
	}else if (last_name.length >= 30) {
		alert("El apellido es muy largo (Máximo 30 caracteres)");
		return false;
	}else if (email.length >= 35) {
		alert("El correo es muy largo (Máximo 35 caracteres)");
		return false;
	}else if (address.length >= 30) {
		alert("La dirección no debe exceder más de 30 caracteres");
		return false;
	}else if (zip.length >= 6) {
		alert("El C.P no debe exceder más de 5 caracteres");
		return false;
	}else if (phone.length >= 11) {
		alert("El teléfono es muy largo (Maximo 10 digitos)");
		return false;
	}else if (isNaN(phone)) {
		alert("El teléfono solo debe contener números");
		return false;
	}else if (isNaN(zip)) {
		alert("El C.P solo debe contener números");
		return false;
	}
	else if (!expressionMail.test(email)) {
	 	alert("El formato de correo no es el correcto")
	 	return false;
	} 
}
$('#validate').click(function() {

    if ($('#town').val().trim() === '') {
        alert('Debe seleccionar una opción');

    } else {
        alert('Campo correcto');
    }
});