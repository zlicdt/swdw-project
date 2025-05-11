<?php
require 'connect_db_local.php';
// require 'connect_db.php';

$searchtarget = $_POST['search'];

$sql = "SELECT * FROM touristMem WHERE username LIKE '%$searchtarget%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // TODO: Output username & real_name & city
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>