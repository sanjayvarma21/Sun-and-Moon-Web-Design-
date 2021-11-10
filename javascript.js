function validateForm() {
	var name = document.forms["myNewsLetter"]["name"].value;
	var email = document.forms["myNewsLetter"]["email"].value;
	var product = document.forms["myNewsLetter"]["product"].value;
	var day = document.forms["myNewsLetter"]["day"].value;
	var month = document.forms["myNewsLetter"]["month"].value;
	if (name == "") {
		alert("Name must be filled out");
		return false;
	}
	if (email == "") {
		alert("Email must be filled out");
		return false;
	}if (product == "") {
		alert("Product must be filled out");
		return false;
	}if (day == "") {
		alert("Day must be filled out");
		return false;
	}if (month == "") {
		alert("Month must be filled out");
		return false;
	}
}