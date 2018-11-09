<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div id="demo"></div>
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
    window.location = "https://www.ltd.org/tripplanner.php?from="+position.coords.latitude+","+position.coords.longitude+"&to=420+Taz+Lane%2C+Eugene%2C+OR%2C+United+States&type=departing&route=fast";
}
getLocation();
</script>
</body>
</html>