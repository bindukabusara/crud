<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $schoolName = $_POST['schoolName'];
    $phonecontact = $_POST['phonecontact'];
    $region = $_POST['region'];
    $numberOfMale = $_POST['numberOfMale'];
    $numberOfFemale = $_POST['numberOfFemale'];
    $timelastUpdated = $_POST['timelastUpdated'];
    $generalChild = $_POST['generalChild'];
    $distric = $_POST['distric'];

    $sql = "insert into `crud` (schoolName,phonecontact,region,numberOfMale,numberOfFemale,timelastUpdated,generalChild,distric)
    values('$schoolName','$phonecontact','$region','$numberOfMale','$numberOfFemale','$timelastUpdated','$generalChild','$distric')";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Data inserted successfully";
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

<!--CSS-->
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
        background-color: blue;
        border-radius: 20%;
    }

    .btn {
        padding: 10px;
        display: flex;
        margin: 0px 30px 10px 15%;
        background-color: red;
        border-radius: 30%;
        width: 70%;

    }

    .bt {
        padding: 10px;
        display: flex;
        margin: 0px 30px 10px 15%;
        background-color: blue;
        border-radius: 30%;
        width: 70%;

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
        <!-- CREATE A FORM-->
        <form method="post">
            <h1>
                <center>
                    <font color="	#1e90ff"><br><img src="UNICEF-Logo-700x394.png" alt="logo" width=5%>UNICEF FOR EVERY CHILD</font>
                </center>
            </h1>
            <hr>
            <label>CENTER NUMBER: </label>
            <input type="number" name="number" placeholder="Center Number"><br><br>
            <hr>

            <label>SCHOOL NAME: </label>
            <input type="text" name="schoolName" placeholder="School Name"><br><br>
            <hr>

            <label>PHONE CONTACT: </label>
            <input type="number" name="phonecontact" placeholder="phone Number"><br><br>
            <hr>

            <label>REGION: </label>
            <input type="text" name="region" placeholder="Region"><br><br>
            <hr>

            <label>NUMBER OF MALE: </label>
            <input type="number" name="numberOfMale" placeholder="Number of Male students"><br><br>
            <hr>

            <label>NUMBER OF FEMALE: </label>
            <input type="number" name="numberOfFemale" placeholder="Number of Female students"><br><br>
            <hr>

            <label>TIME LAST UPDATE: </label>
            <input type="number" name="timelastUpdated" placeholder="Time last updated"><br><br>
            <hr>

            <label>GENERAL CHILD: </label>
            <input type="number" name="generalChild" placeholder="General child population"><br><br>
            <hr>

            <label>DISCTRICT: </label>
            <input type="text" name="distric" placeholder="district"><br><br>
            <hr><br>

            <button type="submit" name="submit">
                <font color=#fff><strong>submit</strong></font>
            </button>
            <br>


        </form>
    </div><br>

    <!--DISPLAY TABLE TO SEE MY DATABASE AND PERFORM SOME OPERATION-->
    <div>
        <CENTER>
            <h1>DATABASE OF UNICEF</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Center Number</th>
                        <th>School Name</th>
                        <th>PHONE CONTACT</th>
                        <th>REGION</th>
                        <th>NUMBER OF MALE</th>
                        <th>NUMBER OF FEMALE</th>
                        <th>TIME LAST UPDATE</th>
                        <th>GENERAL CHILD</th>
                        <th>DISCTRICT</th>
                        <th>OPERATION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from `crud`";
                    $result = mysqli_query($connection, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $schoolName = $row['schoolName'];
                            $phonecontact = $row['phonecontact'];
                            $region = $row['region'];
                            $numberOfMale = $row['numberOfMale'];
                            $numberOfFemale = $row['numberOfFemale'];
                            $timelastUpdated = $row['timelastUpdated'];
                            $generalChild = $row['generalChild'];
                            $distric = $row['distric'];
                            echo '<tr>
                        <td> ' . $id . '</td>
                        <td> ' . $schoolName  . '</td>
                        <td> ' . $phonecontact . '</td>
                        <td> ' . $region . '</td>
                        <td> ' . $numberOfMale . '</td>
                        <td> ' . $numberOfFemale . '</td>
                        <td> ' . $timelastUpdated . '</td>
                        <td> ' . $generalChild . '</td>
                        <td>' . $distric . '</td>
                        <td>
                    <button class=btn><a href="update.php?
                    updateid=' . $id . '"><font color=#fff><strong>Update</strong></font></a></button>

                     <button class=bt><a href="delete.php?
                    deleteid=' . $id . '"><font color=#fff><strong>Delete</strong></font></a></button>
                    </td>
                        </tr>';
                        }
                    }



                    ?>

                </tbody>
            </table>
        </CENTER>
    </div>
</body>

</html>
