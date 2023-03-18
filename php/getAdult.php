<?php

    include 'connection.php';

    if (!$connection) die('Connection failed: ' . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS Adult FROM Patients WHERE age > 17";
    
    $result = mysqli_query($connection, $sql);

    $Patients = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($Patients);

    mysqli_close($connection);

?>