
function validateemail() {
    var ele = document.getElementById('em').value;
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(ele) ) {  
      document.getElementById('result1').style.visibility = "hidden";
      document.getElementById('result1').style.display = "none";
      
    } else {
      message = "Please Enter Valid Email Address";
      document.getElementById('result1').innerHTML = message;
      document.getElementById('result1').style.visibility = "visible";
      document.getElementById('result1').style.display = "inline";
    }
}

function showpass() {
	var pass = document.getElementById('pass');
	if (pass.type == 'password') {
		return show();
	}
	else {
		return hide();
	}
}

function show() {
	var pass = document.getElementById('pass');
	pass.setAttribute('type','text');
}

function hide() {
	var pass = document.getElementById('pass');
	pass.setAttribute('type','password');
}

function CloseTufail() {
	document.getElementById('bigtufail').style.display = 'none';
}