<?php
require("connect.php");

$NAME = $_GET['NAME'];
$NAME2 = $_GET['NAME2'];
$NAME3 = $_GET['NAME3'];
$NAME4 = $_GET['NAME4'];

$INGAME = $_GET['ingame'];
$INGAME2 = $_GET['ingame2'];
$INGAME3 = $_GET['ingame3'];
$INGAME4 = $_GET['ingame4'];
$TEAM_NAME = $_GET['teame_name'];
$TEAM_ID = $_GET['TEAM_ID'];

$send = $_GET['send'];
// $error=array();

// $user_check = "SELECT * FROM player WHERE team_name = '$TEAM_NAME' or name= '$NAME' or name2 = '$NAME2' or name3 = '$NAME3' or name4 = '$NAME4' or ingame = '$INGAME' or ingame2 = '$INGAME2'or ingame3 = '$INGAME3'or ingame4 = '$INGAME4'";
// $query = mysqli_query($conn, $user_check);
// $result = mysqli_num_rows($query);
// $user_check0 = "SELECT * FROM player WHERE team_name = '$TEAM_NAME'";
// $query0 = mysqli_query($conn, $user_check0);
// $result0 = mysqli_num_rows($query0);

// if($result0 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อทีมของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// } 
// $user_check1 = "SELECT * FROM player WHERE name = '$NAME' or name ='$NAME2' or name ='$NAME3' or name ='$NAME4'";
// $query1 = mysqli_query($conn, $user_check1);
// $result1 = mysqli_num_rows($query1);
// if($result1 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// }
// $user_check2 = "SELECT * FROM player WHERE name2 = '$NAME2' or name2 ='$NAME' or name2 ='$NAME3' or name2 ='$NAME4'";
// $query2 = mysqli_query($conn, $user_check2);
// $result2 = mysqli_num_rows($query2);
// if($result2 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// }  

// $user_check3 = "SELECT * FROM player WHERE name3 = '$NAME3' or name3 ='$NAME' or name3 ='$NAME2' or name3 ='$NAME4'";
// $query3 = mysqli_query($conn, $user_check3);
// $result3 = mysqli_num_rows($query3);
// if($result3 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// } 

// $user_check4 = "SELECT * FROM player WHERE name4 = '$NAME4'or name4 ='$NAME' or name4 ='$NAME2' or name4 ='$NAME3'";
// $query4 = mysqli_query($conn, $user_check4);
// $result4 = mysqli_num_rows($query4);
// if($result4 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// } 

// $user_check5 = "SELECT * FROM player WHERE ingame = '$INGAME' or ingame = '$INGAME2' or ingame = '$INGAME3' or ingame = '$INGAME4'";
// $query5 = mysqli_query($conn, $user_check5);
// $result5 = mysqli_num_rows($query5);
// if($result5 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อในเกม ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// }


// $user_check6 = "SELECT * FROM player WHERE ingame2 = '$INGAME2' or ingame2 = '$INGAME' or ingame2 = '$INGAME3' or ingame2 = '$INGAME4'";
// $query6 = mysqli_query($conn, $user_check6);
// $result6 = mysqli_num_rows($query6);
// if($result6 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ-นามสกุล ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// }  

// $user_check7 = "SELECT * FROM player WHERE ingame3 = '$INGAME3' or ingame3 = '$INGAME' or ingame3 = '$INGAME2' or ingame3 = '$INGAME4'";
// $query7 = mysqli_query($conn, $user_check7);
// $result7 = mysqli_num_rows($query7);
// if($result7 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ-นามสกุล ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// } 

// $user_check8 = "SELECT * FROM player WHERE ingame4 = '$INGAME4' or ingame4 = '$INGAME' or ingame4 = '$INGAME2' or ingame = '$INGAME3'";
// $query8 = mysqli_query($conn, $user_check8);
// $result8 = mysqli_num_rows($query8);
// if($result8 > 0){
//     array_push($error, "0");
//      echo "<script>";
//      echo "alert('ชื่อ-นามสกุล ของท่านได้ทำการลงทะเบียนแล้ว');";
//      echo "window.history.back();";
//      echo "</script>"; 
// } 
// else if ($error == null) {
    if($send == 'แก้ไข') {   
        // 2. Select
        $sql = "UPDATE player ";
        $sql .= "SET NAME = '$NAME', NAME2 = '$NAME2', NAME3 = '$NAME3', NAME4 = '$NAME4', 
        INGAME = '$INGAME', INGAME2 = '$INGAME2', INGAME3 = '$INGAME3', INGAME4 = '$INGAME4', TEAM_NAME = '$TEAM_NAME'";
        $sql .= "WHERE TEAM_ID = $TEAM_ID";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('ข้อมูลของท่านถูกแก้ไขแล้ว');";
        echo "window.history.back();";
        echo "</script>"; 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    
}

?>