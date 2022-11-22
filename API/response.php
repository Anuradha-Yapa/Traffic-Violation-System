<?php

if($_GET['APIkey']!='gftfrhy6tr6rhtrfjyt7tjyfdthdtgfr'){
include 'error.php';
echo $error;
}
else{
	
	include 'conn.php';

	$query = $link->query($_GET['query']);
	$result = array();

	while ($rowData = $query->fetch_assoc()) {
		$result[] = $rowData;
	}


	echo json_encode($result);
}
?>