<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../Designing/h_styling.css">
    <link rel="stylesheet" type="text/css" href="../Designing/w3.css">
    <link rel="stylesheet" type="text/css" href="../Designing/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="../scripts/js.js" type="text/javascript"></script>
  <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <!-- From line 22 to 27 Designing Header-->
    <h1 class="w3-container sm6 w3-top w3-teal w3-text-white w3-text-green header1 w3-center">
        <a href="">
            <img class="avatar w3-left" src="../images/avatar3.png">
        </a>
        Doctor Appointment Management System (DAMS)
        <img class="avatar w3-hover-sepia w3-right w3-circle" src="../images/avatar3.png">
    </h1>
<div class="registform container w3-card">
    <h3 class="w3-center">PATIENTS REGISTRATION FORM</h3>   
    <hr>
    <form action="regActform.php" method="POST" onsubmit="formValidation();"  >
      <div class="w3-row w3-row-padding">
        <div class="w3-half l4">
          <label class="font">Your Email:</label>
          <input class="w3-input w3-hover-border-green" type="email" required name="email">
        </div>
        <div class="w3-half l4">
          <label class="font">Your Password:</label>
          <input class="w3-input w3-hover-border-green" type="password" required name="password">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">First Name:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="fName">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Last Name:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="lName">
        </div>        
      </div>
      <div class="w3-row mt-4 w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Date Of Birth:</label>
          <input class="w3-input w3-hover-border-green" type="date" required name="dBirth">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Gender:
          <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select></label>
        </div>       
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-half w3-left-bar l4">
          <label class="font">Your Phone Number:</label>
          <input class="w3-input w3-hover-border-green" type="tel" required name="pHone">
        </div>
        <div class="w3-half w3-left-bar l4">
          <label class="font">Marital Status:
            <select name="marital">
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="separated">Separated</option>
              <option value="divorced">Divorced</option>
              <option value="widowed">Widowed</option>
            </select>
          </label>
        </div>       
      </div>
      <div class="w3-row">
        <div class="font ">Physical Address:</div>
         <div class="w3-col w3-container">
          <textarea name="address" cols="70" rows="4" class="mt-3">            
          </textarea>
         </div>
        </div>       
      <div class="w3-section">
        <button type="submit" name="submit" class="btn ml-5 mb-5 btn-lg btnreg btn-secondary w3-button w3-dark-grey">Register</button>
      </div>
    </form>
    </div> 
    <br>    
  <div class="back w3-button ">
    <a href="index.php">&laquo Back</a>
  </div>

  <script>
    
  </script>
</body>
</html>
