<!doctype html>

<html lang="en">

<?php

     require_once('db_config.php');
     $id = $_GET['id'];
     $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
          exit();
      }


      $query = "SELECT * FROM selling_info where  selling_id='$id'";



           $result = $conn->query($query);
           $row = $result->fetch_assoc();



 ?>
        




<head>
  <meta charset="utf-8">
  <title>Edit selling Information</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #FE9A76; padding: 2%;">
	<h1>Insert Updating selling  Information</h1>
	<h4>The Updating  data will be inserted into the main database</h4>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/update.php">


     <div class="field" style="display: none;">
        <label>Id</label>
        <input type="text" name="selling_id" value="<?php echo $row["selling_id"] ?>"placeholder="Product Id">
      </div>
         
         <div class="field">
        <label>Date</label>
        <input type="text" name="date" value="<?php echo $row["date"] ?>" placeholder="Date">
      </div>

      
      <div class="field">
        <label>Customar Name</label>
        <input type="text" name="customar_name" value="<?php echo $row["customar_name"] ?>" placeholder="Customar Name">
      </div>
      <div class="field">
        <label>Product Name</label>
        <input type="text" name="product_name"value="<?php echo $row["product_name"] ?>" placeholder="Product Name">
      </div>
      <div class="field">
        <label>Total Iteam</label>
        <input type="text" name="total_iteam" value="<?php echo $row["total_iteam"] ?>"placeholder="Total Iteam">
      </div>
      <div class="field">
        <label>Total Bill</label>
        <input type="text" name="total_bill" value="<?php echo $row["total_bill"] ?>"placeholder="Total Bill">
      </div>
        

      <div style="padding: 5px">
        <button class="ui green button">Save</button>        
     </div>
    </form>
</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html