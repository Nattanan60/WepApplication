<?php

    require("connect.php");
//teamname
    $sql = "SELECT * FROM player ";
// $team_name = $_GET['team_name'];
//name
$result = mysqli_query($conn, $sql);
echo "id: " . $row["TEAM_NAME"]. " - Name: " . $row["NAME"]. " " . $row["NAME"]. "<br>";
// $name = $_GET['name'];
// $name2 = $_GET['name2'];
// $name3 = $_GET['name3'];
// $name4 = $_GET['name4'];
// $name5 = $_GET['name5'];
// $name6 = $_GET['name6'];


// echo $team_name;
// echo $name;
// echo $name2;
// echo $name3;
// echo $name4;
// echo $name5;
// echo $name6;





?>