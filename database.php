<?php
	$servername="localhost";
	$username="root";
	$password="";
   
	   $con= new mysqli($servername,$username,$password);
	   if($con->connect_error){die("failed");}
	   else{ echo"successful";}
   
	$query='use dbm';
	if($con->query($query)==TRUE){
		echo 'Database Connected';
	}
	else{
		$con->error;
	}
 ?>