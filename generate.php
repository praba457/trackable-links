<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = htmlspecialchars($_POST['phone']); // Get phone number
    $uniqueId = uniqid(); // Generate a unique link ID
    $trackableLink = "https://your-vercel-app.vercel.app/track-location.php?id=" . $uniqueId;

    echo "<h1>Trackable Link Generated</h1>";
    echo "<p>Phone Number: $phoneNumber</p>";
    echo "<p><a href='$trackableLink' target='_blank'>Click Here to View the Link</a></p>";
    echo "<a href='index.html'>Go Back</a>";
}
?>
