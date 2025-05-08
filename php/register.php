<?php
// require 'connect_db.php';
require 'connect_db_local.php';

$username = $_POST['username'];
$pwd1 = $_POST['password'];
$pwd2 = $_POST['confirm_password'];
$real_name = $_POST['real_name'];

if (empty($username) || empty($pwd1) || empty($pwd2)) {
    echo "<script>
        alert('All fields are required.');
        window.location.href = '../loginRegForm.html';
    </script>";
    exit;
}

if ($pwd1 !== $pwd2) {
    echo "<script>
        alert('Passwords do not match.');
        window.location.href = '../loginRegForm.html';
    </script>";
    exit;
}

$sql_checkifexists = "SELECT * FROM touristMem WHERE username='$username'";
$result_checkifexists = mysqli_query($conn, $sql_checkifexists);
if (mysqli_num_rows($result_checkifexists) > 0) {
    echo "<script>
        alert('Username already exists. Please choose another one.');
        window.location.href = '../loginRegForm.html';
    </script>";
    exit;
}
/* TODO: The fourth column should store the real_name of the user
The first column is mid
*/
$sql = "INSERT INTO touristMem VALUES (NULL, '$username', '$pwd1', '$real_name', NULL)";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Registration successful!');
        window.location.href = '../loginRegForm.html';
    </script>";
} else {
    echo "<script>
        alert('Error: " . mysqli_error($conn) . "');
        window.location.href = '../loginRegForm.html';
    </script>";
}

?>