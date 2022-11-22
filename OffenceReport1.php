<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

// echo '<script>alert("Lisen '.$_REQUEST['driverLicenseNo'].'")</script>';

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
    <title>My Offence Report</title>


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
                <form class="form-container" style="width: 550px; margin-left: 379px; margin-top: -100px;">

                    <!-- height: 1440px; -->
                    <h2>
                        <center>My Offence Report</center>
                    </h2>
                    <br>

                    <div class="form-group">
                        <label>Reference No</label>
                        <input name="referenceNo" type="text" id='referenceNo' class="form-control"
                            aria-describedby="emailHelp" placeholder="Enter Reference No" readonly>
                    </div>
                    <!-- <td><input style="font-size: 17px; color:rgb(66, 51,
                                    153); font-family:'Comic Sans MS', cursive,
                                    sans-serif" ; type="text" name="referenceNo" id='referenceNo'></td>
                                </tr> -->

                    <div class="form-group">
                        <label>Driver's Name</label>
                        <input type="text" name="driverName" id="driverName" class="form-control"
                            placeholder="Enter License No" readonly>
                    </div>

                    <div class="form-group">
                        <label>Driver License Number</label>
                        <input type="text" name="driverLicenseNo" id="driverLicenseNo" class="form-control"
                            placeholder="Enter License No" readonly>
                    </div>

                    <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 150px;" type="button" value="My Profile"
                            name="myProfile" onClick="funcX()" class="a btn btn-primary btn-block"></center>

                    <br>
                    <div class="form-group">
                        <label>Vehicle Plate Number</label>
                        <input type="text" name="vehiclePlateNo" id="vehiclePlateNo" class="form-control" placeholder=""
                            readonly>
                    </div>

                    <div class="form-group">
                        <label>Offence Committed</label>
                        <input type="text" name="offenceCommitted" id="offenceCommitted" class="form-control"
                            placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input type="time" name="time" id="time" class="form-control" placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" id="location" class="form-control" placeholder="" readonly>
                    </div>
                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>
                    <div class="form-group">
                        <label>Officer 01</label>
                        <input type="text" name="officerID_01" id="officerID_01" class="form-control" placeholder=""
                            readonly>
                    </div>

                    <div class="form-group">
                        <label>Officer 02</label>
                        <input type="text" name="officerID_02" id="officerID_02" class="form-control" placeholder=""
                            readonly>
                    </div>

                    <div class="form-group">
                        <label>Police Station</label>
                        <input type="text" name="policeStation" id="policeStation" class="form-control" placeholder=""
                            readonly>
                    </div>
                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>

                    <div class="form-group">
                        <label>Offence Type</label>
                        <input type="text" name="offenceType" id="offenceType" class="form-control" placeholder=""
                            readonly>
                    </div>

                    <div class="form-group">
                        <label>Fine Payment (LKR)</label>
                        <input type="text" name="amountFined" id="amountFined" class="form-control" placeholder=""
                            readonly>
                    </div>

                    <div class="form-group">
                        <label>Payment Status</label> &nbsp;
                        <input style="font-size: 17px;
                                font-family:'Comic Sans MS', cursive, sans-serif" ; type="text" name="paymentStatus"
                            id="paymentStatus" readonly class="form-control">


                    </div>
                    <br>
                    <!-- <center><button
                            style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; height: 45px; width: 150px;"
                            type="submit" class="btn btn-primary
                                    btn-block" name="payMyFine" id="payMyFine" onclick="funcP()" class="">
                            Pay My Fine
                        </button></center> -->

                    <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 150px;" type="button" value="Pay My Fine" name=""
                            onClick="funcP()" class="a btn btn-primary btn-block"></center>


                </form>
            </section>
        </section>
        </section>

        <?php
        $_GET["referenceNo"];
        ?>

        <script>
        function funcX(driverLicenseNo) {
            var x = document.getElementById("driverLicenseNo").value;

            window.location.href =
                "http://localhost:8080/TLV/MyProfile1.php?driverLicenseNo=" + x + "";

        }

        function funcY() {

            var y = '<?php echo $_GET["referenceNo"]; ?>';
            //document.write(y)
            GetDetail(y);
            return;
        }

        function funcP(referenceNo, paymentStatus) {

            var p = document.getElementById("referenceNo").value;
            var ps = document.getElementById("paymentStatus").value;
            var l = document.getElementById("driverLicenseNo").value;
            var d = document.getElementById("date").value;

            if (ps == "Unpaid") {
                window.location.href =
                    "http://localhost:8080/TLV/PayMyFine1.php?referenceNo=" + p + "&date=" + d + "";

            }

            if (ps == "Paid") {

                //window.location.href = "Paid.php";

                window.location.href =
                    "http://localhost:8080/TLV/Paid.php?referenceNo=" + p + "&driverLicenseNo=" + l + "";


            }

            if (ps == "N/A") {

                window.location.href =

                    "http://localhost:8080/TLV/NA.php?referenceNo=" + p + "&driverLicenseNo=" + l + "";
            }

        }


        function GetDetail(y) {
            if (y.length == 0) {
                document.getElementById("referenceNo").value = "";
                document.getElementById("driverName").value = "";
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
                        document.getElementById("driverLicenseNo").value = myObj[2];
                        document.getElementById("vehiclePlateNo").value = myObj[3];
                        document.getElementById("offenceCommitted").value = myObj[4];
                        document.getElementById("date").value = myObj[5];
                        document.getElementById("time").value = myObj[6];
                        document.getElementById("location").value = myObj[7];
                        document.getElementById("officerID_01").value = myObj[8];
                        document.getElementById("officerID_02").value = myObj[9];
                        document.getElementById("policeStation").value = myObj[10];
                        document.getElementById("offenceType").value = myObj[11];
                        document.getElementById("amountFined").value = myObj[12];
                        document.getElementById("paymentStatus").value = myObj[13];
                    }
                };

                xmlhttp.open("GET", "offenceReport2.php?referenceNo=" + y, true);

                xmlhttp.send();
            }
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </body>

</html>