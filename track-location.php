<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Location</title>
</head>
<body>
    <h1>Live Location</h1>
    <p>Fetching live location...</p>
    <script>
        navigator.geolocation.getCurrentPosition(position => {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            document.body.innerHTML += `<p>Latitude: ${latitude}</p>`;
            document.body.innerHTML += `<p>Longitude: ${longitude}</p>`;
        }, () => {
            alert("Unable to fetch location. Please enable location permissions!");
        });
    </script>
</body>
</html>
