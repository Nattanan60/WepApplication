<?php
require("connect.php");

$NAME = $_GET['NAME'];
$NAME2 = $_GET['NAME2'];
$NAME3 = $_GET['NAME3'];
$NAME4 = $_GET['NAME4'];

$INGAME = $_GET['nameingame'];
$INGAME2 = $_GET['nameingame2'];
$INGAME3 = $_GET['nameingame3'];
$INGAME4 = $_GET['nameingame4'];
$TEAM_NAME = $_GET['teame_name'];
$TEAM_ID = $_GET['TEAM_ID'];

$send = $_GET['send'];

if($send == 'แก้ไข') {   
    // 2. Select
    $sql = "UPDATE player ";
    $sql .= "SET NAME = '$NAME', NAME2 = '$NAME2', NAME3 = '$NAME3', NAME4 = '$NAME4', 
    INGAME = '$INGAME', INGAME2 = '$INGAME2', INGAME3 = '$INGAME3', INGAME4 = '$INGAME4', TEAM_NAME = '$TEAM_NAME'";
    $sql .= "WHERE TEAM_ID = $TEAM_ID";
    
    echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "Update record successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
mysqli_close($conn);
header("Location:data.php");
    
}
?>