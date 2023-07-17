<?php
// Connect to MySQL using mysqli and store the connection in $samb
$samb = mysqli_connect("localhost", "root", "", "login");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
?>
