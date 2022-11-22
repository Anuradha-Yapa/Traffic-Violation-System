<?php
$pageview = $_GET['getID'];

$GLOBALS['server'] = "localhost";$GLOBALS['username'] = "root";$GLOBALS['password'] = "";$GLOBALS['database'] = "trafficlawviolations";


$GLOBALS['conn'] = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$GLOBALS['db'] = mysqli_connect($server, $username, $password, $database);

$pageview = $_GET['getID'];
//$sql = "UPDATE payments SET paymentStatus='Paid' WHERE referenceNo='$pageview'";
$sql = "UPDATE crimes SET paymentStatus='Paid' WHERE referenceNo='$pageview'";
$sql = "UPDATE payments SET paymentStatus='Paid' WHERE referenceNo='$pageview'";

if (mysqli_multi_query($GLOBALS['db'], $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

//$conn->close();
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Payment Done</title>
    <meta charset="utf-8">

</head>

<body class="App">
    <h1>Payment Done</h1>
    <?php
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

?>
    <h4>Transaction ID: <?php echo generateRandomString(); ?></h4>
    <form method="POST" action="invoice.php">
        <input type="text" name="id_trans" value="<?php echo $pageview; ?>" hidden>

        <pre>Email Address: <input type="email"
                               name="user_email_address">
    </pre>

        <input type="submit" value="Email to invoice">
    </form>
    <a href="index.php" class="btn-link">Back to Home</a>
    </div>
</body>

</html>