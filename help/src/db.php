<?php
    //database
    $servername = "m347-kn04a-db";
    $username = "root";
    $password = "example";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connections
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select Host, User from mysql.user;";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo($row["Host"] . " / " . $row["User"] . "<br />");
    }
?>
