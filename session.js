function init() {
	sessionStorage.setItem("originalList", document.getElementById("list").innerHTML);
}

onload = init;

function restore() {
	sessionStorage.setItem("customlist", document.getElementById("list").innerHTML);
	document.getElementById("list").innerHTML = sessionStorage.getItem("originalList");
}

function show(){
	document.getElementById("list").innerHTML = sessionStorage.getItem("customlist");
}

function wipe() {
	document.getElementById("list").innerHTML = sessionStorage.getItem("originalList");
	sessionStorage.removeItem("customlist");
}