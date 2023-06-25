<?php
$username = "scusawco_appuser";
$password = "Samuel@1976";
$database = "scusawco_app";

$conn = new mysqli("localhost", $username, $password, $database);

if(!$conn){
    die("connection not successfully");
}



?>


// <?php
// $servername = "localhost";
// $username = "scusawco_appuser";
// $password = "Samuel@1976";
// $database = "scusawco_app";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $query = "SELECT * FROM `tblclients`,`tblcontacts` LIMIT 100";
// $result = mysqli_query($conn, $query);
// $num=mysqli_num_rows($result);
// ?>
