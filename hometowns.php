<!DOCTYPE html>
<head>
    <title>Our Hometowns</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <script src="./js/displayScripts.js"></script>
</head>
<body>
    <div id="divs">
        <table id="tbs">
            <tr>
                <th id="th_style_1" style="width: 256px;"><a href="./hometowns.php">Our Hometowns</a></th>
                <th id="th_style_1" style="width: 384px;"><a href="./loginRegForm.html">Login / Register</a></th>
                <th id="th_style_1" style="width: 128px;"><a href="./AboutUs.html">About Us</a></th>
            </tr>
            <tr>
                <th id="th_style_3i" colspan="3">
                    <div style="text-align: center; vertical-align: middle;">
                        <br>
                        <span style="font-weight: bold;">Hometown Form:</span>
                        <br><br>
                        <form action="./php/reservation.php" method="post">
                            <label for="hometown">Hometown:</label>
                            <br>
                            <select id="hometown" name="hometown" onchange="updateTextSelectedCity()" required>
                                <option value="H1" >Guangzhou City</option>
                                <option value="H2" >Jilin City</option>
                                <option value="H3" >Jiujiang City</option>
                                <option value="H4" >Quanzhou City</option>
                            </select>
                            <br><br>
                            <span>Your city selected is: </span>
                            <input type="text" id="selectedCity" readonly>
                            <br><br>
                            <button type="submit">Make Reservation</button>
                        </form>
                    </div>
                </th>
            </tr>
            <tr>
                <th id="th_style_3">
                    <div id="attrsArea"></div>
                </th>
                <th id="th_style_3">
                    <div id="imgArea"></div>
                </th>
                <script>
        // Update page once when loaded
        var selectElement = document.getElementById("hometown");
        var selectedTag = selectElement.value;
        displayAttrAndImg(selectedTag);
        var selectedValue = selectElement.options[selectElement.selectedIndex].text;
        document.getElementById("selectedCity").value = selectedValue;
        // Update page when the select element changes
        function updateTextSelectedCity() {
            var selectElement = document.getElementById("hometown");
            var selectedTag = selectElement.value;
            displayAttrAndImg(selectedTag);
            var selectedValue = selectElement.options[selectElement.selectedIndex].text;
            document.getElementById("selectedCity").value = selectedValue;
        }
    </script>
                <th id="th_style_3i">
                    <form action="./php/search.php" method="get">
                        <label for="search">Search Panel Entry: </label>
                        <button id="btn" type="submit">Search Panel</button>
                    </form>
                    <form action="./php/submit_comments.php" method="post">
                        <label for="comment">Comment area: </label>
                        <br><br>
                        <textarea name="comment" placeholder="Your comments" style="resize: none;" required></textarea>
                        <input type="number" name="rating" min="1" max="5" placeholder="Rating(1-5)" style="width: 50%;" required>
                        <br>
                        <button type="submit">Add comment</button>
                    </form>
                    <h3>Recent Comments</h3>
                    <div style="margin-top: 20px; border: 1px solid gray; padding: 10px;">
                            <?php
                            session_start();
                            require './php/connect_db_local.php';
                            // require 'connect_db.php';

                            $city = $_GET['city'];
                            $result = mysqli_query($conn, "SELECT * FROM comments WHERE city='$city'");
                            echo "<ul>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                $username_by_id = mysqli_query($conn, "SELECT * FROM touristMem WHERE mid = '$row[user_id]'");
                                $wor = mysqli_fetch_assoc($username_by_id);
                                echo "<li>";
                                echo "From <a href='./hometowns.php' onclick='alert(\"Content: " . $row['comment_text'] . " \\n Rating: ".$row['rating']."\"); return false;'>" . $wor['username'] . "</a>";
                                echo "</li>";
                            }
                            echo "</ul>";
                            $conn->close();
                            ?>
                    </div>
                </th>
            </tr>
        </table>
    </div>
    
</body>