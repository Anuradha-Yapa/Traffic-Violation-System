<?php

$referenceNo = $_REQUEST['referenceNo'];

$con = mysqli_connect("localhost", "root", "", "trafficlawviolations");

if ($referenceNo !== "") {
	
	$query = mysqli_query($con, "SELECT amountFined, currency FROM crimes WHERE referenceNo = '$referenceNo'");

	$row = mysqli_fetch_array($query);
	
	$fineAmount = $row["amountFined"];
	$currency = $row["currency"];
	
}

$result = array("$fineAmount", "$currency");

$myJSON = json_encode($result);
echo $myJSON;

?>