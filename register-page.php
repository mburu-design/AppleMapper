<!DOCTYPE html>
<html lang="en">
	<head>
 		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>Register Page</title>

		<!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="styl.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	</head>
    <body>
    <div class="container">
		<div class="legend">
            <img src="images/apple.jpg" alt="Apple Logo">
        </div>
        <h1>Register Apple</h1>
        <form action="process-register.php" method="POST">
				<div class="form-group">
					<label for="apple_id">AppleId:</label>
                    <input type="number" class="form-control" id="apple_id" name="apple_id"	placeholder="Apple Id"  required >
                </div>
           
				<div class="form-group"> 
					<label for="yop">Year of planting:</label>
					<input type="number" class="form-control" id="yop"	name="yop" 	placeholder="Year of planting" maxlength="30" required >
				</div>
				

				<div class="form-group">
					<label for="breed">Breed:</label>
					<input type="text" class="form-control" id="breed" name="breed" placeholder=" Apple Breed" maxlength="60" required>
				</div>

				<div class="form-group">
					<label for="apple_row">Apple Row:</label>
					<input type="number" class="form-control" id="apple_row" name="apple_row" placeholder="Apple Row" maxlength="30" required >
				</div>

				<div class="form-group">
					<label for="apple_column">Apple Column:</label>
					<input type="number" class="form-control" id="apple_column" name="apple_column" placeholder="Apple Column" maxlength="30" required >
				</div>

				<div class="form-group">
					<label for="latitude">Latitude:</label>
					<input type="text" class="form-control" id="geolocationLatitude" name="latitude" placeholder="Geolocation" maxlength="30"  required value >
				</div>

				<div class="form-group">
				    <label for="longitude" class="col-sm-2 col-form-label text-right">Longitude:</label>
					<input type="text" class="form-control" id="geolocationLongitude" name="longitude" placeholder="Geolocation" maxlength="30"  required value >
                </div>
				<input id="submit" type="submit" class="btn" name="submit" value="Submit">
		</form>
	</div>					
	<script>
		var latitude = document.getElementById("geolocationLatitude");
		var longitude = document.getElementById("geolocationLongitude");
		latitude.value = getLatitude();
		longitude.value=getLongitude();

		function getLatitude() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showLatitude);

		} else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
		}

		function showLatitude(position) {
		latitude.value =  position.coords.latitude;
	
		}
		function getLongitude() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showLongitude);

		} else {
			alert("Geolocation is not supported by this browser.");
		}
		}
		function showLongitude(position) {
		longitude.value =  position.coords.longitude;
		}
	</script>