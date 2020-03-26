<html>
<head>
<link rel="stylesheet" href="show1.css">
    <meta charset="UTF-8">
    <title>ข้อมูลทีมทั้งหมด</title>
</head>
<body>
    <div>
    <h2>ข้อมูลทีมทั้งหมด</h2>
<table>
<tr id="r1">
    <td>ทีมที่</td>
    <td>ชื่อทีม</td>
    <td>ชื่อผู้เล่นคนที่1</td>
    <td>ชื่อผู้เล่นคนที่2</td>
    <td>ชื่อผู้เล่นคนที่3</td>
    <td>ชื่อผู้เล่นคนที่4</td>
    <!-- <td>ชื่อในเกมคนที่1</td>
    <td>ชื่อในเกมคนที่2</td>
    <td>ชื่อในเกมคนที่3</td>
    <td>ชื่อในเกมคนที่4</td>    -->
    </tr>
<?php
// 1. Connect 
require("connect.php");
 // 2. Select SQL
 $sql = "SELECT * FROM player";
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td><input type='text' name='team_id'size='5' id='r3' value=" . $row["TEAM_ID"] .  " readonly></td>";
 echo "<td><input type='text' name='teame_name' id='r3' value=" . $row["TEAM_NAME"] . " readonly></td>";
 echo "<td><input type='text' name='player' id='r3' value=" . $row["NAME"] . " readonly></td>"; 
 echo "<td><input type='text' name='player2' id='r3' value=" . $row["NAME2"] . " readonly></td>"; 
 echo "<td><input type='text' name='player3' id='r3' value=" . $row["NAME3"] . " readonly></td>"; 
 echo "<td><input type='text' name='player4' id='r3' value=" . $row["NAME4"] . " readonly></td>";  
//  echo "<td><input type='text' name='ingame' size='10' value=" . $row["INGAME"]. " ></td>"; 
//  echo "<td><input type='text' name='ingame' size='10' value=" . $row["INGAME2"]. " ></td>"; 
//  echo "<td><input type='text' name='ingame' size='10' value=" . $row["INGAME3"]. " ></td>"; 
//  echo "<td><input type='text' name='ingame' size='10' value=" . $row["INGAME4"]. " ></td>"; 
 echo "</tr>";
 }
 mysqli_close($conn);
 ?>
</table>
<form action="main.php" method="get">
<input type="submit" value="กลับหน้าหลัก">
</form></div>
</body>
</html>