<?php
$connection = new mysqli('localhost', 'root', '', 'secondchance');

if ($connection) {
    echo "Connection established";
} else {
    die(mysqli_error($connection));
}
?>
