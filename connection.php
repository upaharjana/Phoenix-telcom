<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phoenix";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
?>