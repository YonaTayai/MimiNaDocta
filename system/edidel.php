<?php 	
	include '../dbconnection/connection.php';
	if (isset($_POST['submit'])) {
		$edit="UPDATE dams_doctors SET dID='.$_POST["dID"]', d_profimage ='.$_POST["ppicture"]', d_email='.$_POST["email"]',d_password='.$_POST["password"]',d_name='.$_POST["name"]',d_phoneNo='.$_POST["phone"]',d_address='.$_POST["paddress"]',d_dob='.$_POST["dob"]',d_degree='.$_POST["education"]',d_expertIn='.$_POST["expert"]',d_status='.$_POST["status"]',d_hospital='.$_POST["hospital"]' WHERE dID='.$_POST["dID"]'";
		if ($conn->query($edit) === TRUE) {
			echo "updated successfully";
		}
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Updating Doctors Details</title>
 	 <link rel="stylesheet" type="text/css" href="../Designing/h_styling.css">
	<link rel="stylesheet" type="text/css" href="../Designing/w3.css">
	<link rel="stylesheet" type="text/css" href="../Designing/bootstrap.min.css">
 </head>
 <body>
 	 <div id="registerDoctor" class="px200 w3-light-grey">
      <div class="container w3-card">
      <h3 class="w3-center font">UPDATING DOCTOR'S DETAILS</h3>   
      <hr>
      <form action="adminActform.php" method="POST" enctype="multipart/form-data" onsubmit="formValidation();"  >
      <div class="w3-row w3-row-padding">
        <div class="w3-half">
          <label class="font">Email:</label>
          <input class="w3-input w3-hover-border-green" type="email" required name="email" value="<?php echo $rows['d_email'] ?>">
        </div>
        <div class="w3-half l4">
          <label class="font">Password:</label>
          <input class="w3-input w3-hover-border-green" type="password" required name="password" value="<?php echo $rows['d_password'] ?>">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Name:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="name" value="<?php echo $rows['d_name'] ?>">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Profile Picture:</label>
          <input class="w3-input w3-hover-border-green" type="file" required name="ppicture" value="<?php echo $rows['d_profimage'] ?>">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half">
          <label class="font">Phone Number:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="phone" value="<?php echo $rows['d_phoneNo'] ?>">
        </div>
        <div class="w3-half l4">
          <label class="font">Physical Address:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="paddress" value="<?php echo $rows['d_address'] ?>">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Date of Birth:</label>
          <input class="w3-input w3-hover-border-green" type="date" required name="dob" value="<?php echo $rows['d_dob'] ?>">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Education Level:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="education" value="<?php echo $rows['d_degree'] ?>">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Expertise:</label>
          <select name="expert">
            <option value="<?php echo $rows['d_expertIn'] ?>">Bones</option>
            <option value="<?php echo $rows['d_expertIn'] ?>">Skin</option>
            <option value="<?php echo $rows['d_expertIn'] ?>">Muscles</option>
            <option value="<?php echo $rows['d_expertIn'] ?>">Eyes</option>
          </select>
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Status:</label>
          <select name="status">
            <option value="<?php echo $rows['d_status'] ?>">Active</option>
            <option value="<?php echo $rows['d_status'] ?>">InActive</option>
          </select>
        </div>        
      </div>
      <div class="w3-row mt-4 w3-row-padding">
        <div class="w3-half w3-section mb-5 w3-left-bar l4">
          <label class="font">Hospital Available:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="hospital" value="<?php echo $rows['d_hospital'] ?>">
        </div>
          <button type="submit" name="submit" class="w3-section w3-button w3-group mt-5 w3-third w3-padding w3-dark-grey w3-border-0 w3-hover-teal">Register
          </button>
        </div>            
      
    </form>
    </div>
  </div>
 </body>
 </html>