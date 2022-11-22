<?php
include_once 'myConnection.php';

$officerID = $_REQUEST["a"];
$password = $_REQUEST["b"];
$officerName = $_REQUEST["c"];
$policeStation = $_REQUEST["d"];
$officerNIC = $_REQUEST["e"];
$dateOfBirth = $_REQUEST["f"];
$contactNumber = $_REQUEST["g"];
$emailAddress = $_REQUEST["h"];
$physicalAddress = $_REQUEST["i"];


if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
else
{

$officerID = $_REQUEST["a"];
$password = $_REQUEST["b"];
$officerName = $_REQUEST["c"];
$policeStation = $_REQUEST["d"];
$officerNIC = $_REQUEST["e"];
$dateOfBirth = $_REQUEST["f"];
$contactNumber = $_REQUEST["g"];
$emailAddress = $_REQUEST["h"];
$physicalAddress = $_REQUEST["i"];

	$updatequery="UPDATE trafficofficers SET officerID ='$officerID', officerName ='$officerName', policeStation ='$policeStation', 
    password ='$password', officerNIC ='$officerNIC', dateOfBirth ='$dateOfBirth', contactNumber ='$contactNumber', emailAddress ='$emailAddress',
    physicalAddress ='$physicalAddress' WHERE officerID='$officerID';";
    
	if(mysqli_query($conn, $updatequery))
	{
		//echo "Updated successfully";
		$officerID = $_REQUEST["a"];

		header("Location: 3updateSuccess.php?officerID=$officerID");

		
	}
	else
	{
		echo "Unsuccessful";
	}

}

?>