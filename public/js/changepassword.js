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

function showpass(id) {
	var pass = document.getElementById(id);
	if (pass.type == 'password') {
		return showp(id);
	}
	else {
		return hidep(id);
	}
}

function showp(id) {
	var pass = document.getElementById(id);
	pass.setAttribute('type','text');
}

function hidep(id) {
	var pass = document.getElementById(id);
	pass.setAttribute('type','password');
}
function samepasswords()
 {var firstInput = document.getElementById("pass").value;
var secondInput = document.getElementById("pass1").value;

	if (firstInput === secondInput) {
    	document.getElementById('result4').style.visibility="hidden";
    	doucment.getElementById('result4').style.display="block";
	} else {
      message = "New Password and Confirm password should match";
      document.getElementById('result4').innerHTML = message;
      document.getElementById('result4').style.visibility = "visible";
	}
}