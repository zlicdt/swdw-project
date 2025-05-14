<?php
?>

<!DOCTYPE html>
<head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="divs">
        <table id="tbs">
            <tr>
                <th id="th_style_1" style="width: 256px;"><a href="./Admin.html">Admin Page</a></th>
                <th id="th_style_1" style="width: 384px;"><a href="./loginRegForm.html">Login / Register</a></th>
                <th id="th_style_1" style="width: 128px;"><a href="./AboutUs.html">About Us</a></th>
            </tr>
            <tr>
                <th id="th_style_3i" colspan="3">
                    <h1>Admin Panel</h1>
                </th>
            </tr>
            <tr>
                <th id="th_style_3i" colspan="1">
                    <div>
                        <form id="adminForm" action="./php/search_by_city.php">
                            <label for="search">Search User: </label>
                            <input type="text" id="search" name="search" placeholder="Enter username">
                            <input type="submit" value="Search">
                            <div id="name_field"></div>
                        </form>
                    </div>
                </th>
                <th id="th_style_3i" colspan="2">
                    <div>
                        <form action="./php/searchUsers.php" method="post">
                            
                        </form>
                    </div>
                    <!-- TODO: 根据选择的城市查找用户名 -->
                </th>
            </tr>
        </table>
    </div>
</body>