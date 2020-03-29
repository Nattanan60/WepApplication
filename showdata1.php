<html>
<head>
<link rel="stylesheet" href="show.css">
    <meta charset="UTF-8">
    <title>ข้อมูลทีม</title>
</head>
<body>
<div>
    <h2>ข้อมูลทีม</h2>
<table >
        <tr id="r2">
        <td>ชื่อทีม</td>
        <td>ชื่อผู้เล่นคนที่1</td>
        <td>ชื่อผู้เล่นคนที่2</td>
        <td>ชื่อผู้เล่นคนที่3</td>
        <td>ชื่อผู้เล่นคนที่4</td>
        </tr>
<?php
require("connect.php");
$teame_name = $_GET['teame_name'];
$sql = "SELECT * FROM player ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    if($teame_name == $row['TEAM_NAME']){
    echo "<tr>"; 
    echo "<td><input type='text' name='teame_name' id='r3' value=" . $row["TEAM_NAME"] . " readonly></td>";
    echo "<td><input type='text' name='player' id='r3' value=" . $row["NAME"] . " readonly></td>"; 
    echo "<td><input type='text' name='player2' id='r3' value=" . $row["NAME2"] . " readonly></td>"; 
    echo "<td><input type='text' name='player3' id='r3' value=" . $row["NAME3"] . " readonly></td>"; 
    echo "<td><input type='text' name='player4' id='r3' value=" . $row["NAME4"] . " readonly></td>";  
    echo "</tr>";
    }
}
}
?>
 </table>
 <table >
 <tr >
        <td id="r4"></td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่1</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่2</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่3</td>
        <td id="r2">ชื่อในเกมผู้เล่นคนที่4</td>
        </tr>
        <?php
require("connect.php");
$teame_name = $_GET['teame_name'];
$sql = "SELECT * FROM player ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    if($teame_name == $row['TEAM_NAME']){
    echo "<tr>"; 
    echo "<td id='r4'></td>";
    echo "<td><input type='text' name='ingame' id='r3' value=" . $row["INGAME"] . " readonly></td>"; 
    echo "<td><input type='text' name='ingame2' id='r3' value=" . $row["INGAME2"] . " readonly></td>"; 
    echo "<td><input type='text' name='ingame3' id='r3' value=" . $row["INGAME3"] . " readonly></td>"; 
    echo "<td><input type='text' name='ingame4' id='r3' value=" . $row["INGAME4"] . " readonly></td>";  
    echo "</tr>";
    }
}
}
?>
</table>
 <form action="show.php" method="get">
<input type="submit" value="กลับ" id="btn">
</form></div>
</body>
</html>