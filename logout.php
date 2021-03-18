<?php
	session_start();
	session_destroy();
	echo "<h2 style='color: blue;'>กำลังออกจากระบบ รอสักครู่...</h2>";
	echo "<meta http-equiv='refresh' content='3; url=index.html'>";
?>