

function AllowOnlyText(evt) {
  var ch = String.fromCharCode(evt.which);

  if (!(/[a-z]/.test(ch)) && !(/[A-Z]/.test(ch))) {
    evt.preventDefault();
  }
}

function validateemail() {
    var ele = document.getElementById('em').value;
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(ele) ) {  
      document.getElementById('result2').style.visibility = "hidden";
      
    } else {
      message = "Please Enter Valid Email Address";
      document.getElementById('result2').innerHTML = message;
      document.getElementById('result2').style.visibility = "visible";
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

function validatepass() {
    var ele = document.getElementById('pass').value;
    if (/(?!^[0-9.!#$%&'*+/=?^_`{|}~-]*$)(?!^[a-zA-Z.!#$%&'*+/=?^_`{|}~-]*$)^([a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{7,})$/.test(ele) ) {  
      document.getElementById('result3').style.visibility = "hidden";
      
    } else {
      message = "Minimum 7 characters with atleast 1 number and 1 alphabet";
      document.getElementById('result3').innerHTML = message;
      document.getElementById('result3').style.visibility = "visible";
    }
}