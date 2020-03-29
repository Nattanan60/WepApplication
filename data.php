<html>
<head>
<link rel="stylesheet" href="data.css">
<meta charset="UTF-8">
<title>ตรวจสอบข้อมูลทีม</title>
</head>
<body>
<div>
<?php
$txtSearch = "";
$txtSearch1 = "";
$type = "";
if(isset($_GET['txtSearch'])) $txtSearch = $_GET['txtSearch'];
if(isset($_GET['txtSearch1'])) $txtSearch1 = $_GET['txtSearch1'];
if(isset($_GET['type']))   $type = $_GET['type'];
?>
<form action="showdata.php" method="get"> 
    <h2>ค้นหา</h2>
    <input type="text" name="txtSearch" placeholder="ชื่อทีมที่ต้องการค้นหา" value="<?php echo $txtSearch?>" ><br>
    <input type="text" name="txtSearch1" placeholder="ชื่อผู้เล่นที่ต้องการค้นหา" value="<?php echo $txtSearch1?>" ><br>
    <!-- <SELECT name="type" id="hnp">
    <OPTION VALUE="1" <?php if($type == 1) echo "selected" ?> >ชื่อทีม </option>
    <OPTION VALUE="2" <?php if($type == 2) echo "selected" ?> >ชื่อผู้เล่น </option>
    <OPTION VALUE="3" <?php if($type == 3) echo "selected" ?> >ชื่อในเกมผู้เล่น </option>
    </SELECT> -->
    <input type="submit" value="ค้นหา" class="button1">
</form>
<form action="main.php" method="get">
<input type="submit" value="กลับหน้าหลัก" class="button2">
</form>
</div>
<div id="grob">
     <h2>ข้อมูลทีม</h2> 
<?php
require("connect.php");
$sql = "SELECT * FROM player ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "<form action='update_team.php' method='get'>"; 
    echo "<h3>ชื่อทีม:<input type='text' name='teame_name' id='r4' value=" . $row["TEAM_NAME"] . " readonly></h3> ";
    }
}
?>    
</div> 
</body>
</html>