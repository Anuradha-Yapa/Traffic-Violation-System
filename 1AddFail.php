<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script>
    function functionAlert(msg, myYes) {
        var confirmBox = $("#confirm");
        confirmBox.find(".message").text(msg);
        confirmBox.find(".yes").unbind().click(function() {
            confirmBox.hide();
        });
        confirmBox.find(".yes").click(myYes);
        confirmBox.show();
    }
    </script>
    <meta charset="utf-8">
    <title>Successful Insertion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <style>
    #confirm {
        display: none;
        background-color: #C733FF;
        color: #FFFFFF;
        border: 2px solid #FFFFFF;
        border-radius: 25px;
        position: fixed;
        width: 350px;
        left: 50%;
        margin-left: -170px;
        margin-top: 10%;
        padding: 6px 8px 8px;
        box-sizing: border-box;
        padding-right: -30%;
        text-align: center;
        font-size: 19px;
        color: #FFFFFF;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        /* font-weight: bold; */
    }

    #confirm button {
        background-color: #C733FF;
        display: inline-block;
        border-radius: 45px;
        border: 2px solid #FFFFFF;
        padding: 5px;
        text-align: center;
        width: 80px;
        margin-top: 4%;
        cursor: pointer;
        text-align: center;
        font-size: 18px;
        color: #FFFFFF;
        font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    #confirm .message {
        text-align: center;

    }
    </style>
</head>

<body>

    <body onload="functionAlert()">

        <section class="container-fluid bg">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">

                    <div id="confirm">
                        <div class="message">Ooops, Unsucessful Attempt!</div>
                        <button class="yes">Okay</button>
                    </div>



                    <!-- <input name="officerName" type="text" id='officerName'
                    value="Traffic Officer record has been successfully added to the system database!"
                    class="form-control" aria-describedby="emailHelp" placeholder=""
                    style=" font-size: 18px; background-color: #D5DEF5; height: 23%; width:192%; margin-top:70%; margin-left:-44%;"
                    readonly>
                <br> -->

                    <button
                        style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-top:100%; margin-left:2%;"
                        type="submit" class="btn btn-primary
                                    btn-block" onclick="funcY()">Try Again</button>

                    <button
                        style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-left:2%;"
                        type="submit" class="btn btn-primary
                                    btn-block" onclick="funcX()">Go To Admin
                        Dashboard</button>


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
        function funcX() {


            window.location.href = "AdminSelection.php";

        }

        function funcY() {


            window.location.href = "1AddOfficers.php";

        }
        </script>
    </body>

</html>