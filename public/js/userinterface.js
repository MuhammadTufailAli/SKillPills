

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


changecolor1();

function changecolor1(){
	if(document.getElementById('coursevalue').innerText=='Not Entrolled'){
		document.getElementById('coursevalue').style.color="red";
		
	}
	else{
		document.getElementById('coursevalue').style.color="Green";
		document.getElementById('coursevalue').href="/coursevideos";
	}
	if(document.getElementById('coursevalue1').innerText=='Not Entrolled'){
		document.getElementById('coursevalue1').style.color="Red";
		
	}
	else{
		document.getElementById('coursevalue1').style.color="Green";
		document.getElementById('coursevalue1').href="/coursevideos";
	}
	if(document.getElementById('coursevalue2').innerText=='Not Entrolled'){
		document.getElementById('coursevalue2').style.color="Red";
	}
	else{
		document.getElementById('coursevalue2').style.color="Green";
		document.getElementById('coursevalue2').href="/coursevideos";
	}
	if(document.getElementById('coursevalue3').innerText=='Not Entrolled'){
		document.getElementById('coursevalue3').style.color="Red";
	}
	else{
		document.getElementById('coursevalue3').style.color="Green";
		document.getElementById('coursevalue3').href="/coursevideos";
	}
	if(document.getElementById('coursevalue4').innerText=='Not Entrolled'){
		document.getElementById('coursevalue4').style.color="Red";
	}
	else{
		document.getElementById('coursevalue4').style.color="Green";
		document.getElementById('coursevalue4').href="/coursevideos";
	}
	if(document.getElementById('coursevalue5').innerText=='Not Entrolled'){
		document.getElementById('coursevalue5').style.color="Red";
	}
	else{
		document.getElementById('coursevalue5').style.color="Green";
		document.getElementById('coursevalue5').href="/coursevideos";
	}
	if(document.getElementById('coursevalue6').innerText=='Not Entrolled'){
		document.getElementById('coursevalue6').style.color="Red";
	}
	else{
		document.getElementById('coursevalue6').style.color="Green";
		document.getElementById('coursevalue6').href="/coursevideos";
	}
	if(document.getElementById('coursevalue7').innerText=='Not Entrolled'){
		document.getElementById('coursevalue7').style.color="Red";
	}
	else{
		document.getElementById('coursevalue7').style.color="Green";
		document.getElementById('coursevalue7').href="/coursevideos";
	}
	if(document.getElementById('coursevalue8').innerText=='Not Entrolled'){
		document.getElementById('coursevalue8').style.color="Red";
	}
	else{
		document.getElementById('coursevalue8').style.color="Green";
		document.getElementById('coursevalue8').href="/coursevideos";
	}

}




function changecolor(id) {
	var a = document.getElementById("bg-color");
	var b = document.getElementById("bg-color1");
	var c = document.getElementById("bg-color2");
	var d = document.getElementById("bg-color3");
	var e = document.getElementById("bg-color4");
	a.className = "title-bar"+id;
	b.className = "title-bar"+id;
	c.className = "title-bar"+id;
	d.className = "title-bar"+id;
	e.className = "title-bar"+id;


	


}
function get(id){
var k =document.getElementById(id).value;
alert(k);
}

function ajax_color() {
	$(document).ready(function($){
			$('body').on('click', '.view', function () {
			var id = $(this).data('id');
			// ajax
			$.ajax({
			type:"POST",
			url: "ajax-fetch-record.php",
			data: { id: id },
			dataType: 'json',
			success: function(res){
			$('#color').html(res.color);
			}
			});
			});
			});
	


}





