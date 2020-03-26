<html>
<head>
<link rel="stylesheet" href="data1.css">
<meta charset="UTF-8">
<title>ตรวจสอบข้อมูลทีม</title>
</head>
<body>
<div>
<?php
$Search = "";
if(isset($_GET['Search'])) $Search = $_GET['Search'];
?>
<form action="showdata.php" method="get"> 
    <h2>ค้นหาชื่อทีม</h2>
    <input type="text" name="Search" placeholder="ชื่อทีมที่ค้นหา" required><br>
    <input type="submit" value="ค้นหา" class="button1">
</form>
<form action="main.php" method="get">
<input type="submit" value="กลับหน้าหลัก" class="button2">
</form>
</div>
</body>
</html>