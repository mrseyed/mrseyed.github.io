<?php
$jobt = $_GET['jobt'];
$zarf = $_GET['zarf'];
$exp = $_GET['exp'];
    // Cre(ate connection
    $cn = new mysqli(
        "https://sql209.infinityfree.com",
        "if0_38506608",
        "MrSeyed1370",
        "if0_38506608_mysql");

    // Check connection
    if ($cn->connect_error)
    {
        echo "Connection failed : " . $cn->connect_error;
    }

    $sql = "INSERT INTO 'job1'(TITLE, ZARFIAT, TOZIH) VALUES ($jobt, $zarf, $exp)";

    if ($cn->query($sql) === TRUE)
    {
        echo "New record created successfully";
    }

    else
    {
        echo "Error: " . $sql . "\n" . $cn->error;
    }

    $cn->close();

?>ll