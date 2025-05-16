<!DOCTYPE html>
<head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="divs">
        <table id="tbs">
            <tr>
                <th id="th_style_1" style="width: 256px;"><a href="../hometowns.php">Our Hometowns</a></th>
                <th id="th_style_1" style="width: 384px;"><a href="../loginRegForm.html">Login / Register</a></th>
                <th id="th_style_1" style="width: 128px;"><a href="../AboutUs.html">About Us</a></th>
            </tr>
            <tr>
                <th id="th_style_3i" colspan="3">
                    <h1>Search Panel</h1>
                </th>
            </tr>
            <tr>
                <th id="th_style_3i" colspan="1" style="height: 300px;">
                    <div>
                        <form id="adminForm" action="search.php" method="get">
                            <div id="name_field">
                                <h3>List users by reserved city</h3>
                                <label for="city">Select a city: </label>
                                <br>
                                <select id="city" name="city" action="search.php">
                                    <option value="Guangzhou City" >Guangzhou City</option>
                                    <option value="Jilin City" >Jilin City</option>
                                    <option value="Jiujiang City" >Jiujiang City</option>
                                    <option value="Quanzhou City" >Quanzhou City</option>
                                </select>
                                <button type="submit">Search</button>
                                <?php
                                if(isset($_GET['city'])) {
                                    require 'connect_db_local.php';
                                    // require 'connect_db.php';
                                    // Get the selected city
                                    $selectedCity = $_GET['city'];
                                    $sql = "SELECT username FROM touristMem WHERE city = '$selectedCity'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        echo "<br><span style='font-weight: bold'>User(s) in ". $selectedCity .":</span>";
                                        echo "<ul>";
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<li>" . $row['username'] . "</li>";
                                        }
                                        echo "</ul>";
                                    } else {
                                        echo "<p>No users found in the selected city.</p>";
                                    }
                                    $conn->close();
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </th>
                <th id="th_style_3i" colspan="2">
                    <div>
                        <form action="search.php" method="post">
                            <h3>List reserved city by username</h3>
                            <label for="city">Select a user: </label>
                            <br>
                            <select id="users" name="users">
                                <?php
                                // Connect to the database
                                require 'connect_db_local.php';
                                // require 'connect_db.php';
                                // Fetch all usernames from the database
                                $sql = "SELECT username FROM touristMem";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['username'] . "'>" .$row['username'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No users found</option>";
                                }
                                $conn->close();
                                ?>
                            </select>
                            <button type="submit">Search</button>
                                <?php
                                require 'connect_db_local.php';
                                // require 'connect_db.php';
                                // Get the selected user
                                $selectedUser = $_POST['users'];
                                $sql = "SELECT city FROM touristMem WHERE username = '$selectedUser'";
                                $result = $conn->query($sql);
                                // Check if the query was successful
                                if ($result->num_rows > 0) {
                                    
                                    if ($row = $result->fetch_assoc()) {
                                        if ($row['city'] !== NULL && $row['city'] !== '') {
                                            echo "<br><span style='font-weight: bold'>City reserved by ". $selectedUser .": </span>";
                                            echo "<span style='font-weight: bold'>". $row['city'] ."</span>";
                                        } else {
                                            echo "<p>No reservation found for this user.</p>";
                                        }
                                    }
                                }
                                $conn->close();
                                ?>
                        </form>
                    </div>
                </th>
            </tr>
        </table>
    </div>
</body>