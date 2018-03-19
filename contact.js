function dataValidation() {
	if (document.getElementById('name').value == "") {
		alert('Please enter your name');
		document.getElementById('name').style.borderColor = "red";
		return false;
	}

	var x=document.forms["myForm"]["name"].value;
	if ( x.length <= 6 || x.length >= 25)  {
	  alert("Please enter a name between 6 and 20 characters");
	  document.getElementById('name').style.borderColor = "red";
	  return false;
	}



	if (document.getElementById('email').value == "") {
		alert('Please enter your email address');
		document.getElementById('email').style.borderColor = "red";
		return false;
	}


	var x=document.forms["myForm"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		  alert("Enter a valid email address");
		  document.getElementById('email').style.borderColor = "red";
		  return false;
	}

	if (document.getElementById('message').value == "") {
		alert('Please type in a message');
		document.getElementById('message').style.borderColor = "red";
		return false;
	}

	var x=document.forms["myForm"]["message"].value;
	if ( x.length <= 50 ) {
		alert('Please enter a message more than 50 characters');
		document.getElementById('message').style.borderColor = "red";
		return false;
	}



}
