<?php

//include connection in number of female
include 'connection.php';


// construct SQL query
$sql = "SELECT SUM(numberOfFemale) AS num_Female_students FROM crud";
// execute query
$result = mysqli_query($connection, $sql);

// check if query is successful
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br>Number of Female students: " . $row["num_Female_students"];
    }
} else {
    echo "0 results";
}

// close database connection
$connection->close();
?>
