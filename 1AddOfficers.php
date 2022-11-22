<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    .a:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Register Traffic Officer</title>
    <style>
    form,
    input {
        font-size: 18px;
        /* color: rgb(66, 51, 153); 
             font-family: 'Comic Sans MS', cursive, sans-serif; */
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/offenceReport.css">
</head>

<body>

    <body onload="funM()">
        <section class="container-fluid bg">
            <!-- <section class="row justify-content-center"> -->
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" method="post"
                    style="width: 550px; margin-left: 379px; margin-top: -100px;">

                    <h2>
                        <center>Register Traffic Officers</center>
                    </h2>
                    <br>

                    <div class="form-group">
                        <label>Officer ID</label>
                        <input name="officerID" type="int" id='officerID' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Password</label>
                        <input name="password" type="text" id='p' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>



                    <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 40px; width: 240px; margin-left: -50.5%; padding-right: 30%"
                            type="button" value="Generate Random Password" onclick="RP()"
                            class="a btn btn-primary btn-block">
                    </center> <br>

                    <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 40px; width: 240px; margin-top: -13.7%; margin-left: 50.8%;"
                            type="button" value="Clear Random Password" onclick="CRP()"
                            class="a btn btn-primary btn-block">
                    </center>


                    <br>

                    <div class="form-group">
                        <label>Officer Name</label>
                        <input name="officerName" type="text" id='officerName' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Police Station</label>
                        <input name="policeStation" type="text" id='policeStation' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Officer NIC</label>
                        <input name="officerNIC" type="text" id='officerNIC' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Date Of Birth</label>
                        <input name="dateOfBirth" type="date" id='dateOfBirth' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Contact Number</label>
                        <input name="contactNumber" type="text" id='contactNumber' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class=" form-group">
                        <label>Email Address</label>
                        <input name="emailAddress" type="text" id='emailAddress' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>


                    <div class=" form-group">
                        <label>Physical Address</label>
                        <input name="physicalAddress" type="text" id='physicalAddress' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">

                        <br>


                        <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 150px;" type="submit" value="Register" name="submit"
                                class="a btn btn-primary btn-block" formaction="1AddOfficers2.php"></center>


                        <?php

include_once 'myConnection.php';

$query = "SHOW TABLE STATUS LIKE 'trafficofficers'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
// var_dump($row);

?>

                        <script>
                        function funM() {

                            var m = '<?php echo $row["Auto_increment"]; ?>';
                            document.getElementById("officerID").value = m;
                            return;

                        }

                        function RP() {

                            var randomstring = Math.random().toString(36).slice(-8);
                            document.getElementById("p").value = randomstring;
                            return;

                        }

                        function CRP() {


                            document.getElementById("p").value = "";
                            return;

                        }
                        </script>


    </body>

</html>