<?php

    include "conf.php";
    session_start();

    $strId =  $_SESSION['Id'];

    $strSQL = "DELETE FROM study WHERE id = '".$strId."' ";
    $objQuery = mysqli_query($conn, $strSQL);

    if(!$objQuery){
        echo "<h1 style='color: red;'>ไม่สามารถลบข้อมูลผลการเรียนเรียบร้อยได้ รอสักครู่...</h1>";
        echo "<meta http-equiv='refresh' content='3; url=data.php'>";
    }else{
        echo "<h1 style='color: green;'>ลบข้อมูลผลการเรียนเรียบร้อยแล้ว รอสักครู่...</h1>";
        echo "<meta http-equiv='refresh' content='3; url=data.php'>";
    }

?>