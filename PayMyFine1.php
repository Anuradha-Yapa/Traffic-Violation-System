<?php
require_once 'config.php';
include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    .a:hover {
        background-color: #465ACB !important;
    }

    .x {
        text-align: center !important;
    }

    form {
        margin-top: -35% !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Pay My Fine</title>
    <style>
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
<script src="https://js.stripe.com/v3/"></script>

<body>

    <body onload="funcX()">
        <section class="container-fluid bg">
            <!-- <section class="row justify-content-center"> -->
            <section class="col-12 col-sm-6 col-md-3">

                <form class="form-container" method="post" style="width: 450px; margin-left: 458px; margin-top: -30px;">

                    <h2>
                        <center>Pay My Fine</center>
                    </h2>
                    <div id="paymentResponse"></div>
                    <br>

                    <div class="form-group">
                        <label>Fine Amount</label>
                        <input name="fineAmount" type="text" id='fineAmount' class="form-control"
                            aria-describedby="emailHelp" placeholder=""
                            style="background-color: #D5DEF5; padding-top:-70%;">
                    </div>

                    <div class="form-group">
                        <label>Currency</label>
                        <input name="currency" type="text" id='currency' value="LKR" class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class="form-group">
                        <label>Pay Before</label>
                        <input name="payBefore" type="date" id='payBefore' value="LKR" class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class="form-group">
                        <label>Days Remaining</label>
                        <input name="daysRemaining" type="text" id='daysRemaining' class="form-control"
                            aria-describedby="emailHelp" placeholder="" style="background-color: #D5DEF5;">
                    </div>

                    <div class="form-group">
                        <label>Payment Method</label>
                        <input name="paymentMethod" type="text" id='paymentMethod' value="Online Payment"
                            class="form-control" aria-describedby="emailHelp" placeholder=""
                            style="background-color: #D5DEF5;">
                    </div>

                    <br>

                    <div id="buynow">
                        <button style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif;
                            font-size: 17px; height: 40px; width: 140px; margin-left: 31%;" type="button"
                            class="btn__default btn btn-primary btn-block x a" id="payButton">
                            Pay Now
                        </button>
                    </div>



                    <?php

        $referenceNo = $_GET['referenceNo'];
        $results = mysqli_query($db_conn,"SELECT referenceNo, currency, fineAmount FROM payments where referenceNo='$referenceNo'");
        $row = mysqli_fetch_array($results,MYSQLI_ASSOC);
        ?>

                    <!--        <div class="col__box">-->
                    <!--            <h5>--><?php //echo $row['referenceNo']; ?>
                    <!--</h5>-->
                    <!--            <h6>Price: <span> --><?php //echo $row['currency']; ?>
                    <!----><?php //echo $row['fineAmount']; ?>
                    <!-- </span> </h6>-->

                    <?php
        $_GET["referenceNo"];
        ?>


                    <script>
                    function funcX() {

                        var x = '<?php echo $_GET["referenceNo"]; ?>';
                        GetDetail(x);
                        return;
                    }

                    function GetDetail(x) {

                        if (x.length == 0) {
                            document.getElementById("fineAmount").value = "";
                            document.getElementById("currency").value = "";
                            document.getElementById("payBefore").value = "";
                            document.getElementById("daysRemaining").value = "";
                            return;
                        } else {

                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {

                                if (this.readyState == 4 &&
                                    this.status == 200) {

                                    var myObj = JSON.parse(this.responseText);

                                    document.getElementById("fineAmount").value = myObj[0];

                                    var d = '<?php echo $_GET["date"]; ?>';
                                    const datte = new Date(d);

                                    datte.setDate(datte.getDate() + 14);


                                    var dd2 = String(datte.getDate()).padStart(2, '0');
                                    var mm2 = String(datte.getMonth() + 1).padStart(2, '0');
                                    var yyyy2 = datte.getFullYear();
                                    datte2 = yyyy2 + '-' + mm2 + '-' + dd2;

                                    //document.write(datte2)

                                    document.getElementById("payBefore").value = datte2;

                                    var payBefore2 = document.getElementById("payBefore").value;

                                    var today = new Date();
                                    var dd = String(today.getDate()).padStart(2, '0');
                                    var mm = String(today.getMonth() + 1).padStart(2, '0');
                                    var yyyy = today.getFullYear();

                                    today = yyyy + '-' + mm + '-' + dd;
                                    date1 = new Date(payBefore2);
                                    date2 = new Date(today);

                                    var time_difference = date1.getTime() - date2.getTime();
                                    var days_difference = time_difference / (1000 * 60 * 60 * 24);

                                    document.getElementById("daysRemaining").value = days_difference;
                                    //document.write(days_difference)
                                }
                            };

                            xmlhttp.open("GET", "PayMyFine2.php?referenceNo=" + x, true);
                            xmlhttp.send();
                        }
                    }
                    </script>


                    <script>
                    var buyBtn = document.getElementById('payButton');
                    var responseContainer = document.getElementById('paymentResponse');
                    // Create a Checkout Session with the selected product
                    var createCheckoutSession = function(stripe) {
                        return fetch("stripe_charge.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({
                                checkoutSession: 1,

                                ID: "<?php echo $row['referenceNo']; ?>",
                                Price: "<?php echo $row['fineAmount']; ?>",
                                Currency: "<?php echo $row['currency']; ?>",
                            }),
                        }).then(function(result) {
                            return result.json();
                        });
                    };

                    // Handle any errors returned from Checkout
                    var handleResult = function(result) {
                        if (result.error) {
                            responseContainer.innerHTML = '<p>' + result.error.message + '</p>';
                        }
                        buyBtn.disabled = false;
                        buyBtn.textContent = 'Pay Now';
                    };

                    // Specify Stripe publishable key to initialize Stripe.js
                    var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

                    buyBtn.addEventListener("click", function(evt) {
                        buyBtn.disabled = true;
                        buyBtn.textContent = 'Please wait...';
                        createCheckoutSession().then(function(data) {
                            if (data.sessionId) {
                                stripe.redirectToCheckout({
                                    sessionId: data.sessionId,
                                }).then(handleResult);
                            } else {
                                handleResult(data);
                            }
                        });
                    });
                    </script>


    </body>

</html>