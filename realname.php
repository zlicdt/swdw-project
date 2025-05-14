<?php
$username = $_GET['username'];
$password = $_GET['password'];
$confirm_password = $_GET['confirm_password'];

$realname = $_POST['realname'];

if (empty($realname)) {
    echo "<script>
        alert('Real name is required!');
        window.location.href = './realname.php?username=" . urlencode($username) . "&password=" . urlencode($password) . "&confirm_password=" . urlencode($confirm_password) . "';
    </script>";
    exit;
}

$_POST['username'] = $username;
$_POST['password'] = $password;
$_POST['confirm_password'] = $confirm_password;
    
require './php/register.php';
exit;

?>
<!DOCTYPE html>
<head>
    <title>Login / Register</title>
    <meta charset="UTF-8">
</head>
<body style="background-color: #f8f8f8;">
    <form id="registerForm" action="./php/register.php" method="post" style="display: none;">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <input type="hidden" name="password" value="<?php echo htmlspecialchars($password); ?>">
        <input type="hidden" name="confirm_password" value="<?php echo htmlspecialchars($confirm_password); ?>">
        <input type="hidden" id="realname" name="realname" value="">
    </form>
    
    <script>
        (function() {
            var realName = prompt('Please enter your real name:', '');
            
            if (realName === null) {
                alert('Real name is required!');
                window.location.href = './loginRegForm.html';
            } else {
                document.getElementById('realname').value = realName;
                document.getElementById('registerForm').submit();
            }
        })();
    </script>
</body>
</html>
