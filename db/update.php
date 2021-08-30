<?php 
	
	$Id =  $_POST['selling_id'];
    $Date =  $_POST['date'];
    $CName =  $_POST['customar_name'];
    $Name =  $_POST['product_name'];
	$iteam = $_POST['total_iteam'];
	$bill = $_POST['total_bill'];
		
	
	require_once('../db_config.php');

	

	$sql = "Update selling_info SET date='$Date', customar_name='$CName', product_name='$Name',  total_iteam='$iteam',total_bill='$bill' WHERE selling_id='$Id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$conn->close();

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated selling  info of $Name. <br>";
		header("Location: ../home.php"); 
	}

	


?>