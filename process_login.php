<?php

    include "conf.php";
	session_start();
    
	$strSQL = "SELECT * FROM member WHERE email = '".mysqli_real_escape_string($conn, $_POST['txtEmail'])."' and password = '".mysqli_real_escape_string($conn, $_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "อีเมล์ หรือ รหัสผ่านไม่ถูกต้อง!";
	}
	else
	{
		$_SESSION["Email"] = $objResult["email"];
		$_SESSION["Fullname"] = $objResult["fullname"];
        $_SESSION["photo"] = $objResult["photo"];
		session_write_close();
		header("location:profile.php");
	}
	mysqli_close($conn);
?>