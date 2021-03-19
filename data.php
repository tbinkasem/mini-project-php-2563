<?php
   
   include "conf.php";
   session_start();

   $email = $_SESSION["Email"];
	$fullname = $_SESSION["Fullname"];


   $strSQL1 = "SELECT * FROM member WHERE email = '".$email."' ";
	$objQuery1 = mysqli_query($conn, $strSQL1);
   $result1 = mysqli_fetch_assoc($objQuery1);

   $strSQL2 = "SELECT * FROM study WHERE email = '".$email."' ";
	$objQuery2 = mysqli_query($conn, $strSQL2);

?>
<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/data.css">
   </head>
   <body>

      <h2>ข้อมูลส่วนตัว [<?php echo $fullname; ?>]</h2>
      <a href="profile.php" class="btnProfile">กลับไป Profile</a>
      |
      <a href="add_data.php" class="btnAddData">เพิ่มข้อมูลการเรียน</a>
      <br><br>
      <div class="tab">
         <button class="tablinks" onclick="openData(event, 'account')">ข้อมูลบัญชีการใช้งาน</button>
         <button class="tablinks" onclick="openData(event, 'study')">ข้อมูลการเรียน</button>
      </div>

      <div id="account" class="tabcontent">
         <h3>ข้อมูลบัญชีการใช้งาน</h3>
         <table>
            <tr>
               <th>Full Name :</th>
               <td>
                  <?php echo $result1['fullname']; ?>
               </td>
            </tr>
            <tr>
               <th>Email :</th>
               <td>
                  <?php echo $result1['email']; ?>
               </td>
            </tr>
            <tr>
               <th>Password :</th>
               <td>
                  <?php echo $result1['password']; ?>
               </td>
            </tr>
            <tr>
               <th>Photo :</th>
               <td>
                  <?php echo $result1['photo']; ?>
               </td>
            </tr>
            <tr>
               <th>Preview Photo :</th>
               <td>
                  <img src="images/<?php echo $result1['photo']; ?>" alt="<?php echo "my-".$result1['photo']; ?>" width="50%">
                  
               </td>
            </tr>
            <tr>
               <th colspan="2">
                  <a href="edit_data.php?Email=<?php echo $result1["email"];?>" class="btnEdit">แก้ไขข้อมูล</a>
            </tr>
         </table>
      </div>

      <div id="study" class="tabcontent">
         <h3>ข้อมูลการเรียน</h3>
         <table class="data">
            <tr>
               <th class="data">ที่</th>
               <th class="data">รหัสวิชา</th>
               <th class="data">ชื่อวิชา</th>
               <th class="data">หน่วยกิต</th>
               <th class="data">ผลการเรียน</th>
               <th class="data">&nbsp;</th>
            </tr>
            <?php
               $i = 1;
               while($result2 = mysqli_fetch_array($objQuery2, MYSQLI_ASSOC)){
            ?>
            <tr>
               <td class="data1">
                  <?php echo $i; ?>
               </td>
               <td class="data1">
                  <?php echo $result2['idsub']; ?>
               </td>
               <td>
                  <?php echo $result2['namesub']; ?>
               </td>
               <td class="data1">
                  <?php echo $result2['credit']; ?>
               </td>
               <td class="data1">
                  <?php echo $result2['grade']; ?>
               </td>
               <td class="data1">
                  <a href="delete_data.php?txtID=<?php echo $result2["id"];?>" class="btnDelete">ลบข้อมูล</a>
               </td>
            </tr>
            <?php  $i++; } ?>
         </table>
      </div>
      <script src="js/data.js"></script>
   </body>
</html> 