<?php

    $server = "localhost";
    $user = "root";
    //$pass = "t768m";
    $pass = "";
    $db = "minipro";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        echo "ไม่สามารถเชื่อมต่อ Database Server ได้";
    }

?>