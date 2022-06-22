<?php
	include("dbconn.php");
?>


<!doctype html>
<html>
<style>
	body {
		font-size: 20px;
	}
	h1 {
		font-family: 'Cinzel',serif;
	}
</style>
<head>
	<link rel="stylesheet" href="../style.css">
<title>Bill Information</title>
</head>
<body>

<?php
	#for billing taking join on pays,customer and bill

	$sql1 = "SELECT customer.C_id, customer.name, customer.mobile_number, customer.check_out, bill.total_bill FROM customer join pays ON customer.C_id = pays.C_id join bill ON pays.I_id = bill.I_id";
	$result = mysqli_query($conn, $sql1); 

	echo"<h1 text align = 'center'>Billing Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";
    #displaying the table of billing info
	echo"<tr bgcolor = 'yellow'><th>ID</th><th>Name</th><th>Mobile</th><th>Check Out</th><th>Total Bill</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['C_id']}</td><td>{$row['name']}</td><td>{$row['mobile_number']}</td><td>{$row['check_out']}</td><td>{$row['total_bill']}</td></tr>\n";
	}
	echo"</table>";
	
?>

</body>
</html>