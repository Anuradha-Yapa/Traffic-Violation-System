<?php

$driverLicenseNo = $_REQUEST['driverLicenseNo'];

$con = mysqli_connect("localhost", "root", "", "trafficlawviolations");

if ($driverLicenseNo !== "") {
	
	$query = mysqli_query($con, "SELECT driverLicenseNo, licenseExpiryDate, driverName, adminNo, mobileNo, email, addressLicense, addressCurrent, noFines, noWarnings FROM driver WHERE driverLicenseNo = '$driverLicenseNo'");

	$row = mysqli_fetch_array($query);

	$driverLicenseNo = $row["driverLicenseNo"];
	$licenseExpiryDate = $row["licenseExpiryDate"];
	$driverName = $row["driverName"];
	$adminNo = $row["adminNo"];
	$mobileNo = $row["mobileNo"];
	$email = $row["email"];
	$addressLicense = $row["addressLicense"];
	$addressCurrent = $row["addressCurrent"];
	$noFines = $row["noFines"];
	$noWarnings = $row["noWarnings"];
}

$result = array("$driverLicenseNo", "$licenseExpiryDate", "$driverName", "$adminNo", "$mobileNo", "$email", "$addressLicense", "$addressCurrent", "$noFines", "$noWarnings");

$myJSON = json_encode($result);
echo $myJSON;
?>