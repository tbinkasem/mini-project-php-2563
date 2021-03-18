<?php
	
    include "conf.php";

    $strSQL = "INSERT INTO study (idsub, namesub, credit, grade, email) 
    VALUES ('".$_POST["txtIdSub"]."','".$_POST["txtNameSub"]."','".$_POST["txtCredit"]."'
    ,'".$_POST["txtGrade"]."','".$_POST["txtEmail"]."')";

    $objQuery = mysqli_query($conn, $strSQL);

	if($objQuery) {
		echo "<h2 style='color: green;'>เพิ่มข้อมูลเรียบร้อยแล้ว รอสักครู่...</h2>";
	    echo "<meta http-equiv='refresh' content='3; url=data.php'>";
	}else{
        echo "<h2 style='color: red;'>ไม่สามารถเพิ่มข้อมูลได้ รอสักครู่...</h2>";
	    echo "<meta http-equiv='refresh' content='3; url=data.php'>";
    }

	mysqli_close($conn);
?>