<?php

    include 'connection.php';

    if (!$connection) die('Connection failed: ' . mysqli_connect_error());

    $Patient_ID = $_POST['Patient_ID'];
    $Given_name = $_POST['Given_name'];
    $Last_name = $_POST['Last_name'];
    $Birthdate = $_POST['Birthdate'];
    $Age = $_POST['Age'];
    $Sex = $_POST['Sex'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Phone_Number = $_POST['Phone_Number'];
    $email = $_POST['email'];
    
    $sql = "UPDATE Patients SET " .
            "Patient_ID = '" . $Patient_ID . "', " .
            "Given_name = '" . $Given_name . "', " .
            "Last_name = '" . $Last_name . "', " .
            "Birthdate = '" . $Birthdate . "', " .
            "Age = '" . $Age . "', " .
            "Sex = '" . $Sex . "', " .
            "Address = '" . $Address . "', " .
            "City = '" . $City . "', " .
            "Phone_Number = '" . $Phone_Number . "' " .
            "email = '" . $email . "' " .
            "WHERE id = " . $_POST['id'];

    mysqli_query($connection, $sql);

    // echo mysqli_insert_id($connection);

    mysqli_close($connection);

?>
