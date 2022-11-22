<?php

include_once 'myConnection.php';
if(isset($_POST['submit']))
{
    $officerID = $_POST['officerID'];
    $password = $_POST['password'];
    $officerName = $_POST['officerName'];
    $officerNIC = $_POST['officerNIC'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $contactNumber = $_POST['contactNumber'];
    $emailAddress = $_POST['emailAddress'];
    $policeStation = $_POST['policeStation'];
    $physicalAddress = $_POST['physicalAddress'];

    $sql = "INSERT INTO trafficofficers (officerID,password,officerName,officerNIC,dateOfBirth,contactNumber,emailAddress,policeStation,physicalAddress) VALUES ('$officerID','$password','$officerName','$officerNIC','$dateOfBirth','$contactNumber','$emailAddress','$policeStation','$physicalAddress')";

    if(mysqli_query($conn, $sql))
    {
        //echo "Traffic Officer Added Successfully!";

        header("Location: 1AddSuccess.php");
    }

    else
    {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Location: 1AddFail.php");
    }
    mysqli_close($conn);
}
?>