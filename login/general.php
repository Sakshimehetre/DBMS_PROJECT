

<!doctype html>
<html>
<head>
<title>General</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
body {
	background-color: lightyellow;
}
.login{
width:200px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:40px;
float: left;
margin-left: 75px;
}

input[type=submit]{
width:100%;
background-color: rgb(43, 157, 192);
color:white;
   
border:2px solid rgb(43, 157, 192) ;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
.btn:hover{
	background-color: white;
    color:rgb(43, 157, 192);
   
}
</style>
</head>
<body>


<h1 style="text-align: center; font-family: 'Cinzel',serif";>View Tables</h1>



<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Customer</h1>
<form action="customer.php" style="text-align:center;">
<input type="submit"class="btn" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>


<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Room</h1>
<form action="rooms.php" style="text-align:center;">
<input type="submit" class="btn" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Room Status</h1>
<form action="roomstatus.php" style="text-align:center;">
<input type="submit"class="btn" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Bill</h1>
<form action="bill.php" style="text-align:center;">
<input type="submit" class="btn" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Employees</h1>
<form action="employees.php" style="text-align:center;">
<input type="submit" class="btn" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Restaurant</h1>
<form action="restaurant.php" style="text-align:center;">
<input type="submit" class="btn" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

</body>
</html>