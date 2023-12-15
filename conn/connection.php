<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "db_mlteam";


$conn = mysqli_connect($server, $user, $pass, $db_name);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

?>