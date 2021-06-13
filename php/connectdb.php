<?php

    $servername = 'localhost';
    $username = 'blacksnow';
    $password = 'L9HiAnpuZ[lkyrVE';
    $dbname = 'db_restaurant';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("***Connection : Failed (เชื่อมต่อฐานข้อมูลไม่สำเร็จ T_T)***" . mysqli_connect_error());
    } else {
        //secho "***Conection : Success (เชื่อมต่อฐานข้อมูลสำเร็จ)***";
    }
?>