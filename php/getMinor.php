<?php

    include 'connection.php';

    if (!$connection) die('Connection failed: ' . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS Minor FROM participants WHERE age < 18";
    
    $result = mysqli_query($connection, $sql);

    $participants = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($participants);

    mysqli_close($connection);

?>