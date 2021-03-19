<?php

    include "conf.php";

    $strEmail  = null;
    if(isset($_GET["Email"])){
	    $strEmail = $_GET["Email"];
    }

    $strSQL = "SELECT * FROM member WHERE email = '".$strEmail."' ";
	  $objQuery = mysqli_query($conn, $strSQL);
    $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> แก้ไขข้อมูลบัญชีผู้ใช้งาน </title>
    <link rel="stylesheet" href="css/edit_data.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">ข้อมูลบัญชีผู้ใช้งาน</div>
    <div class="content">
      <form action="process_edit_data.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">อีเมล์ (ห้ามแก้ไข)</span>
            <input type="email" value="<?php echo $result['email']; ?>" disabled>
            <input type="hidden" value="<?php echo $result['email']; ?>" name="txtEmail">
          </div>
          <div class="input-box">
            <span class="details">รหัสผ่าน</span>
            <input type="text" value="<?php echo $result['password']; ?>" required name="txtPassword">
          </div>
          <div class="input-box">
            <span class="details">ชื่อ - สกุล</span>
            <input type="text" value="<?php echo $result['fullname']; ?>" required name="txtFullName">
          </div>
          <div class="input-box">
            <span class="details">รูปโปรไฟล์ (ขนาดไม่เกิน 1 MB)</span>
            <input type="file" name="fileUp">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="แก้ไขข้อมูล">
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
