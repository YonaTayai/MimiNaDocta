<?php include '../dbconnection/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../designing/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="../scripts/js.js" type="text/javascript"></script>
</head>
<body style="background-image: url('../images/hosptbg.jpg');">
	<?php include 'headre1.php'; ?>

	<!-- <ul>
		<a href="#" class="w3-bar-item w3-button"><i class="fa fa-home">Profile</i></a>
  		<a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i>Add Doctor</a>
  		<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>View Appointments</a>
  		<a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i>View Users</a>
	</ul> -->
  <div class="w3-sidebar w3-card w3-bar-block w3-text-teal w3-light-grey w3-card" style="width:200px;">
    <div class="profileleft w3-section ">
      <img class="w3-circle profile" src="../images/profile.webp">
      <h6>Admin's Profile</h6>
      <p>admin@gmail.com</p>
    </div>
    <hr>
    <button id="btnregistDoctor" class="font w3-bar-item w3-button">Add Doctor</button>
    <button id="btnviewdoctors" class="font w3-bar-item w3-button">View Doctors</button>
    <button id="btnappointment" class="font w3-bar-item w3-button">Appointments</button>
    <button id="btnviewpatients" class="font w3-bar-item w3-button">Patients</button>
    <button id="btnschedule" class="font w3-bar-item w3-button">Schedules</button>
      </div>
    </div>
    <div id="registerDoctor" class="px200 w3-light-grey">
      <div class="container w3-card">
      <h3 class="w3-center">DOCTORS REGISTRATION FORM</h3>   
      <hr>
      <form action="adminActform.php" method="POST" enctype="multipart/form-data" onsubmit="formValidation();"  >
      <div class="w3-row w3-row-padding">
        <div class="w3-half">
          <label class="font">Email:</label>
          <input class="w3-input w3-hover-border-green" type="email" required name="email">
        </div>
        <div class="w3-half l4">
          <label class="font">Password:</label>
          <input class="w3-input w3-hover-border-green" type="password" required name="password">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Name:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="name">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Profile Picture:</label>
          <input class="w3-input w3-hover-border-green" type="file" required name="ppicture">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half">
          <label class="font">Phone Number:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="phone">
        </div>
        <div class="w3-half l4">
          <label class="font">Physical Address:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="paddress">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Date of Birth:</label>
          <input class="w3-input w3-hover-border-green" type="date" required name="dob">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Education Level:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="education">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Expertise:</label>
          <select name="expert">
            <option value="bones">Bones</option>
            <option value="skin">Skin</option>
            <option value="muscles">Muscles</option>
            <option value="eyes">Eyes</option>
          </select>
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Status:</label>
          <select name="status">
            <option value="Active">Active</option>
            <option value="Active">InActive</option>
          </select>
        </div>        
      </div>
      <div class="w3-row mt-4 w3-row-padding">
        <div class="w3-half w3-section mb-5 w3-left-bar l4">
          <label class="font">Hospital Available:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="hospital">
        </div>
          <button type="submit" name="submit" class="w3-section w3-button w3-group mt-5 w3-third w3-padding w3-dark-grey w3-border-0 w3-hover-teal">Register
          </button>
        </div>            
      
    </form>
    </div>
  </div>
<div id="viewDoctor" class="px200">
  <h4 class="w3-center w3-text-light-grey">DOCTORS LIST</h4>
  <div class="container"> 
    <table class="w3-table-all table-striped w3-hoverable w3-row-padding">
      <tr class=" bg-secondary w3-text-white ">
        <th class="w3-row-padding"><h6>ID</h6></th>
        <th class="w3-row-padding"><h6>EMAIL</h6></th>
        <th class="w3-row-padding"><h6>PASSWORD</h5></th>
        <th class="w3-row-padding"><h6>NAME</h6></th>
        <th class="w3-row-padding"><h6>PROFILE IMAGE</h6></th>
        <th class="w3-row-padding"><h6>CONTACTS</h6></th>
        <th class="w3-row-padding"><h6>ADDRESS</h6></th>
        <th class="w3-row-padding"><h6>DATE OF BIRTH</h6></th>
        <th class="w3-row-padding"><h6>EDUCATION LEVEL</h6></th>
        <th class="w3-row-padding"><h6>FIELD OF EXPERTISE</h6></th>
        <th class="w3-row-padding"><h6>STATUS</h6></th>
        <th class="w3-row-padding"><h6>HOSPITAL</h6></th>
        <th class="w3-row-padding"><h6>ACTION</h6></th>
        <th class="w3-row-padding"><h6></h6></th>
      </tr>
<?php 
		$view="SELECT * FROM dams_doctors";
		$result=$conn->query($view);
		if ($result->num_rows >0) {
			while ($rows=$result->fetch_assoc()) {?>
		
			<tr class="w3-center">
				<td><?php echo $rows['dID']; ?></td>
				<td><?php echo $rows['d_email']; ?></td>
				<td><?php echo $rows['d_password']; ?></td>
				<td><?php echo $rows['d_name']; ?></td>
				<td><?php echo $rows['d_profimage']; ?></td>
				<td><?php echo $rows['d_phoneNo']; ?></td>
				<td><?php echo $rows['d_address']; ?></td>
				<td><?php echo $rows['d_dob']; ?></td>
				<td><?php echo $rows['d_degree']; ?></td>
				<td><?php echo $rows['d_expertIn']; ?></td>
				<td><?php echo $rows['d_status']; ?></td>
				<td><?php echo $rows['d_hospital']; ?></td>        
        <td>
          <a class="btn w3-teal" href="edidel.php?id=<?php echo $rows['dID'] ?>"><i class="icon-edit">Edit</i></a>
            <a class="w3-text-red" href=""><i class="fa fa-trash"></i></a>
        </td>
			</tr>			
				<?php
			}
		}
?></table>
</div>
</div>

<div id="viewPatients" class="px200">
  <h4 class="w3-center w3-text-light-grey">PATIENTS LISTS</h4>
<div class="container"> 
  <table class="w3-table-all table-striped w3-hoverable w3-row-padding">
    <tr class=" bg-secondary w3-text-white ">
      <th class="w3-row-padding"><h6>PATIENT ID</h6></th>
      <th class="w3-row-padding"><h6>EMAIL</h6></th>
      <th class="w3-row-padding"><h6>PASSWORD</h5></th>
      <th class="w3-row-padding"><h6>FIRST NAME</h6></th>
      <th class="w3-row-padding"><h6>LAST NAME</h6></th>
      <th class="w3-row-padding"><h6>DATE OF BIRTH</h6></th>
      <th class="w3-row-padding"><h6>GENDER</h6></th>
      <th class="w3-row-padding"><h6>PHONE NUMBER</h6></th>
      <th class="w3-row-padding"><h6>MARITAL STATUS</h6></th>
      <th class="w3-row-padding"><h6>PHYSICAL ADDRESS</h6></th>
      <th class="w3-row-padding"><h6>ACTION</h6></th>
      <th class="w3-row-padding"><h6></h6></th>
    </tr>
<?php 
    $view="SELECT * FROM dams_patient";
    $result=$conn->query($view);
    if ($result->num_rows >0) {
      while ($rows=$result->fetch_assoc()) {?>
      <tr class="w3-center">
        <td class="w3-row-padding"><?php echo $rows['p_ID']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['email']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['password']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['firstname']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['lastname']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['DOB']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['gender']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['phone']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['marital_status']; ?></td>
        <td class="w3-row-padding"><?php echo $rows['complete_address']; ?></td>      
        <td class="w3-row-padding"><button>Edit</button></td>
        <td class="w3-row-padding"><button>Delete</button></td>
      </tr>
      
        <?php
      }
    }
?>
</table>
</div>
</div>

<div id="schedules" class="px200">
  <h4 class="w3-center w3-text-light-grey">DOCTORS LIST SCHEDULES</h4>
  <div class="container"> 
    <table class="w3-table-all table-striped w3-hoverable w3-row-padding">
      <tr class=" bg-secondary w3-text-white ">
        <th class="w3-row-padding"><h6>SCHEDULE ID</h6></th>
        <th class="w3-row-padding"><h6>DOCTOR ID</h6></th>
        <th class="w3-row-padding"><h6>SCHEDULE DATE</h5></th>
        <th class="w3-row-padding"><h6>SCHEDULE DAY</h6></th>
        <th class="w3-row-padding"><h6>START TIME</h6></th>
        <th class="w3-row-padding"><h6>END TIME</h6></th>
        <th class="w3-row-padding"><h6>LOCATION OF VENUE</h6></th>
        <th class="w3-row-padding"><h6>SCHEDULE STATUS</h6></th>
        <th class="w3-row-padding"><h6>ACTION</h6></th>
        <th class="w3-row-padding"><h6></h6></th>
      </tr>
<?php 
    $view="SELECT * FROM doctors_schedule";
    $result=$conn->query($view);
    if ($result->num_rows >0) {
      while ($rows=$result->fetch_assoc()) {?>
    
      <tr class="w3-center">
        <td><?php echo $rows['scheduleID']; ?></td>
        <td><?php echo $rows['d_ID']; ?></td>
        <td><?php echo $rows['schedule_date']; ?></td>
        <td><?php echo $rows['schedule_day']; ?></td>
        <td><?php echo $rows['start_time']; ?></td>
        <td><?php echo $rows['end_time']; ?></td>
        <td><?php echo $rows['average_consulting_time']; ?></td>
        <td><?php echo $rows['d_schedule_status']; ?></td>     
        <td>
          <a class="btn" href=" edidel.php?id=<?php echo $rows['scheduleID'] ?>">Edit</a>
          <a class="btn" href="">Delete</a>
        </td>
      </tr>     
        <?php
      }
    }
?></table>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $("#btnregistDoctor").click(function () {
      $("#registerDoctor").show();
      $("#viewDoctor").hide(); 
      $("#viewPatients").hide(); 
      $("#schedules").hide();   
  })
    $("#btnviewdoctors").click(function () {
      $("#viewDoctor").show();
      $("$viewPatients").hide();
      $("#registerDoctor").hide(); 
      $("#schedules").hide();     
    })
    $("#btnviewpatients").click(function () {
      $("#viewPatients").show();
      $("#viewDoctor").hide();
      $("#registerDoctor").hide();
      $("#schedules").hide();     
    })
    $("#btnschedule").click(function () {
     $("#schedules").show();
     $("#viewDoctor").hide();
      $("#registerDoctor").hide();
    })
  })  
</script>
</body>
</html>