<!-- connection to the database -->

<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "jsstore";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("could not connect to database" . mysqli_connect_error());
}


?>