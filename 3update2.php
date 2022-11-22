<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    .myB {

        background-color: #C733FF !important;
        font-family: 'Comic Sans MS', cursive, sans-serif !important;
        font-size: 17px !important;
        height: 36px !important;
        width: 120px !important;
        margin-left: -75.5% !important;
        margin-top: -2.5% !important;
        /* padding-right: 30% !important; */


    }

    .x {
        text-align: center !important;
    }


    .b:hover {
        background-color: #C733FF !important;
        border: #C733FF !important;
    }


    .a:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Update Traffic Officer</title>
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

    <body onload="funcX()">

        <section class="container-fluid bg">
            <!-- <section class="row justify-content-center"> -->
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" method="post"
                    style="width: 550px; margin-left: 379px; margin-top: -100px;">

                    <h2>
                        <center>Update Traffic Officer</center>
                    </h2>
                    <br>

                    <div class="form-group">
                        <label>Officer ID</label>
                        <input name="officerID" type="int" id='officerID' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;" readonly>
                    </div><br>
                    

                    <div class=" form-group">
                        <label>Password</label>
                        <input name="password" type="text" id='p' class="form-control" aria-describedby="emailHelp"
                            placeholder="" style="background-color: #D5DEF5;">
                    </div>



                    <center><input style="margin-top: -2.5%; background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 39px; width: 240px; margin-left: -50.5%; padding-right: 30%"
                            type="button" value="Generate Random Password" onclick="RP()"
                            class="a btn btn-primary btn-block">
                    </center> <br>

                    <center><input style="margin-top: -2.5%; background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 39px; width: 240px; margin-top: -13.7%; margin-left: 50.8%;"
                            type="button" value="Clear Random Password" onclick="CRP()"
                            class="a btn btn-primary btn-block">
                    </center>


                    <br>

                    <div class="form-group">
                        <label>Officer Name</label>
                        <input name="officerName" type="text" id='officerName' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearN()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br>

                    <div class=" form-group">
                        <label>Police Station</label>
                        <input name="policeStation" type="text" id='policeStation' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearP()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br>

                    <div class=" form-group">
                        <label>Officer NIC</label>
                        <input name="officerNIC" type="text" id='officerNIC' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearNIC()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br>

                    <div class=" form-group">
                        <label>Date Of Birth</label>
                        <input name="dateOfBirth" type="date" id='dateOfBirth' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearDOB()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br>

                    <div class=" form-group">
                        <label>Contact Number</label>
                        <input name="contactNumber" type="text" id='contactNumber' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearCN()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br>

                    <div class=" form-group">
                        <label>Email Address</label>
                        <input name="emailAddress" type="text" id='emailAddress' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearEA()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br>


                    <div class=" form-group">
                        <label>Physical Address</label>
                        <input name="physicalAddress" type="text" id='physicalAddress' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>
                    <center><input type="button" value="Clear Value" onclick="clearPA()"
                            class="a btn btn-primary btn-block myB x">
                    </center><br><br>


                    <center><input style="background-color: #465ACB; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 45px; width: 150px;" type="" value="Update" name=""
                            class="btn btn-primary btn-block b" onclick="up()"></center>


                    <?php

include_once 'myConnection.php';

$query = "SHOW TABLE STATUS LIKE 'trafficofficers'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
// var_dump($row);

?>

                    <?php
        $_GET["officerID"];
        ?>


                    <script>
                    function funcX() {

                        var x = '<?php echo $_GET["officerID"]; ?>';
                        //document.write(x)
                        GetDetail(x);
                        return;
                    }

                    function GetDetail(x) {
                        if (x.length == 0) {
                            document.getElementById(" officerID").value="" ; document.getElementById("p").value="" ;
                            document.getElementById("officerName").value="" ;
                            document.getElementById("policeStation").value="" ;
                            document.getElementById("officerNIC").value="" ;
                            document.getElementById("dateOfBirth").value="" ;
                            document.getElementById("contactNumber").value="" ;
                            document.getElementById("emailAddress").value="" ;
                            document.getElementById("physicalAddress").value="" ; return; } else { var xmlhttp=new
                            XMLHttpRequest(); xmlhttp.onreadystatechange=function() { if (this.readyState==4 &&
                            this.status==200) { var myObj=JSON.parse(this.responseText);
                            document.getElementById("officerID").value=myObj[0];
                            document.getElementById("p").value=myObj[1];
                            document.getElementById("officerName").value=myObj[2];
                            document.getElementById("policeStation").value=myObj[3];
                            document.getElementById("officerNIC").value=myObj[4];
                            document.getElementById("dateOfBirth").value=myObj[5];
                            document.getElementById("contactNumber").value=myObj[6];
                            document.getElementById("emailAddress").value=myObj[7];
                            document.getElementById("physicalAddress").value=myObj[8]; } };
                            xmlhttp.open("GET", "3update3.php?officerID=" + x, true); xmlhttp.send(); } } function
                            funM() { var m='<?php echo $row["Auto_increment"]; ?>' ;
                            document.getElementById("officerID").value=m; return; } function clearID() {
                            document.getElementById("officerID").value="" ; return; } function clearN() {
                            document.getElementById("officerName").value="" ; return; } function clearP() {
                            document.getElementById("policeStation").value="" ; return; } function clearNIC() {
                            document.getElementById("officerNIC").value="" ; return; } function clearDOB() {
                            document.getElementById("dateOfBirth").value="" ; return; } function clearCN() {
                            document.getElementById("contactNumber").value="" ; return; } function clearEA() {
                            document.getElementById("emailAddress").value="" ; return; } function clearPA() {
                            document.getElementById("physicalAddress").value="" ; return; } function RP() { var
                            randomstring=Math.random().toString(36).slice(-8);
                            document.getElementById("p").value=randomstring; return; } 
                            
                            function CRP() {
                            document.getElementById("p").value="" ; 
                            return; 
                        } 
                            
                            function up() { 
                                var a = document.getElementById("officerID").value;
                                var b = document.getElementById("p").value;
                                var c = document.getElementById("officerName").value;
                                var d = document.getElementById("policeStation").value;
                                var e = document.getElementById("officerNIC").value;
                                var f = document.getElementById("dateOfBirth").value;
                                var g = document.getElementById("contactNumber").value;
                                var h = document.getElementById("emailAddress").value; 
                                var i = document.getElementById("physicalAddress").value; 

                                window.location.href =

                              "http://localhost:8080/TLV/3updateSQL.php?a=" + a + "&b=" + b + "&c=" + c + "&d=" + d + "&e=" + e + "&f=" + f + "&g=" + g + "&h=" + h + "&i=" + i + "";
                        
                        } 
                            
                            </script>


    </body>

</html>