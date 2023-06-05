<?php

include 'connection.php';
$id = $_GET['updateid'];
$sql = "SELECT * from `crud` where id=$id";

$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$schoolName = $row['schoolName'];
$phonecontact = $row['phonecontact'];
$region = $row['region'];
$numberOfMale = $row['numberOfMale'];
$numberOfFemale = $row['numberOfFemale'];
$timelastUpdated = $row['timelastUpdated'];
$generalChild = $row['generalChild'];
$distric = $row['distric'];

if (isset($_POST['submit'])) {
    $schoolName = $_POST['schoolName'];
    $phonecontact = $_POST['phonecontact'];
    $region = $_POST['region'];
    $numberOfMale = $_POST['numberOfMale'];
    $numberOfFemale = $_POST['numberOfFemale'];
    $timelastUpdated = $_POST['timelastUpdated'];
    $generalChild = $_POST['generalChild'];
    $distric = $_POST['distric'];

    $sql = "update `crud` set id=$id,schoolName='$schoolName',phonecontact='$phonecontact',region='$region',
    numberOfMale='$numberOfMale',numberOfFemale='$numberOfFemale',timelastUpdated='$timelastUpdated',
    generalChild='$generalChild',distric='$distric' where id=$id";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location:form.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>




<!DOCTYPE HTML>
<html>

<head>
    <title></title>
</head>
<style>
    form {
        box-sizing: border-box;
        background-color: #f5f5dc;
    }

    label {
        padding: 5px 20px 10px 30px;
        display: inline-block;
    }

    button {
        padding: 10px;
        display: flex;
        margin: 0px 20px 10px 95%;
        background-color: red;
        border-radius: 20%;
    }

    input {
        width: 50%;
        padding: 5px 20px 10px 30px;
        border: 2px solid #ccc;
        border-radius: 100%;
        resize: vertical;
        background-color: #808080;
        color: white;
        padding: 12px 20px 12px 20px;

        border-radius: 5px;
        cursor: pointer;
        float: right;

    }
</style>

<body>
    <div>
        <form method="post">
            <h1>
                <center>
                    <font color="	#1e90ff"><br><img src="UNICEF-Logo-700x394.png" alt="logo" width=5%>UNICEF FOR EVERY CHILD</font>
                </center>
            </h1>
            <hr>
            <label>CENTER NUMBER: </label>
            <input type="number" name="number" placeholder="Center Number" value=<?php echo $id ?>><br><br>
            <hr>

            <label>SCHOOL NAME: </label>
            <input type="text" name="schoolName" placeholder="School Name" value=<?php echo $schoolName ?>><br><br>
            <hr>

            <label>PHONE CONTACT: </label>
            <input type="number" name="phonecontact" placeholder="phone Number" value=<?php echo $phonecontact ?>><br><br>
            <hr>

            <label>REGION: </label>
            <input type="text" name="region" placeholder="Region" value=<?php echo $region ?>><br><br>
            <hr>

            <label>NUMBER OF MALE: </label>
            <input type="number" name="numberOfMale" placeholder="Number of Male students" value=<?php echo $numberOfMale ?>><br><br>
            <hr>

            <label>NUMBER OF FEMALE: </label>
            <input type="number" name="numberOfFemale" placeholder="Number of Female students" value=<?php echo $numberOfFemale ?>><br><br>
            <hr>

            <label>TIME LAST UPDATE: </label>
            <input type="number" name="timelastUpdated" placeholder="Time last updated" value=<?php echo $timelastUpdated ?>><br><br>
            <hr>

            <label>GENERAL CHILD: </label>
            <input type="number" name="generalChild" placeholder="General child population" value=<?php echo $generalChild ?>><br><br>
            <hr>

            <label>DISCTRICT: </label>
            <input type="text" name="distric" placeholder="district" value=<?php echo $distric ?>><br><br>
            <hr><br>

            <button type="submit" name="submit"><strong>Update</strong></button>
            <br>


        </form>

</body>

</html>
