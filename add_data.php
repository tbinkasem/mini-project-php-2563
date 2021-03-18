<?php
    include "conf.php";
    session_start();
    $email = $_SESSION["Email"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> เพิ่มข้อมูลผลการเรียนรายวิชา </title>
    <link rel="stylesheet" href="css/add_data.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">เพิ่มข้อมูลผลการเรียนแต่ละวิชา</div>
    <div class="content">
      <form action="process_add_data.php" method="get">
        <div class="user-details">
          <div class="input-box">
            <input type="hidden" name="txtEmail" value="<?php echo $email; ?>">
            <span class="details">รหัสวิชา</span>
            <input type="text" placeholder="เช่น 3901-2001 / 30901-1001" required name="txtIdSub">
          </div>
          <div class="input-box">
            <span class="details">ชื่อวิชา</span>
            <input type="text" placeholder="รายวิชา" required name="txtNameSub">
          </div>
          <div class="input-box">
            <span class="details">หน่วยกิต</span>
            <input type="number" placeholder="เป็นตัวเลข" required name="txtCredit">
          </div>
          <div class="input-box">
            <span class="details">ผลการเรียน</span>
            <input type="number" min="0" max="4.0" step="0.5" value="0" placeholder="เป็นเลขทศนิยม เช่น 2.0" required name="txtGrade">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="เพิ่มข้อมูล">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
