<?php
   
   include "conf.php";
   session_start();

   $email = $_SESSION["Email"];
	$fullname = $_SESSION["Fullname"];
   $photo = $_SESSION["photo"];

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Profile Card</title>
      <link rel="stylesheet" type="text/css" href="css/profile.css">
   </head>
   <body>
      <div class="card-container">
         <div class="upper-container">
            <div class="image-container">
               <img src="images/<?php echo $photo; ?>" />
            </div>
         </div>
         <div class="lower-container">
            <div>
               <h3><?php  echo $fullname; ?></h3>
               <h4>Front-end Developer</h4>
            </div>
            <div>
               <p>
                   Email : <?php echo $email; ?>
               </p>
            </div>
            <br>
            <div>
               <a href="data.php" class="btn1">ข้อมูลส่วนตัว</a>
            </div>
            <br><br>
            <div>
               <a href="logout.php" class="btn2">
                  ออกจากระบบ
               </a>
            </div>
         </div>
      </div>
   </body>
</html>