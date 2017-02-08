function validate(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if ( username == "Ewskr0" && password == "123.Mdp"){
		alert ("Login successfully");
		window.location = "index.html"; // Redirecting to other page.
		return true;
	}
	
}