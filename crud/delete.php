<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location:form.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>
