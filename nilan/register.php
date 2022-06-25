<?php
// create connection
 $con=mysqli_connect("localhost","root","","hall_management");
 
 //check the connection
 if(!$con) //if($con==false)
	{
	die ("not connected: ". mysqli_connect_error());
	}

$sql="INSERT INTO register(NIC,fname,lname,type,department,tp,email,username,password)
 VALUES ('$_POST[nic]','$_POST[fname]','$_POST[lname]','$_POST[RadioGroup1]','$_POST[department]','$_POST[tp]','$_POST[email]','$_POST[username]','$_POST[password]')";

if(!mysqli_query($con,$sql))
	{
	echo "error "."-- ". $sql." -- ".mysqli_error($con);
	}
else
	{
	header("location: index.html");
	}
?>