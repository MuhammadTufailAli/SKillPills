function showdropdownmenu() {
	var check = document.getElementById('hid').style.visibility;
	if (check == "hidden"){
		return show();
	}
	else{
		return hide();
	}
}

function show() {
	document.getElementById('hid').style.visibility = "visible";
}

function hide() {
	document.getElementById('hid').style.visibility = "hidden";
}


document.getElementById('mybtn').addEventListener("click",showsidebar);
function showsidebar() {
	var navSize = document.getElementById('pata').style.width;
	if (navSize == "250px"){
		return hideside();
	}
	else {
		return showside();
	}
}

function showside() {
		document.getElementById('pata').style.width ="250px";

}

function hideside() {
		document.getElementById('pata').style.width ="0px";
	
}

function AllowOnlyText(evt) {
  var ch = String.fromCharCode(evt.which);

  if (!(/[a-z]/.test(ch)) && !(/[A-Z]/.test(ch))) {
    evt.preventDefault();
  }
}
function isInputNumber(evt) {
  var ch = String.fromCharCode(evt.which);

  if (!(/[0-9]/.test(ch))) {
    evt.preventDefault();
  }


}
function validatecnic() {
    var ele = document.getElementById('cnic').value;
    if (ele.length == 13) {  
      document.getElementById('result').style.visibility = "hidden";
      document.getElementById('result').style.display = "none";
      
    } else {
      message = "Please Enter 13 digits as CNIC/NICOP#";
      document.getElementById('result').innerHTML = message;
      document.getElementById('result').style.visibility = "visible";
      document.getElementById('result').style.display = "inline";
    }
}

function validatemn() {
    var ele = document.getElementById('mn').value;
    if (ele.length == 11) {  
      document.getElementById('result1').style.visibility = "hidden";
      document.getElementById('result1').style.display = "none";
      
    } else {
      message = "Mobile Number has 11 digits";
      document.getElementById('result1').innerHTML = message;
      document.getElementById('result1').style.visibility = "visible";
      document.getElementById('result1').style.display = "inline";
    }
}



function switchclass() {
	var element = document.getElementById('myDiv');
	var element1 = document.getElementById('minus');
	if (element.classList.contains('in')) {
		element.classList.remove('in');
		element.classList.remove('colapse');
		element.classList.add('colapse');
		element1.classList.add('colapsed');
	}
	else {
		element.classList.remove('colapse');
		element.classList.add('colapse');
		element.classList.add('in');
		element1.classList.remove('colapsed');
		
	}
}

function switchclass1() {
	var element = document.getElementById('myDiv1');
	var element1 = document.getElementById('minus1');
	if (element.classList.contains('in')) {
		element.classList.remove('colapse');
		element.classList.remove('in');
		element.classList.add('colapse');
		
		element1.classList.add('colapsed');
	}
	else {
		element.classList.remove('colapse');
		element.classList.add('colapse');
		element.classList.add('in');
		element1.classList.remove('colapsed');
		
	}
}
