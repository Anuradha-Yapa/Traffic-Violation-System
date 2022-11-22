<?php

$mysqli = new mysqli("localhost", "root","", "trafficlawviolations");
				
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$driverLicenseNo  = $_GET["driverLicenseNo"];


$sql = "SELECT referenceNo, vehiclePlateNo, offenceCommitted, date, time, location, policeStation, amountFined, paymentStatus FROM crimes WHERE driverLicenseNo = '$driverLicenseNo' ORDER BY referenceNo ASC";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All My Offences</title>

    <style>
    table {
        margin: 0 auto;
        font-size: large;
        border: 1px solid black;
    }

    h1 {
        text-align: center;
        color: #006600;
        font-size: xx-large;
        font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
    }

    td {
        background-color: #E4F5D4;
        border: 1px solid black;
    }

    th,
    td {
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    td {
        font-weight: lighter;
    }
    </style>
</head>

<body>
    <section>


        <table>
            <tr>
                <th>Reference No</th>
                <th>Vehicle Plate No</th>
                <th>Offence Committed</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Police Station</th>
                <th>Amount Fined</th>
                <th>Payment Status</th>
            </tr>

            <?php 
				while($rows=$result->fetch_assoc())
				{
			?>
            <tr>

                <td><?php echo $rows['referenceNo'];?></td>
                <td><?php echo $rows['vehiclePlateNo'];?></td>
                <td><?php echo $rows['offenceCommitted'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['time'];?></td>
                <td><?php echo $rows['location'];?></td>
                <td><?php echo $rows['policeStation'];?></td>
                <td><?php echo $rows['amountFined'];?></td>
                <td><?php echo $rows['paymentStatus'];?></td>
            </tr>
            <?php
				}
			?>
        </table>
    </section>
</body>

</html>