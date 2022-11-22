<?php 

session_start()

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    .a:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Traffic Offence Report</title>
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

    <body onload="funcY()">
        <section class="container-fluid bg">
            <!-- <section class="row justify-content-center"> -->
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" method="post"
                    style="width: 550px; margin-left: 379px; margin-top: -100px;">

                    <h2>
                        <center>Traffic Offence Report</center>
                    </h2>
                    <br>

                    <div class="form-group">
                        <label>Reference Number</label>
                        <input name="referenceNo" type="int" id='referenceNo' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Driver Name</label>
                        <input name="driverName" type="text" id='driverName' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input name="contactNo" type="int" id='contactNo' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Driver License Number</label>
                        <input name="driverLicenseNo" type="text" id='driverLicenseNo' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Vehicle Plate Number</label>
                        <input name="vehiclePlateNo" type="text" id='vehiclePlateNo' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Offence Committed</label>
                        <input name="offenceCommitted" type="text" id='offenceCommitted' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input name="date" type="date" id='date' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input name="time" type="time" id='time' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Location</label>
                        <input name="location" type="text" id='location' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Officer 01</label>
                        <input name="officerID_01" type="int" id='officerID_01' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Officer 02</label>
                        <input name="officerID_02" type="int" id='officerID_02' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Police Station</label>
                        <input name="policeStation" type="text" id='policeStation' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Offence Type</label>
                        <input name="offenceType" type="text" id='offenceType' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Amount Fined</label>
                        <input name="amountFined" type="text" id='amountFined' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Payment Status</label>
                        <input name="paymentStatus" type="text" id='paymentStatus' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>



                    <br>


                    <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 190px;" type="" value="Admin Dashboard" name=""
                            class="a btn btn-primary btn-block" onclick="funcX()"></center>

                    <?php
                    $referenceNo = $_GET['referenceNo'];
                    ?>




                    <script>
                    function funcX() {


                        window.location.href = "AdminSelection.php";

                    }

                    function funcY() {

                        var y = '<?php echo $_GET["referenceNo"]; ?>';

                        GetDetail(y);
                        return;
                    }

                    function GetDetail(y) {
                        if (y.length == 0) {
                            document.getElementById("referenceNo").value = "";
                            document.getElementById("driverName").value = "";
                            document.getElementById("contactNo").value = "";
                            document.getElementById("driverLicenseNo").value = "";
                            document.getElementById("vehiclePlateNo").value = "";
                            document.getElementById("offenceCommitted").value = "";
                            document.getElementById("date").value = "";
                            document.getElementById("time").value = "";
                            document.getElementById("location").value = "";
                            document.getElementById("officerID_01").value = "";
                            document.getElementById("officerID_02").value = "";
                            document.getElementById("policeStation").value = "";
                            document.getElementById("offenceType").value = "";
                            document.getElementById("amountFined").value = "";
                            document.getElementById("paymentStatus").value = "";
                            return;
                        } else {

                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {

                                if (this.readyState == 4 &&
                                    this.status == 200) {

                                    var myObj = JSON.parse(this.responseText);

                                    document.getElementById("referenceNo").value = myObj[0];
                                    document.getElementById("driverName").value = myObj[1];
                                    document.getElementById("contactNo").value = myObj[2];
                                    document.getElementById("driverLicenseNo").value = myObj[3];
                                    document.getElementById("vehiclePlateNo").value = myObj[4];
                                    document.getElementById("offenceCommitted").value = myObj[5];
                                    document.getElementById("date").value = myObj[6];
                                    document.getElementById("time").value = myObj[7];
                                    document.getElementById("location").value = myObj[8];
                                    document.getElementById("officerID_01").value = myObj[9];
                                    document.getElementById("officerID_02").value = myObj[10];
                                    document.getElementById("policeStation").value = myObj[11];
                                    document.getElementById("offenceType").value = myObj[12];
                                    document.getElementById("amountFined").value = myObj[13];
                                    document.getElementById("paymentStatus").value = myObj[14];


                                }
                            };

                            xmlhttp.open("GET", "5Retrieval.php?referenceNo=" + y, true);

                            xmlhttp.send();
                        }
                    }
                    </script>


    </body>

</html>