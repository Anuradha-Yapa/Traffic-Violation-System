<?php

$mysqli = new mysqli("localhost", "root","", "trafficlawviolations");

if ($mysqli->connect_error) {
die('Connect Error (' .
$mysqli->connect_errno . ') '.
$mysqli->connect_error);
}

// $driverLicenseNo = $_GET["driverLicenseNo"];


$sql = "SELECT referenceNo, driverName, contactNo, driverLicenseNo, vehiclePlateNo, offenceCommitted, date, officerID_01, officerID_02, offenceType, amountFined, 
paymentStatus FROM crimes ORDER BY referenceNo ASC";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    button:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>All The Offences</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/TableTrial.css">

    <style>
    body {
        background-color: #000;
    }
    </style>

</head>

<body>
    <section>


        <table class="table table-dark" style="background-color: #000;">

            <tr>
                <th>Reference No</th>
                <th>Driver Name</th>
                <th>Driver Contact</th>
                <th>Driver License No</th>
                <th>Vehicle Plate No</th>
                <th>Offence Committed</th>
                <th>Date</th>
                <th>Officer 01</th>
                <th>Officer 02</th>
                <th>Offence Type</th>
                <th style="width: 8%;">Fine</th>
                <th>Payment Status</th>
            </tr>

            <?php 
        while($rows=$result->fetch_assoc())
        {
    ?>
            <tr>
                <td><?php echo $rows['referenceNo'];?></td>
                <td><?php echo $rows['driverName'];?></td>
                <td><?php echo $rows['contactNo'];?></td>
                <td><?php echo $rows['driverLicenseNo'];?></td>
                <td><?php echo $rows['vehiclePlateNo'];?></td>
                <td><?php echo $rows['offenceCommitted'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['officerID_01'];?></td>
                <td><?php echo $rows['officerID_02'];?></td>
                <td><?php echo $rows['offenceType'];?></td>
                <td><?php echo $rows['amountFined'];?></td>
                <td><?php echo $rows['paymentStatus'];?></td>
            </tr>
            <?php
        }
    ?>
        </table>
    </section>

    <center><button style=" background-color: #C733FF; margin-top:4%; border: #C733FF; font-family: 'Comic Sans MS' , cursive,
                    sans-serif; font-size: 17px; width:17%; padding: 10px;" type="submit" class="btn btn-primary
                                    btn-block" onclick="funcY()">Admin Dashboard</button></center>


    </section>
    </section>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
    function funcY() {

        window.location.href = "AdminSelection.php";

    }
    </script>
</body>

</html>