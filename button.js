function choose() {
	alert("here");
	document.getElementById("pepperoni").checked = true ;
}

function init(){
    document.getElementById("btn").onclick=choose;
}

onload = init;