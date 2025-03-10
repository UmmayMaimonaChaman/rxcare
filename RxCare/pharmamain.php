<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="table1.css">
<link rel="stylesheet" type="text/css" href="navigation.css">
<title>
Pharmacist Dashboard
</title>
</head>
<style>
body {font-family:Arial;}
</style>

<body>

		<div class="sidenav">
			<h2 style="font-family:Arial; color:white; text-align:center;"> RxCare </h2>
			<a href="pharmamain.php">Dashboard</a>
			
			<a href="p_materials_view.php">View Materials</a>
			<a href="p_sale1.php">Add New Sale</a>
			<button class="dropdown-btn">Customers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="p_customer_edit.php">Add New Customer</a>
				<a href="p_customer_view.php">View Customers</a>
			</div>
	</div>

	<?php
	
		include "db_connect.php";
		session_start();
		
		$sql="SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
		$result=$conn->query($sql);
		$row=$result->fetch_row();
		
		$ename=$row[0];
		
	?>
	

	<div class="topnav">
		<a href="logout_pharma.php">Logout(signed in as <?php echo "Pharmacist" ; ?>)</a>
	</div>
	
	<center>
	<div class="head">
	<h2> PHARMACIST DASHBOARD </h2>
	</div>
	</center>
	
	<a href="p_sale1.php" title="Add New Sale">
	<img src="carticon.png" style="padding:8px;margin-left:550px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Add New Sale">
	</a>
	
	<a href="p_materials_view.php" title="View Matirials">
	<img src="inventory.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Inventory">
	</a>
	
</body>

<script>

	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  var dropdownContent = this.nextElementSibling;
		  if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		  } 
		  else {
		  dropdownContent.style.display = "block";
		  }
		});
	}
	
</script>

</html>
