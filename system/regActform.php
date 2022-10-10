<?php 
include ("../dbconnection/connection.php");

$email=$_POST['email'];
$password=$_POST['password'];
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$dob=$_POST['dBirth'];
$gender=$_POST['gender'];
$phone=$_POST['pHone'];
$marital=$_POST['marital'];
$pAddress=$_POST['address'];
if (isset($_POST['submit']) && ($email!="" && $password!="" && $fname!="" && $lname!="" && $dob!="" && $gender!="" && $phone!="" && $marital!="" && $pAddress!="")) {

	$insert="INSERT INTO dams_patient(email, password, firstname, lastname, DOB, gender, phone, marital_status, complete_address) VALUES ('$email','$password','$fname','$lname','$dob','$gender','$phone','$marital','$pAddress')";
if ($conn->query($insert) === TRUE) {
	Header ('Location: index.php');
}else{
	echo "nothing over there";
}
 }
 ?>
