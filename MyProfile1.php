<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>My Profile</title>

    </script> -->

    <style>
    .a:hover {
        background-color: #465ACB !important;
    }

    form,
    input,
    select {
        font-size: 18px;
    }

    select {
        font-size: 16px;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/offenceReport.css">
</head>

<body>

    <body onload="funcX()">

        <section class="container-fluid bg">
            <!-- <section class="row justify-content-center"> -->
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container"
                    style="height: 1100px; width: 550px; margin-left: 379px; margin-top: -100px;">

                    <!-- <center>
                        <form name="form" action="" style="padding-top: 0.2ch;"> -->
                    <h2>
                        <center>My Profile</center>
                    </h2>
                    <br>

                    <div class="form-group">
                        <label>License Number</label>
                        <input name="driverLicenseNo" type="text" id='driverLicenseNo' class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <!-- <tr>
                            <td>License Number</td>
                            <td>
                                <input style="font-size: 17px; color:rgb(66, 51,
                                153); font-family:'Comic Sans MS', cursive,
                                sans-serif" ; type="text" name="driverLicenseNo" id="driverLicenseNo">
                            </td>
                        </tr> -->

                    <div class="form-group">
                        <label>License Expiry Date</label>
                        <input name="licenseExpiryDate" type="date" id="licenseExpiryDate" class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Full Name</label>
                        <input name="driverName" type="text" id="driverName" class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Administrative Number</label>
                        <input name="adminNo" type="text" id="adminNo" class="form-control" aria-describedby="emailHelp"
                            placeholder="" readonly>
                    </div>

                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input name="mobileNo" type="text" id="mobileNo" class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" id="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Address in License</label>
                        <input name="addressLicense" type="text" id="addressLicense" class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Current Address</label>
                        <input name="addressCurrent" type="text" id="addressCurrent" class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>

                    <div class="form-group">
                        <label>Number Of Fines</label>
                        <input name="noFines" type="text" id="noFines" class="form-control" aria-describedby="emailHelp"
                            placeholder="" readonly>
                    </div>

                    <div class="form-group">
                        <label>Number Of Warnings</label>
                        <input name="noWarnings" type="text" id="noWarnings" class="form-control"
                            aria-describedby="emailHelp" placeholder="" readonly>
                    </div>

                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td style="font-size: 19px;">Advance Search</td>
                        <td><select name="advanceSearch">
                                <option>Last Week</option>
                                <option>Last Month</option>
                                <option>Last Year</option>
                            </select></td>
                    </tr>
                    </table>
                </form>
                </center> -->

                    <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 250px;" type="button" value="View All My Offences"
                            name="myProfile" onClick="funcA()" class="a btn btn-primary btn-block"></center>

                    <?php
        $_GET["driverLicenseNo"];
        ?>

                    <script>
                    function funcA(driverLicenseNo) {
                        var a = document.getElementById("driverLicenseNo").value;

                        window.location.href =
                            "http://localhost:8080/TLV/TableTrial.php?driverLicenseNo=" + a + "";

                    }



                    function funcX() {

                        var y = '<?php echo $_GET["driverLicenseNo"]; ?>';
                        //document.write(y)
                        GetDetail(y);
                        return;
                    }

                    function GetDetail(y) {
                        if (y.length == 0) {
                            document.getElementById("driverLicenseNo").value = "";
                            document.getElementById("licenseExpiryDate").value = "";
                            document.getElementById("driverName").value = "";
                            document.getElementById("adminNo").value = "";
                            document.getElementById("mobileNo").value = "";
                            document.getElementById("email").value = "";
                            document.getElementById("addressLicense").value = "";
                            document.getElementById("addressCurrent").value = "";
                            document.getElementById("noFines").value = "";
                            document.getElementById("noWarnings").value = "";
                            return;
                        } else {

                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {

                                if (this.readyState == 4 &&
                                    this.status == 200) {

                                    var myObj = JSON.parse(this.responseText);

                                    document.getElementById("driverLicenseNo").value = myObj[0];
                                    document.getElementById("licenseExpiryDate").value = myObj[1];
                                    document.getElementById("driverName").value = myObj[2];
                                    document.getElementById("adminNo").value = myObj[3];
                                    document.getElementById("mobileNo").value = myObj[4];
                                    document.getElementById("email").value = myObj[5];
                                    document.getElementById("addressLicense").value = myObj[6];
                                    document.getElementById("addressCurrent").value = myObj[7];
                                    document.getElementById("noFines").value = myObj[8];
                                    document.getElementById("noWarnings").value = myObj[9];
                                }
                            };

                            xmlhttp.open("GET", "MyProfile2.php?driverLicenseNo=" + y, true);

                            xmlhttp.send();
                        }
                    }
                    </script>
    </body>

</html>