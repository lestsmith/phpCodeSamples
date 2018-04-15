function init(){
	var canvas = document.getElementById("canvas")
	if(canvas.getContext){
		var ctx = canvas.getContext("2d");
		ctx.fillStyle = "#F30";
		ctx.fillRect(0,0,canvas.width,canvas.height);
		ctx.clearRect(225,25,100,100);
	}
}

onload=init;