<?php
  // 1. CONNECT
  require("connect.php");  

  $NAME = $_REQUEST['name'];
  $NAME2 = $_REQUEST['name2'];
  $NAME3 = $_REQUEST['name3'];
  $NAME4 = $_REQUEST['name4'];
  $NAME5 = $_REQUEST['name5'];
  $NAME6 = $_REQUEST['name6'];
  $TEAM_NAME = $_REQUEST['team_name'];
//   $MEM = $_REQUEST['mem'];
//echo "TEAM_NAME: ". $TEAM_NAME . "<br/>";
  
// echo "NAME: ". $NAME . "<br/>";
// echo "NAME: ". $NAME2 . "<br/>";
// echo "NAME: ". $NAME3. "<br/>";
// echo "NAME: ". $NAME4 . "<br/>";
// echo "NAME: ". $NAME5 . "<br/>";
// echo "NAME: ". $NAME6 . "<br/>";
// // echo "MEM: ". $MEM  . "<br/>";

 // 2. SELECT (SQL: INSERT)
  $sql = "INSERT INTO player (NAME, NAME2, NAME3, NAME4, NAME5, NAME6, TEAM_NAME) VALUES ";
  $sql .= "('". $NAME."','". $NAME2."','". $NAME3."','". $NAME4."','". $NAME5."','". $NAME6."','" . $TEAM_NAME."')";
 //echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:main.php");
?>