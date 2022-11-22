<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","trafficlawviolations");

	$result = mysqli_query($conn,"SELECT * FROM crimes WHERE referenceNo='" . $_POST["referenceNo"] . "' and driverLicenseNo = '". $_POST["driverLicenseNo"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo '<script>alert("Unsuccessful Login! Kindly Try Again!")</script>'; 
	} 
	else 
	{
        session_start();
		$_SESSION["loggedin"] = true;
		header("Location: OffenceReport1.php?driverLicenseNo=".$_POST["driverLicenseNo"]."&referenceNo=".$_POST["referenceNo"]);
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    button:hover {
        background-color: #465ACB !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <section class="container-fluid bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">


                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-top:90%;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcX()">Driver Offences</button>

                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcY()">Admin Login</button>

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
        window.location.href =
            // "http://localhost:8080/TLV/table.php?driverLicenseNo=" + a + "";

            window.location.href = "index2.php";

    }

    function funcY() {
        window.location.href =
            // "http://localhost:8080/TLV/table.php?driverLicenseNo=" + a + "";

            window.location.href = "AdminLogin.php";

    }
    </script>
</body>

</html>