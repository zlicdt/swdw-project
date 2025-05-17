<?php
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login / Register</title>
    <meta charset="UTF-8">
</head>
<body>
    <form id="registerForm" action="./php/register.php" method="post">
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <input type="hidden" name="confirm_password" value="<?php echo $confirm_password; ?>">
        <input type="hidden" id="realname" name="realname" value="">
    </form>
    
    <script>
    var realname = prompt("Enter your real name:", "");
    
    if (realname !== null && realname !== "") {
        var realnameField = document.getElementById("realname");
        if (realnameField) {
            realnameField.value = realname;
            document.getElementById("registerForm").submit();
        }
    } else {
        alert("You must enter your real name to continue.");
    }
    </script>
</body>
</html>