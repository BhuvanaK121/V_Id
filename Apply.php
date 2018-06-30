<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["t1"];
	$gender=$_POST["s4"];
	$age=$_POST["t5"];
	$mobileno=$_POST["t14"];
	$emailid=$_POST["t15"];
	$optional=$_POST["t13"];
	$state=$_POST["s1"];
	$district=$_POST["s5"];
	$houseno=$_POST["t7"];
	$street=$_POST["t8"];
	$village=$_POST["t9"];
	$postoffice=$_POST["t10"];
	$pincode=$_POST["t11"];
	$typeofrelation=$_POST["s3"];
	$relativename=$_POST["t13"];
}

$server="localhost";
$db="Voter";
$pwd="";
$user="root";
$conn=new mysqli($server,$user,$pwd,$db);
if(!$conn)
	echo "Connection failure.... Retry";
else
{
	echo "Connection successful";
}
$sql="Insert into GeneralDetails(Name,Gender,Age,Mobileno,Emailid,Optional) values('$name','$gender','$age','$mobileno','$emailid','$optional')";
$sql="Insert into Address(Houseno,Street,Village,Postoffice,Pincode,State,District) values('$houseno','$street','$village','$postoffice','$pincode','$state','$district')";
$sql="Insert into Relative(Name,Relativename,Typeofrelation) values('$name','$relativename','$typeofrelation')";
if(($conn->query($sql)===True)&&($conn->query($sql)===True)&&($conn->query($sql)===True)
{
	echo "Your details have been submitted successfully";
}
else
{
	echo"Errror in insertion";
}
$conn->close();
?>