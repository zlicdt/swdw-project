<?php
session_start();
// require 'connect_db.php';
require 'connect_db_local.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "<script>
        alert('Username and password cannot be empty.');
        window.location.href = '../loginRegForm.html';
    </script>";
    exit;
}
$sql = "SELECT * FROM touristMem WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['mid'] = $row['mid'];
    echo "<script>
        alert('Login successful!');
        window.location.href = '../hometowns.php';
    </script>";
    // header("Location: ../hometowns.php");
    // This can not be used because it suddenly jumps back and the alert message can not be shown
    exit;
} else {
    echo "<script>
        alert('Invalid username or password.');
        window.location.href = '../loginRegForm.html';
    </script>";
}
?>