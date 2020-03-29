<html>
<head>
<link rel="stylesheet" href="showa.css">
    <meta charset="UTF-8">
    <title>ข้อมูลทีมทั้งหมด</title>
    <script>
    function confirmGo() {
        return confirm("Let Go");
    }
</script>
</head>
<body>
    <div id='grob'>
    <h2>ข้อมูลทีมทั้งหมด</h2>
<table>
<tr id="r1">
    <td>ทีมที่</td>
    <td>ชื่อทีม</td>
    <td>ตรวจสอบข้อมูลทีม</td>
    
    </tr>
<?php
// 1. Connect 
require("connect.php");
 // 2. Select SQL
$sqlcont = "SELECT COUNT(*) AS 'count' FROM player WHERE TEAM_ID ";
$Recount = mysqli_query($conn, $sqlcont);
$row1 = mysqli_fetch_assoc($Recount);

 $sql = "SELECT * FROM player";
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
 echo "<form action='showdata1.php' method='get'>";
 echo "<tr>";
 echo "<td><input type='text' name='team_id'size='5' id='r3' value=" . $row["TEAM_ID"] .  " readonly></td>";
 echo "<td><input type='text' name='teame_name' id='r3' value=" . $row["TEAM_NAME"] . " readonly></td>";
 echo "<td><input type='submit' name='send' value='Go' onClick='return confirmGo()'></td>";
 echo "</tr>";
 echo"</form>";
 }
 mysqli_close($conn);
 ?>
</table>

<form action="main.php" method="get">
<input type="submit" value="กลับหน้าหลัก" id="btn">
</form></div>
<div id="textCount">
    <h4>จำนวนผู้เข้าแข่งขันทั้งหมด : <?php echo $row1["count"] ?> ทีม</h4>
</div>
</body>
</html>