<?php
	echo "<center><h2>ADD DRUGS</h2></center><br><br>";
	echo "<center>Please enter the food specifications you want to add.</center><br><br>";
?>
<!DOCTYPE html>
<body>
<form action="connect.php" method="POST">
<center>Name: <input type="text" name="name"><br><br></center>
<center>Quantity: <input type="int" name="quantity"><br><br></center>
<center>Unit Price: <input type="float" name="unit_price"><br><br></center>
<center><input type="submit" name="Submit"></center>
</form>
</body>
</html>