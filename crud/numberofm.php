<?php
include 'connection.php';


// construct SQL query
$sql = "SELECT SUM(numberOfMale) AS num_male_students FROM crud";

// execute query
$result = mysqli_query($connection, $sql);

// check if query is successful
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br>Number of male students: " . $row["num_male_students"];
    }
} else {
    echo "0 results";
}

// close database connection
$connection->close();
?>
