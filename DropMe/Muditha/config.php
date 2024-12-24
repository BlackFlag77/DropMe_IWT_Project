<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dropme_db";

    //Creating the connection
    $conn = new mysqli($servername, $username, $password, $database);

    //Checking the connection connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>