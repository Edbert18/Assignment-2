<?php
require('config.php');

$cryptoName =  $_REQUEST['cryptoName'];
$cryptoDesc = $_REQUEST['cryptoDesc'];
$cryptoPrice =  $_REQUEST['cryptoPrice'];

$sql = "INSERT INTO cryptocurrency  VALUES ('','$cryptoName', '$cryptoDesc','$cryptoPrice')";

if (mysqli_query($conn, $sql)) {
    echo "Data Inserted Successfully";

    header('Location: Index.php');
} else {
    echo "Insert Failed";
}

mysqli_close($conn);