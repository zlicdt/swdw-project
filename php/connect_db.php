<?php
/*  Now MySQL server is unknown
    Don't use this code
*/
$username = "root";
$password = "";
$host = "localhost";
$database = "workshop1";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "<span>Connected successfully</span>";
?>