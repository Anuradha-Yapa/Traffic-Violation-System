<!DOCTYPE html>
<html>

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
    <style>
    #confirm {
        display: none;
        background-color: #C733FF;
        color: #FFFFFF;
        border: 5px solid #FFFFFF;
        border-radius: 25px;
        position: fixed;
        width: 350px;
        left: 50%;
        margin-left: -150px;
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
        border: 3px solid #FFFFFF;
        padding: 5px;
        text-align: center;
        width: 80px;
        margin-top: 10%;
        cursor: pointer;
        text-align: center;
        font-size: 19px;
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
        <div id="confirm">
            <div class="message">Successful Record Insertion!</div>
            <button class="yes">Okay</button>
        </div>

    </body>

</html>