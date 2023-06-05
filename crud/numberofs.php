<?php

//include connection in number of school in the sytem
include 'connection.php';


// construct SQL query
$sql = "SELECT COUNT(schoolName) AS num_Of_school FROM crud";

// execute query
$result = mysqli_query($connection, $sql);

// check if query is successful
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br>Number of School in the system: " . $row["num_Of_school"];
    }
} else {
    echo "0 results";
}

// close database connection
$connection->close();
?>
