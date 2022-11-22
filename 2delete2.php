<?php

include_once 'myConnection.php';


$officerID = $_REQUEST["officerID"];
         

if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
else
{

$officerID=$_GET['officerID'];

$del="DELETE FROM trafficofficers WHERE officerID ='$officerID';";


if(mysqli_query($conn,$del))
{
echo "record deleted successfully";
header("Location: 2delete.php");

}
else
echo "Deletion failed";

}

?>