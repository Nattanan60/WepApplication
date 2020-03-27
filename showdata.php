<html>
<head>
<link rel="stylesheet" href="show.css">
    <meta charset="UTF-8">
    <title>ข้อมูลทีม</title>
</head>
<body>
<div>
    <h2>ข้อมูลทีม</h2>
<table>
        <tr id="r2">
        <td>ทีมที่</td>
        <td>ชื่อผู้เล่นคนที่1</td>
        <td>ชื่อผู้เล่นคนที่2</td>
        <td>ชื่อผู้เล่นคนที่3</td>
        <td>ชื่อผู้เล่นคนที่4</td>
        <td>แก้ไข</td>
        </tr>
<?php
require("connect.php");
$Search = $_GET['Search'];
$sql = "SELECT * FROM player ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    if($Search == $row['TEAM_NAME']){
    echo "<form action='update_team.php' method='get'>";
    echo "<tr>"; 
    echo "<td><input type='text' name='TEAM_ID' id='r3' value=" . $row["TEAM_ID"] . " readonly></td>";
    echo "<td><input type='text' name='NAME' id='r3' value=" . $row["NAME"] . " ></td>"; 
    echo "<td><input type='text' name='NAME2' id='r3' value=" . $row["NAME2"] . " ></td>"; 
    echo "<td><input type='text' name='NAME3' id='r3' value=" . $row["NAME3"] . " ></td>"; 
    echo "<td><input type='text' name='NAME4' id='r3' value=" . $row["NAME4"] . " ></td>";  
    echo "<td><input type='submit' name='send' value='แก้ไข'></td>";   
    echo "</tr>";
    }
}
}
?>
 </table>
 <table >
 <tr >
        <td id="r2">ชื่อทีม</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่1</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่2</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่3</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่4</td>
        <td id="r2">แก้ไข</td>
        </tr>
        <?php
require("connect.php");
$Search = $_GET['Search'];
$sql = "SELECT * FROM player ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    if($Search == $row['TEAM_NAME']){
    echo "<form action='update_team.php' method='get'>";
    echo "<tr>"; 
    echo "<td><input type='text' name='teame_name' id='r3' value=" . $row["TEAM_NAME"] . " ></td>";
    echo "<td><input type='text' name='nameingame' id='r3' value=" . $row["INGAME"] . " ></td>"; 
    echo "<td><input type='text' name='nameingame2' id='r3' value=" . $row["INGAME2"] . " ></td>"; 
    echo "<td><input type='text' name='nameingame3' id='r3' value=" . $row["INGAME3"] . " ></td>"; 
    echo "<td><input type='text' name='nameingame4' id='r3' value=" . $row["INGAME4"] . " ></td>";  
    echo "<td><input type='submit' name='send' value='แก้ไข'></td>";   
    echo "</tr>";
    echo "</form>";
    }
}
}
?>
</table>
 <form action="data.php" method="get">
<input type="submit" value="กลับ" id="btn">
</form></div>
</body>
</html>