<?php
// Connect to the database
require('config2.php');

// Start the session
session_start();

// Check if the username and password are submitted
if (isset($_POST['idpengguna'], $_POST['katalaluan'])) {
    // Retrieve the submitted data
    $user = $_POST['idpengguna'];
    $pass = $_POST['katalaluan'];

    // Execute the SQL query
    $query = mysqli_query($samb, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    $row = mysqli_fetch_assoc($query);

    // Check if the query returned any rows or if the password is incorrect
    if (mysqli_num_rows($query) == 0 || $row['password'] != $pass) {
        // Redirect to the login_failed.php page
        header("Location: login_failed.php");
        exit;
    } else {
        // Redirect to the login_success.php page
        header("Location: login_success.php");
        exit;
    }
}
?>
