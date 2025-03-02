<?php
require 'config.php';

$servername = config('db_host');
$username = config('db_user');
$password = config('db_pass');
$dbname = config('db_name');

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
