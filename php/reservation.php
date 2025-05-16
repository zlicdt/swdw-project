<?php
session_start();
// require 'connect_db.php';
require 'connect_db_local.php';

// Check login status
if (!isset($_SESSION['username'])) {
    echo "<script>
        alert('Please login first!');
        window.location.href = '../loginRegForm.html';
    </script>";
    exit;
}

$username = $_SESSION['username'];

$hometown_code = $_POST['hometown'];

// Initialize the city variable
$city = "";
switch($hometown_code) {
    case "H1":
        $city = "Guangzhou City";
        break;
    case "H2":
        $city = "Jilin City";
        break;
    case "H3":
        $city = "Jiujiang City";
        break;
    case "H4":
        $city = "Quanzhou City";
        break;
}

// Update the database with the selected city
$sql = "UPDATE touristMem SET city='$city' WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
        alert('Reservation city already updated to $city');
        window.location.href = '../hometowns.php';
    </script>";
} else {
    echo "<script>
        alert('Reservation failed.');
        window.location.href = '../hometowns.php';
    </script>";
}

$conn->close();
?>