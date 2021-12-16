function isInputNumber(evt) {
  var ch = String.fromCharCode(evt.which);

  if (!(/[0-9]/.test(ch))) {
    evt.preventDefault();
  }


}

function AllowOnlyText(evt) {
  var ch = String.fromCharCode(evt.which);

  if (!(/[a-z]/.test(ch)) && !(/[A-Z]/.test(ch))) {
    evt.preventDefault();
  }
}

function validatepn() {
    var ele = document.getElementById('pn').value;
    if (ele.length == 11) {  
      document.getElementById('result1').style.visibility = "hidden";
      
    } else {
      message = "Atleast 11 digits required";
      document.getElementById('result1').innerHTML = message;
      document.getElementById('result1').style.visibility = "visible";
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



