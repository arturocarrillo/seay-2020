 function  validate_contact(){
	var firstName, lastName, email, phone, affair, messenger, expressionMail, expressionText;
	firstName = document.getElementById("firstName").value;
	lastName = document.getElementById("lastName").value;
	email = document.getElementById("email").value;
	phone = document.getElementById("phone").value;
	affair = document.getElementById("affair").value;
	messenger = document.getElementById("messenger").value;
	expressionMail =/\w+@\w+\.+[a-z]/;
	expressionText = /[A-Za-zñÑ\s]/;

	if (firstName.length >= 30) {
		alert("El nombre es muy largo (Máximo 30 caracteres)");
		return false;
	}
	else if (lastName.length >= 30) {
		alert("El apellido es muy largo (Máximo 30 caracteres)");
		return false;
	}
	else if (email.length >= 35) {
		alert("El correo es muy largo (Máximo 35 caracteres)");
		return false;
	}
	else if (affair.length >= 30) {
		alert("El Asunto no debe exceder más de 30 caracteres");
		return false;
	}
	else if (phone.length >= 11) {
		alert("El teléfono es muy largo (Maximo 10 digitos)");
		return false;
	}
	else if (isNaN(phone)) {
		$('#phone').css("border-bottom-color", "#F44336");
		$('#phone_error').css("display","block");
		return false;
	}
	
	else if (!expressionText.test(firstName)) {
		$('#first_error').css("display", "block")
		$('#firstName').css("border-bottom-color", "#F44336")
		return false;
	}
	else if (!expressionText.test(lastName)) {
		$('#last_error').css("display", "block")
		$('#lastName').css("border-bottom-color", "#F44336")
		return false;
	}
	else if (!expressionText.test(affair)) {
		$('#affair_error').css("display", "block")
		$('#affair').css("border-bottom-color", "#F44336")
		return false;
	}
	else if (!expressionText.test(messenger)) {
		$('#messenger_error').css("display", "block")
		$('#messenger').css("border-bottom-color", "#F44336")
		return false;
	}

	if (!expressionMail.test(email)) {
	 	$('#email_error').css("display", "block");
	 	$('#email').css("border-bottom-color", "#F44336");
	} else {
		$('#email_error').css("display", "none");
	 	$('#email').css("border-bottom-color", "#008A2A");
	}
}
function contChar(){
		var charEnd = 150;

		setTimeout(function(){
		var valor=document.getElementById('messenger');
		var respuesta=document.getElementById('res_char');
		var cantidad=valor.value.length;
		document.getElementById('res_char').innerHTML = cantidad + ' / ' + (charEnd - cantidad) ;
		if(cantidad>charEnd){
			respuesta.style.color = "red";
		}
		else {
			respuesta.style.color = "black";
		}
		},10);
}