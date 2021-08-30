<html>
    <head>
        <meta charset="UTF-8">   
        <title>Store Management System </title>
       

    </head> 

   <link rel="stylesheet" href="css/semantic.min.css">
	<?php 
	     require_once('db_config.php');
	 ?>


<body>
	

	<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}


			$query = "SELECT * FROM selling_info order by date asc";
			if ($result = $conn->query($query))
			
			?>
	

			<h1>Store Management System</h1>

			<div style="padding: 20px">
				
				
				<a href="addfrom_sell_info.html"><button class="ui green button">Add selling Info</button></a> 
				<div class="field">
      <br>    		
	  </div>				
					<table class="ui celled table" >
						<thead>
			<tr>
				<th>List</th>
				<th>Date</th>
				<th>Customar Name</th>
				<th>Product Name</th>
				<th>Total Iteam Sell</th>
				<th>Total Bill</th>
				<th>Option</th>
				<th>Option</th>
				
			</tr> 

		</thead>
		
		<tbody>
			<tr>
				<?php
			if ($result = $conn->query($query)) {
				$ser =1;
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td>  <td><a href='db/delete.php?id=%s'>Delete</a></td> <td><a href='editfrom_sell_info.php?id=%s'>Edit</a> </td>", $ser,$row["date"], $row["customar_name"], $row["product_name"],$row["total_iteam"],$row["total_bill"] , $row["selling_id"] ,$row["selling_id"]);

					printf("</tr>");
					$ser++;
				}
			}

			?>
			</tr>


		</tbody>

	</table>
	
	
</body>
</html>