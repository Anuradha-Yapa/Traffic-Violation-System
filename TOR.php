<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    .a:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Traffic Officer Record</title>
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
                        <center>Traffic Officer Record</center>
                    </h2>
                    <br>

                    <div class="form-group">
                        <label>Officer ID</label>
                        <input name="officerID" type="int" id='officerID' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class=" form-group">
                        <label>Password</label>
                        <input name="password" type="text" id='p' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class="form-group">
                        <label>Officer Name</label>
                        <input name="officerName" type="text" id='officerName' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class=" form-group">
                        <label>Police Station</label>
                        <input name="policeStation" type="text" id='policeStation' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class=" form-group">
                        <label>Officer NIC</label>
                        <input name="officerNIC" type="text" id='officerNIC' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class=" form-group">
                        <label>Date Of Birth</label>
                        <input name="dateOfBirth" type="date" id='dateOfBirth' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class=" form-group">
                        <label>Contact Number</label>
                        <input name="contactNumber" type="text" id='contactNumber' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>

                    <div class=" form-group">
                        <label>Email Address</label>
                        <input name="emailAddress" type="text" id='emailAddress' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div>


                    <div class=" form-group">
                        <label>Physical Address</label>
                        <input name="physicalAddress" type="text" id='physicalAddress' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>

                        <br>


                        <center><input style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 190px;" type="submit" value="Admin Dashboard" name=""
                                class="a btn btn-primary btn-block" onclick="funcX()"></center>




                        <script>
                        function funcX() {


                            window.location.href = "AdminSelection.php";

                        }

                        function funcY() {

                            var y = '<?php echo $_GET["officerID"]; ?>';

                            GetDetail(y);
                            return;
                        }

                        function GetDetail(y) {
                            if (y.length == 0) {
                                document.getElementById("officerID").value = "";
                                document.getElementById("p").value = "";
                                document.getElementById("officerName").value = "";
                                document.getElementById("policeStation").value = "";
                                document.getElementById("officerNIC").value = "";
                                document.getElementById("dateOfBirth").value = "";
                                document.getElementById("contactNumber").value = "";
                                document.getElementById("emailAddress").value = "";
                                document.getElementById("physicalAddress").value = "";
                                return;
                            } else {

                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {

                                    if (this.readyState == 4 &&
                                        this.status == 200) {

                                        var myObj = JSON.parse(this.responseText);

                                        document.getElementById("officerID").value = myObj[0];
                                        document.getElementById("p").value = myObj[1];
                                        document.getElementById("officerName").value = myObj[2];
                                        document.getElementById("policeStation").value = myObj[3];
                                        document.getElementById("officerNIC").value = myObj[4];
                                        document.getElementById("dateOfBirth").value = myObj[5];
                                        document.getElementById("contactNumber").value = myObj[6];
                                        document.getElementById("emailAddress").value = myObj[7];
                                        document.getElementById("physicalAddress").value = myObj[8];

                                    }
                                };

                                xmlhttp.open("GET", "3Retrieval.php?officerID=" + y, true);

                                xmlhttp.send();
                            }
                        }
                        </script>


    </body>

</html>