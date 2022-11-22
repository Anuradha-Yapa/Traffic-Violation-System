<?php

$mysqli = new mysqli("localhost", "root","", "trafficlawviolations");

if ($mysqli->connect_error) {
die('Connect Error (' .
$mysqli->connect_errno . ') '.
$mysqli->connect_error);
}


$sql = "SELECT officerID, password, officerName, officerNIC, dateOfBirth, contactNumber, emailAddress, policeStation, physicalAddress
FROM trafficofficers ORDER BY officerID ASC";
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

    table {
        margin: 1%;
    }

    button:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Traffic Officers</title>
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
                <th>Officer ID</th>
                <th>Officer Name</th>
                <th>Contact Number</th>
                <th>Email Address</th>
                <th>Police Station</th>
                <th>View Full Record</th>
            </tr>

            <?php 
        while($rows=$result->fetch_assoc())
        {
    ?>
            <tr>
                <td><?php echo $rows['officerID'];?></td>
                <td><?php echo $rows['officerName'];?></td>


                <td><?php echo $rows['contactNumber'];?></td>
                <td><?php echo $rows['emailAddress'];?></td>
                <td><?php echo $rows['policeStation'];?></td>
                <td>

                    <center><button style=" background-color: #C733FF; margin-left: -50%; margin-top:1%; border: #C733FF; font-family: 'Comic Sans MS' ,
                    cursive, sans-serif; font-size: 17px;" type="submit" class="a btn btn-primary
                                    btn-block" onclick="funcID('<?php echo $rows['officerID'];?>')">View More</button>
                    </center>
                </td>
            </tr>
            <?php
        }
    ?>
        </table>
    </section>

    <center><button style=" background-color: #C733FF; margin-top:4%; border: #C733FF; font-family: 'Comic Sans MS' ,
                    cursive, sans-serif; font-size: 17px; width:17%; padding: 10px;" type="submit" class="btn btn-primary
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

    function funcID(x) {


        var id = x;

        window.location.href =
            "http://localhost:8080/TLV/TOR.php?officerID=" + id + "";


    }
    </script>
</body>

</html>