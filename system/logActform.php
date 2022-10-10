<?php include '../dbconnection/connection.php';

if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$user=$_POST['whom'];
	
	switch ($user) {
		case 'asPatient':
			$find="SELECT * FROM dams_patient WHERE (email='$username' AND password='$password')";
			$result=$conn->query($find);
			if ($result->num_rows >0) {
			while ($row=$result->fetch_assoc()) {
				header("Location: userDashbord.php");
				}
			}else{
				header("Location: index.php");
			}
			break;

			case 'asDoctor':
			$find="SELECT * FROM dams_doctors WHERE (d_email='$username' AND d_password='$password' AND d_expertIn='bones')";
			$result=$conn->query($find);
			if ($result->num_rows > 0) {
				while ($rows=$result->fetch_assoc()) {
					header("Location: doc_Bones.php");
				}
			}elseif ($find="SELECT * FROM dams_doctors WHERE (d_email='$username' AND d_password='$password' AND d_expertIn='expert')") {
				$result=$conn->query($find);
			if ($result->num_rows > 0) {
				while ($rows=$result->fetch_assoc()) {
					header("Location: doc_Dentist.php");
				}
			}else{
				header('Location: index.php');
			}
			}
			
			
			break;

			case 'asAdmin':
			$find="SELECT * FROM admin WHERE (a_email='$username' AND a_password='$password')";
			$result=$conn->query($find);
			if ($result->num_rows > 0) {
				while ($rows=$result->fetch_assoc()) {
					echo "successfully logged in";
					header('Location: adminDashboard.php');
				}
			}else header('Location: index.php');
			break;
		default:
			header("Location: index.php");
			break;
	}
}
 ?>