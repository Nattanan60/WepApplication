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
        <!-- <tr id="r2">
        <td>ทีมที่</td>
        <td>ชื่อผู้เล่นคนที่1</td>
        <td>ชื่อผู้เล่นคนที่2</td>
        <td>ชื่อผู้เล่นคนที่3</td>
        <td>ชื่อผู้เล่นคนที่4</td>
        <td>แก้ไข</td>
        </tr> -->
<?php
require("connect.php");
$txtSearch = $_GET['txtSearch'];
$txtSearch1 = $_GET['txtSearch1'];
$sql = "SELECT * FROM player ";
if($txtSearch != null) {
    $sql .= "WHERE TEAM_NAME LIKE '%" . $txtSearch . "%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr >";
    echo "<td id='r2'>ทีมที่</td>";
    echo "<td id='r2'>ชื่อผู้เล่นคนที่1</td>";
    echo "<td id='r2'>ชื่อผู้เล่นคนที่2</td>";
    echo "<td id='r2'>ชื่อผู้เล่นคนที่3</td>";
    echo "<td id='r2'>ชื่อผู้เล่นคนที่4</td>";
    echo "<td id='r2'>แก้ไข</td>";
    echo "</tr>";

    echo "<form action='update_team.php' method='get'>";
    echo "<tr>"; 
    echo "<td><input type='text' name='TEAM_ID' id='r3' value=" . $row["TEAM_ID"] . " readonly></td>";
    echo "<td><input type='text' name='NAME' id='r3' value=" . $row["NAME"] . " ></td>"; 
    echo "<td><input type='text' name='NAME2' id='r3' value=" . $row["NAME2"] . " ></td>"; 
    echo "<td><input type='text' name='NAME3' id='r3' value=" . $row["NAME3"] . " ></td>"; 
    echo "<td><input type='text' name='NAME4' id='r3' value=" . $row["NAME4"] . " ></td>";  
    echo "</tr>";

    echo "<tr >";
    echo "<td id='r2'>ชื่อทีม</td>";
    echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่1</td>";
    echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่2</td>";
    echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่3</td>";
    echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่4</td>";
    echo "</tr>";

    echo "<tr>"; 
    echo "<td><input type='text' name='teame_name' id='r3' value=" . $row["TEAM_NAME"] . " ></td>";
    echo "<td><input type='text' name='ingame' id='r3' value=" . $row["INGAME"] . " ></td>"; 
    echo "<td><input type='text' name='ingame2' id='r3' value=" . $row["INGAME2"] . " ></td>"; 
    echo "<td><input type='text' name='ingame3' id='r3' value=" . $row["INGAME3"] . " ></td>"; 
    echo "<td><input type='text' name='ingame4' id='r3' value=" . $row["INGAME4"] . " ></td>";  
    echo "<td><input type='submit' name='send' value='แก้ไข'></td>";   
    echo "</tr>";
    echo "</form>";
    
}
}
}
    // 2. STATUS_TH
else if($txtSearch1 != null) {
    // $sql .= "WHERE NAME = '". $txtSearch1 . "' or NAME2 = '". $txtSearch1 . "' or NAME3 =  '" . $txtSearch1 . "' or NAME4 =  '". $txtSearch1 ."'" ;
    $sql .= "WHERE NAME LIKE '%". $txtSearch1 . "%' or NAME2 LIKE '%". $txtSearch1 . "%' or NAME3 LIKE  '%" . $txtSearch1 . "%' or NAME4 LIKE '%". $txtSearch1 ."%'" ;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr >";
        echo "<td id='r6'>ชื่อทีม</td>";
        echo "<td id='r6'>ชื่อผู้เล่นคนที่1</td>";
        echo "<td id='r6'>ชื่อผู้เล่นคนที่2</td>";
        echo "<td id='r6'>ชื่อผู้เล่นคนที่3</td>";
        echo "<td id='r6'>ชื่อผู้เล่นคนที่4</td>";
        echo "</tr>";
        echo "<tr >";
        echo "<td><input type='text' name='teame_name' id='r5' value=" . $row["TEAM_NAME"] . " readonly></td>";
        echo "<td><input type='text' name='NAME' id='r5' value=" . $row["NAME"] . " readonly></td>"; 
        echo "<td><input type='text' name='NAME2' id='r5' value=" . $row["NAME2"] . " readonly></td>"; 
        echo "<td><input type='text' name='NAME3' id='r5' value=" . $row["NAME3"] . " readonly></td>"; 
        echo "<td><input type='text' name='NAME4' id='r5' value=" . $row["NAME4"] . " readonly></td>";  
        echo "</tr>";
        }
}
}

// else if($type == 3) {
//     $sql .= "WHERE INGAME OR INGAME2 OR INGAME3 OR INGAME4 LIKE '%" . $txtSearch . "%'";
// }

// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {

//     echo "<form action='update_team.php' method='get'>";
//     echo "<tr>"; 
//     echo "<td><input type='text' name='TEAM_ID' id='r3' value=" . $row["TEAM_ID"] . " readonly></td>";
//     echo "<td><input type='text' name='NAME' id='r3' value=" . $row["NAME"] . " ></td>"; 
//     echo "<td><input type='text' name='NAME2' id='r3' value=" . $row["NAME2"] . " ></td>"; 
//     echo "<td><input type='text' name='NAME3' id='r3' value=" . $row["NAME3"] . " ></td>"; 
//     echo "<td><input type='text' name='NAME4' id='r3' value=" . $row["NAME4"] . " ></td>";  
//     echo "</tr>";

//     echo "<tr >";
//     echo "<td id='r2'>ชื่อทีม</td>";
//     echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่1</td>";
//     echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่2</td>";
//     echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่3</td>";
//     echo "<td id='r2'>ชื่อในเกมผู้เล่นคนที่4</td>";
//     echo "</tr>";

//     echo "<tr>"; 
//     echo "<td><input type='text' name='teame_name' id='r3' value=" . $row["TEAM_NAME"] . " ></td>";
//     echo "<td><input type='text' name='ingame' id='r3' value=" . $row["INGAME"] . " ></td>"; 
//     echo "<td><input type='text' name='ingame2' id='r3' value=" . $row["INGAME2"] . " ></td>"; 
//     echo "<td><input type='text' name='ingame3' id='r3' value=" . $row["INGAME3"] . " ></td>"; 
//     echo "<td><input type='text' name='ingame4' id='r3' value=" . $row["INGAME4"] . " ></td>";  
//     echo "<td><input type='submit' name='send' value='แก้ไข'></td>";   
//     echo "</tr>";
//     echo "</form>";
    
// }
// }
?>
</table>
 <form action="data.php" method="get">
<input type="submit" value="กลับ" id="btn">
</form></div>
</body>
</html>