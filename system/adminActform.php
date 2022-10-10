<?php 
include '../dbconnection/connection.php';
$directory= "../images/";
$filename = $directory.basename($_FILES['ppicture']['name']);
$filetype = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$pimage=$_FILES['ppicture'];
$phone=$_POST['phone'];
$address=$_POST['paddress'];
$dob=$_POST['dob'];
$education=$_POST['education'];
$expert=$_POST['expert'];
$status=$_POST['status'];
$hospital=$_POST['hospital'];
$allowType = array('jpg','png','jpeg','gif','pdf');
$temporary=$_FILES['ppicture']['tmp_name'];

if (isset($_POST['submit'])) {
	if ($email!="" AND $password!=="" AND  $name!=="" AND $pimage!=="" AND $phone!=="" AND $address!=="" AND $dob!=="" AND $education!=="" AND $expert!=="" AND $status!=="" AND $hospital!=="") {
		if (in_array($filetype, $allowType)) {
			if (move_uploaded_file($temporary, $filename)) {
				$insert="INSERT INTO dams_doctors(d_profimage, d_email, d_password, d_name, d_phoneNo, d_address, d_dob, d_degree, d_expertIn, d_status, d_hospital) VALUES  ('$pimage','$email','$password','$name','$phone','$address','$dob','$education','$expert','$status','$hospital')";
		
	if ($conn->query($insert) === TRUE) {
		echo "Doctor has been registered successfully";
		}else{
			echo "something went wrong";
		}
	}
}
	}
	else{ echo "please fill all the fields";}	
}
 ?>