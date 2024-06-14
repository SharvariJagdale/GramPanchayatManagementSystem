<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Delete Admin</title>

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="style.css">

<style>
body {
  background-color: #c7c5f0;
  font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
button {
  background-color: #643b9f;
  font-size: 20px;
  color: white;
  padding: 14px 20px;

  margin: 2px 0;
  border: none;
  cursor: pointer;

  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #c7c5f0;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="main" style="background-color: #c7c5f0;">

<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="4.jpg" alt="sing up image"></figure>
<a href="register.html" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">
<h2 class="form-title" style="color: #643b9f">ॲडमिन डिलीट करा</h2>
<form method="POST" action="deleteback.php" class="register-form" id="login-form">
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="name" id="your_name" placeholder="तुमचे नाव" style="color: #643b9f"/>
</div>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="pass" id="your_pass" placeholder="पासवर्ड" style="color: #643b9f"/>
</div>
<div class="form-group">
  <label for="admin_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="adminpass" id="admin_pass" placeholder="ॲडमिन पासवर्ड" style="color: #643b9f" />
</div>
<div class="form-group form-button">
  <button type="button" class="btn btn-light btn-lg" value="Go back!" onclick="history.back()"style="background-color:#ebe7f2; font-family:'Times New Roman';color:#643b9f; padding: 10px 30px;font-size: 18px;margin-left:20px;margin-top: 10%;border: none;border-radius: 5px;margin:10px 20px">मागे जा</button>
<button type="submit"  >डिलीट</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>
</div>

  
</body>
</html>