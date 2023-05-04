<?php

include 'config.php';
$sql = "TRUNCATE TABLE users";

if (mysqli_query($conn, $sql)) {
    echo "successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}