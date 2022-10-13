<?php
require('config.php');

$cryptoID = $_GET['cryptoID'];

$sql = "DELETE FROM cryptocurrency WHERE cryptoID='$cryptoID'";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Data is Sucessfully Deleted</h3>";

    header('Location: Index.php');
} else {
    echo "Failed to delete Data...";
}

?>