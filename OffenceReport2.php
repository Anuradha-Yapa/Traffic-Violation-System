<?php

$referenceNo = $_REQUEST['referenceNo'];

$con = mysqli_connect("localhost", "root", "", "trafficlawviolations");

if ($referenceNo !== "") {
	
	$query = mysqli_query($con, "SELECT referenceNo, driverName, driverLicenseNo, vehiclePlateNo, offenceCommitted, date, time, location, officerID_01, officerID_02, policeStation, offenceType, amountFined, paymentStatus FROM crimes WHERE referenceNo = '$referenceNo'");
	

	$row = mysqli_fetch_array($query);

	$referenceNo = $row["referenceNo"];
	$driverName = $row["driverName"];
	$driverLicenseNo = $row["driverLicenseNo"];
	$vehiclePlateNo = $row["vehiclePlateNo"];
	$offenceCommitted = $row["offenceCommitted"];
	$date = $row["date"];
	$time = $row["time"];
	$location = $row["location"];
	$officerID_01 = $row["officerID_01"];
	$officerID_02 = $row["officerID_02"];
	$policeStation = $row["policeStation"];
	$offenceType = $row["offenceType"];
	$amountFined = $row["amountFined"];
	$paymentStatus = $row["paymentStatus"];
	
}

$result = array("$referenceNo", "$driverName", "$driverLicenseNo", "$vehiclePlateNo", "$offenceCommitted", "$date", "$time", "$location", "$officerID_01", "$officerID_02", "$policeStation", "$offenceType", "$amountFined", "$paymentStatus");

$myJSON = json_encode($result);
echo $myJSON;
?>