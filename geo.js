function init() {
	if(navigator.geolocation)
	{
		alert("1");
		document.getElementById("msg").innerHTML = "Geolocation Service is trying to find you ...";
		navigator.geolocation.getCurentPosition(successFunction, errorFunction);
	}
	else
	{
		document.getElementById("msg").innerHTML = "Your Browser Does not Support Geolocation Services"
	}
}

onload = init();

function errorFunction(position) {
	alert("2");
	document.getElementById("msg").innerHTML = "Geolocation Service Cannot find you at the monment";
}

function successFunction(position) {
	alert("3");
	var lat = position.coords.latitude;
	var lng	= position.coords.longitude;
	document.getElementById("msg").innerHTML = "Found you at ...<br> Latitude: " + lat + ", Longitude: " + lng;

	var latlng = new google.maps.LatLng(lat, lng);
	var options = {zoom: 18, center: latlng, mapTypeId: google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("map"), options);
	var marker = new google.maps.Marker({position: latlng, map: map, title:"You Are Here"});
}