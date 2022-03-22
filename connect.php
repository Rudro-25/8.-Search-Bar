<?php
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$unitPrice=$_POST['unit_price'];

$server="localhost";
$user="root";
$pass="";
$db="rare_drug";

$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error){
	die("Error ".$conn->connect_error);
}
else{
	
}
if(empty($name)){
	die("<center><h4><br><br>Please head back & enter the informations correctly.</h4></center>");
}
if(empty($quantity)){
	die("<center><h4><br><br>Please head back & enter the informations correctly.</h4></center>");
}
if(empty($unitPrice)){
	die("<center><h4><br><br>Please head back & enter the informations correctly.</h4></center>");
}
$sql="INSERT INTO Drug_List (Name,Quantity,Unit_Price) 
VALUES('$name','$quantity','$unitPrice');";
if($conn->query($sql)==TRUE){
	echo "<br><br><center>Thank you!</center>";
	echo "<br><br><center>Record added successfully!</center>";
}
else{
	die("Error ".$conn->error);
}
$conn->close();
?>