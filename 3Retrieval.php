<?php

$officerID = $_REQUEST['officerID'];

$con = mysqli_connect("localhost", "root", "", "trafficlawviolations");

if ($officerID !== "") {
	
	$query = mysqli_query($con, "SELECT officerID, password, officerName, policeStation, officerNIC, dateOfBirth, contactNumber, emailAddress, physicalAddress FROM trafficofficers WHERE officerID = '$officerID'");

	$row = mysqli_fetch_array($query);

	$officerID = $row["officerID"];
	$password = $row["password"];
	$officerName = $row["officerName"];
	$policeStation = $row["policeStation"];
	$officerNIC = $row["officerNIC"];
	$dateOfBirth = $row["dateOfBirth"];
	$contactNumber = $row["contactNumber"];
	$emailAddress = $row["emailAddress"];
	$physicalAddress = $row["physicalAddress"];
}

$result = array("$officerID", "$password", "$officerName", "$policeStation", "$officerNIC", "$dateOfBirth", "$contactNumber", "$emailAddress", "$physicalAddress");

$myJSON = json_encode($result);
echo $myJSON;
?>