<?php 

    $Id =  $_POST['selling_id'];
    $Date =  $_POST['date'];
    $CName =  $_POST['customar_name'];
    $Name =  $_POST['product_name'];
	$iteam = $_POST['total_iteam'];
	$bill = $_POST['total_bill'];
	
	
	require_once('../db_config.php');

	$sql = "Insert into selling_info VALUES(NULL,'$Date','$CName', '$Name', '$iteam','$bill')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added selling info. <br>";
	}

	$conn->close();

	echo "<a href='../home.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>