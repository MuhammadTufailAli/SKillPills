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