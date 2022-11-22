<?php

$mysqli = new mysqli("localhost", "root","", "trafficlawviolations");

if ($mysqli->connect_error) {
die('Connect Error (' .
$mysqli->connect_errno . ') '.
$mysqli->connect_error);
}


$sql = "SELECT referenceNo, driverLicenseNo, date, offenceCommitted, offenceType, amountFined, paymentStatus
FROM crimes ORDER BY referenceNo ASC";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    .a {
        padding: 3px 3px !important;
        width: 100px !important;

    }

    /* table {
        width: 50% !important;
        margin-left: 0px !important;
    } */

    table {
        margin: 1%;
    }

    button:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Traffic Offences</title>
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
                <th style="width: 10%;">Reference No</th>
                <th style="width: 10%;">Driver License No</th>
                <th>Date</th>
                <th style="width: 16%;">Offence Committed</th>
                <th style="width: 10%;">Offence Type</th>
                <th>Amount Fined</th>
                <th style="width: 10%;">Payment Status</th>
                <th>View Full Offence</th>
            </tr>

            <?php 
        while($rows=$result->fetch_assoc())
        {
    ?>
            <tr>
                <td><?php echo $rows['referenceNo'];?></td>
                <td><?php echo $rows['driverLicenseNo'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['offenceCommitted'];?></td>
                <td><?php echo $rows['offenceType'];?></td>
                <td><?php echo $rows['amountFined'];?></td>
                <td><?php echo $rows['paymentStatus'];?></td>
                <td>

                    <center><button style=" background-color: #C733FF; margin-left: -50%; margin-top:1%; border: #C733FF; font-family: 'Comic Sans MS' ,
                    cursive, sans-serif; font-size: 17px;" type="submit" class="a btn btn-primary
                                    btn-block" onclick="funcID('<?php echo $rows['referenceNo'];?>')">View
                            More</button>
                    </center>
                </td>
            </tr>
            <?php
        }
    ?>
        </table>
    </section>

    <!-- <center><button style=" background-color: #C733FF; margin-top:4%; border: #C733FF; font-family: 'Comic Sans MS' ,
                    cursive, sans-serif; font-size: 17px; width:17%; padding: 10px;" type="submit" class="btn btn-primary
                                    btn-block" onclick="funcY()">Admin Dashboard</button></center> -->


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

    function funcID(x) {


        var rn = x;

        window.location.href =
            "http://localhost:8080/TLV/TOR2.php?referenceNo=" + rn + "";




    }
    </script>
</body>

</html>