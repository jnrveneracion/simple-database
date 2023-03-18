<?php

    include 'connection.php';

    if (!$connection) die('Connection failed: ' . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS WithFever FROM participants WHERE temp > 37";
    
    $result = mysqli_query($connection, $sql);

    $participants = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($participants);

    mysqli_close($connection);

?>