<?php

$dbServername="localhost";
$dbUsername="cvam0000";
$dbPassword="9412142837";
$dbname="cvam0000";
//connection to the server and select hte database
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
