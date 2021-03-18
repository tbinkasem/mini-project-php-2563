<?php

    include "conf.php";
    session_start();

    $strID  = null;
    if(isset($_GET["txtID"])){
	    $strId = $_GET["txtID"];
    }

    $strSQL = "SELECT * FROM study WHERE id = '".$strId."' ";
	$objQuery = mysqli_query($conn, $strSQL);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

    $_SESSION['Id'] = $result['id'];
    // $_SESSION['IdSub'] = $result['idsub'];
    // $_SESSION['NameSub'] = $result['namesub'];
    // $_SESSION['Email'] = $result['email'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> ข้อมูลรายวิชา </title>
    <link rel="stylesheet" href="css/edit_data.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">ข้อมูลรายวิชาที่ต้องการลบ</div>
    <div class="content">
      <form action="process_delete_data.php" method="get">
        <div class="user-details">
          <div class="input-box">
            <span class="details">รหัสวิชา</span>
            <input type="text" value="<?php echo $result['idsub']; ?>" name="txtIdSub" disabled>
            <input type="hidden" value="<?php echo $result['id']; ?>" name="txtId">
          </div>
          <div class="input-box">
            <span class="details">ชื่อวิชา</span>
            <input type="text" value="<?php echo $result['namesub']; ?>" name="txtNameSub" disabled>
          </div>
          <div class="input-box">
            <span class="details">ผลการเรียน</span>
            <input type="text" value="<?php echo $result['grade']; ?>" name="txtGrade" disabled>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="ลบข้อมูล">
        </div>
      </form>
      <form action="data.php">
        <div class="button">
          <button href="data.php">กลับไปหน้า [ข้อมูลส่วนตัว]</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
