function init()
{
	var h1tags = document.getElementsByTagName("h1");
	h1tags[2].onclick = react;
}

function react()
{
	this.innerHTML = "Clicked!" ; this.style.color = "red";
}
onload = init;