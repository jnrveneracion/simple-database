<?php

include 'connection.php';

// Check the connection
if (!$connection) die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT * FROM Patients ORDER BY created DESC";

if (isset($_GET['keyword'])) $sql = "SELECT * FROM Patients WHERE pname LIKE '" . $_GET['keyword'] ."%'";

$result = mysqli_query($connection, $sql);

$Patients = array();

while ($row = mysqli_fetch_assoc($result)) {
    $Patients[] = $row;
}

header('Content-type: application/json');
echo json_encode($Patients);

mysqli_close($connection);

?>