<?php
session_start();
require 'connect_db_local.php';
// require 'connect_db.php';
if (!isset($_SESSION['username'])) {
    echo "<script>
        alert('Please login first!');
        window.location.href = '../loginRegForm.html';
    </script>";
    exit;
}

$comment = mysqli_real_escape_string($conn, $_POST['comment']);
echo "<script>alert('Comment: $comment');</script>";
$rating = $_POST['rating'];
$city = $_POST['city'];
$user_id = $_SESSION['mid'];
$sql = "INSERT INTO comments (user_id, city, comment_text, rating) VALUES ('$user_id', '$city', '$comment', '$rating')";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Comment success!');
        window.location.href = '../hometowns.php';
    </script>";
} else {
    echo "<script>
        alert('Failed to submit comment.');
        window.location.href = '../hometowns.php';
    </script>";
}
$conn->close();
?>