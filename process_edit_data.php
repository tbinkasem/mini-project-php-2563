<?php
	
    include "conf.php";
	
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["fileUp"]["name"]);
        $extension = end($temp);
        if ((($_FILES["fileUp"]["type"] == "image/gif") || ($_FILES["fileUp"]["type"] == "image/jpeg") || ($_FILES["fileUp"]["type"] == "image/jpg") || ($_FILES["fileUp"]["type"] == "image/pjpeg") || ($_FILES["fileUp"]["type"] == "image/x-png") || ($_FILES["fileUp"]["type"] == "image/png")) && ($_FILES["fileUp"]["size"] < 1000000) && in_array($extension, $allowedExts)) {
            if ($_FILES["fileUp"]["error"] > 0) {
                echo "เกิดข้อผิดพลาด : " . $_FILES["file"]["error"] . "<br>";
                echo "<meta http-equiv='refresh' content='3; url=data.php'>";
            } else {
                $word = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','_','-','1','2','3','4','5','6','7','8','9','0');
                $fileUp = "IMG_".time().str_ireplace($word, "", basename($_FILES["fileUp"]["name"]));
                if (file_exists("images/" . $_FILES["fileUp"]["name"])) {
                    echo $_FILES["fileUp"]["name"]." มีอยู่ในระบบแล้ว. ";
                    echo "<meta http-equiv='refresh' content='3; url=data.php'>";
                } else {
                    move_uploaded_file($_FILES["fileUp"]["tmp_name"], "images/"."{$fileUp}{$extension}");
                }

                $newFile = "{$fileUp}{$extension}";
                $upfile     = mysqli_real_escape_string($conn, $newFile);
                $email   = mysqli_real_escape_string($conn, $_POST['txtEmail']);
                $password   = mysqli_real_escape_string($conn, $_POST['txtPassword']);
                $fullname      = mysqli_real_escape_string($conn, $_POST['txtFullName']);

                $sql = mysqli_query($conn, "UPDATE `member` SET `email` = '$email', `password` = '$password', `fullname` = '$fullname', `photo`= '$upfile'");
                if(!$sql){
                    echo "<h1 style='color: red;'>ไม่สามารถแก้ไขข้อมูลได้ รอสักครู่...</h1>";
                    echo "<meta http-equiv='refresh' content='3; url=data.php'>";
                }
            }
        } else {
            echo "ไม่สามารถ Upload ไฟล์ได้";
            echo "<meta http-equiv='refresh' content='3; url=data.php'>";
        }
        echo "<h1 style='color: green;'>แก้ไขบัญชีผู้ใช้งาน เรียบร้อยแล้ว รอสักครู่...</h1>";
        echo "<meta http-equiv='refresh' content='3; url=data.php'>";
        
        mysqli_close($conn);
?>