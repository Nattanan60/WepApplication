<?php
  // 1. CONNECT
  require("connect.php");  

  $NAME = $_REQUEST['name'];
  $NAME2 = $_REQUEST['name2'];
  $NAME3 = $_REQUEST['name3'];
  $NAME4 = $_REQUEST['name4'];
  $NAME5 = $_REQUEST['name5'];
  $NAME6 = $_REQUEST['name6'];
  $INGAME = $_REQUEST['nameingame'];
  $INGAME2 = $_REQUEST['nameingame2'];
  $INGAME3 = $_REQUEST['nameingame3'];
  $INGAME4 = $_REQUEST['nameingame4'];
  $INGAME5 = $_REQUEST['nameingame5'];
  $INGAME6 = $_REQUEST['nameingame6'];
  $TEAM_NAME = $_REQUEST['team_name'];

 // 2. SELECT (SQL: INSERT)
  $sql = "INSERT INTO player (NAME, NAME2, NAME3, NAME4, NAME5, NAME6, 
                              INGAME, INGAME2, INGAME3, INGAME4, INGAME5, INGAME6, team_name) VALUES ";
  $sql .= "('". $NAME."','". $NAME2."','". $NAME3."','". $NAME4."','". $NAME5."','". $NAME6."','". $INGAME."',
                              '". $INGAME2."','". $INGAME3."','". $INGAME4."','". $INGAME5."','". $INGAME6."','". $TEAM_NAME."')";
 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:main.php");
?>