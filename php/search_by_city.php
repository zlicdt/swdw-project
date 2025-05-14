<?php
require 'connect_db_local.php';
// require 'connect_db.php';

$searchtarget = $_POST['search'];

$sql = "SELECT username FROM touristMem WHERE city = '$searchtarget'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $output = "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<li>" . $row['username'] . "</li>";
    }
    $output .= "</ul>";
    echo "<script>
        document.getElementById('name_field').innerHTML = '$output';
    </script>";
} else {
    echo "<script>
        document.getElementById('name_field').innerHTML = '0 results';
    </script>";
}
mysqli_close($conn);
?>