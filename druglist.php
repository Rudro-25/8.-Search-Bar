<?php
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
$sql = "SELECT ID,Name,Quantity,Unit_Price FROM drug_list;";
$result = $conn->query($sql);
if($result->num_rows>0){
	echo "<center><h3><br><br>DRUG LIST</h3></center>";
	while($row=$result->fetch_assoc()){
		echo "<center><h3>ID: ".$row['ID']. "   Name: ".$row['Name']. "   Quantity: ".$row['Quantity']. "   Unit Price: ".$row['Unit_Price']."</h3></center>";
	}
}
else{
	echo "<center><h3><br><br>Sorry! No result found.</h3></center>";
}
$conn->close();
?>