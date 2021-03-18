<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "minipro";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        echo "ไม่สามารถเชื่อมต่อ Database Server ได้";
    }

?>