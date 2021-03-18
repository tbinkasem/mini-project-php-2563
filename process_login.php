<?php

    include "conf.php";
	session_start();
    
	$strSQL = "SELECT * FROM member WHERE email = '".mysqli_real_escape_string($conn, $_POST['txtEmail'])."' and password = '".mysqli_real_escape_string($conn, $_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<h1 style='color: red'>อีเมล์ หรือ รหัสผ่านไม่ถูกต้อง! รอสักครู่...</h1>";
        echo "<meta http-equiv='refresh' content='3; url=index.html'>";
	}
	else
	{
		$_SESSION["Email"] = $objResult["email"];
		$_SESSION["Fullname"] = $objResult["fullname"];
        $_SESSION["Photo"] = $objResult["photo"];
		$_SESSION["Password"] = $objResult["password"];
		
		session_write_close();
		header("location:profile.php");
	}
	mysqli_close($conn);
?>