<?php

    include 'connection.php';

    if (!$connection) die('Connection failed: ' . mysqli_connect_error());

    $sql = "SELECT * FROM Patients WHERE id = " . $_GET['id'];
    
    $result = mysqli_query($connection, $sql);

    $Patients[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($Patients[0]);

    mysqli_close($connection);

?>