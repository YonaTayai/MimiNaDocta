<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../Designing/h_styling.css">
	<link rel="stylesheet" type="text/css" href="../Designing/w3.css">
	<link rel="stylesheet" type="text/css" href="../Designing/bootstrap.min.css">
</head>
<body style="background-image: url('../images/hosptbg.jpg');">
	<!-- From line 22 to 27 Designing Header-->
	<h1 class="w3-container sm6 w3-top w3-teal w3-text-white w3-text-green header w3-center">
		<a href="">
			<img class="avatar w3-left" src="../images/avatar3.png">
		</a>Doctor Appointment Management System (DAMS)<img class="avatar w3-hover-sepia w3-right w3-circle" src="../images/avatar3.png">
	</h1>	

<!-- Login Form Design -->
<div id="btn" class="w3-center">
	<button class="margin w3-large w3-btn w3-teal" onclick="login()">Login</button>
</div>
<div id="form" class="form-control row w3-form w3-panel" > <h3 class="w3-center" >Login Here</h3>
	<form action="logActform.php" method="POST" class="form-inline" name="submit" onsubmit="return formValidation()" target="userDashbord.html">
		
		
			<div class="row ">
				<label for="username"><h5 class="font">Username:</h5></label>
				 <input class="marginbottom  w3-input mb-2 col   w3-hover-border-green" type="email" name="username" placeholder="username@gmail.com" required="">
			</div>
		<div class="row">
			<label><h5 class="font">Password:</h5></label> 
			<input class="margintop w3-input col   w3-hover-border-green mb-2" type="password" placeholder="Type Password"name="password" required="">
		</div>
		<div class="row">
			<select name="whom" class="w3-input">
				<option value="asAdmin">As Admin</option>
				<option value="asDoctor">As Doctor</option>
				<option value="asPatient">As Patient</option>
			</select><!-- <h5 class="font">Password:</h5></label> 
			<input class="margintop  col   w3-hover-border-green mb-2" type="password" placeholder="Type Password"name="password" required=""> -->
		</div>
		<div class="row-cols-4">
			<button name="submit" class="btnlogin w3-button w3-border-0 w3-teal">
				<h5 class="font">Login</h5>				
			</button>
		</div>
		
		<div class="row">
			<p class="font">Or</p>
			<a class="w3-hover-text-green col" href="../system/regform.php">Create an Account</a>
		<a id="yeye" class="col" href="reset password.html">forgot password</a>
		</div>
		
	</form>
</div>
<script type="text/javascript">	
	function login() {
		var x= document.getElementById("form");
		var y= document.getElementById("btn");
		x.style.display="block";
		y.style.visibility="hidden";
	}
	function formValidation(argument) {
		
	}
</script>
</body>
</html>