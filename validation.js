
function validate(){

	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let message = document.getElementById('message').value;
	let rating = document.getElementById('rating').value;

	if(name=="" && email=="" && message=="" && rating=="none"){
		alert("Can't submit an empty form!");
		return false;
	}
	else
	{
		return true;
	}

}