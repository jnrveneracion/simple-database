<?php

    include 'connection.php';

    if (!$connection) die('Connection failed: ' . mysqli_connect_error());

    $sql = "DELETE FROM Patients WHERE id = " . $_POST['id'];
    
    $result = mysqli_query($connection, $sql);

    mysqli_close($connection);

?>