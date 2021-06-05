function validateForm()  {
    var name = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var bday = document.getElementById("birthday").value;
    var prod = document.getElementById("product").value;
	var m = document.getElementById("monthly").checked;
	var w = document.getElementById("weekly").checked;
    if(name == "") {
        alert("Please enter your name, it should not be blank");
        return false;
    }
    if(email == "") {
        alert("Please enter you email.");
        return false;
    }
	if(m == true) {
		var freq = "Monthly";
	}
	if(w == true) {
		var freq = "Weekly";
	}
    var message = "Thank you for signing up for the Petite Treats Weekly newsletter" +
     "\nWe have added the following information to our files regarding your interests:" +
      "\nName: " + name +
      "\nEmail: " + email +
      "\nProduct interests: " + prod + 
      "\nBirthday: " + bday +
	  "\nFrequency: " + freq;

    alert(message);

    return true;
}