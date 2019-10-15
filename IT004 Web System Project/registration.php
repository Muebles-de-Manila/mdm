<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
* {
  box-sizing: border-box;
 
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

body {
  margin: 0;
background-image: url("Graybg.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	font-family: Arial, Helvetica, sans-serif;
	}


/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  display:block;
}


/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a{
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}



.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown:hover .dropbtn {
  background-color:#ddd;
  color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Add padding to containers */
.container {
  padding: 15px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 15px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}



/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}


/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}

.nav-link, .navbar-brand {   
	color: #50fcf5;   
	cursor: pointer;
} 

.navbar-collapse {   
	justify-content: flex-end; 
}

.mySlides {display:none;
margin-left: auto;
margin-right: auto;
}




</style>
</head>
<body>

<div class="header">

  <a href ="HOF.html" ><img src="c8c33c49-df64-4002-8507-3e1fcca69dda_200x200.png" style="vertical-align: middle;"  width="200" height="175"></a>
<span style="vertical-align: middle; font-weight:bold; font-size:32px;">Muebles de Manila</span> 
</div>



	<div class="topnav">
	<div class="dropdown">
<button class="dropbtn">Products</button>
    <div class="dropdown-content">
      <a href="Cabinets.html">Cabinets</a>
      <a href="Chairs.html">Chairs</a>
      <a href="Tables.html">Tables</a>
    </div>
	</div>
  <a href="About Us.html">About Us</a>
  <a href="Warranty.html">Warranty</a>
  <a href="FAQs.html">FAQs</a>
  <a href="Return_Exchange.html">Return & Exchange</a>
  
</div>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div>
	    <?php

	    ?>
	</div>

<div>
	<form action="registration.php" method="POST">
		<div class ="container">

			<div class="row">
				<div class="col-sm-3">
				<h1>Manila Muebles </h1>
				<p>Fill up the form with correct values</p>
				<hr class="mb-3">
				<label for= "firstname"><b>First Name</b></label>
				<input class="form-control" id="firstname" type="text" name="firstname" required>
				
				<label for= "laststname"><b>Last Name</b></label>
				<input class="form-control" id="lastname" type="text" name="lastname" required>

				<label for= "email"><b>Email Address</b></label>
				<input class="form-control" id="email" type="email" name="email" required>

				<label for= "phonenumber"><b>Phone Number</b></label>
				<input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

				<label for= "password"><b>Password</b></label>
				<input class="form-control" id="password" type="password" name="password" required>
				<hr class="mb-3">
				<input class="btn btn-secondary" type="submit" id="register" name="create" value="Sign Up">
			    </div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();
			if(valid){

			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password = $('#password').val();

				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname, lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success:function(data){
				Swal.fire({
				'title': 'Successful',
				'text': data,
				'type': 'success'
			})
					},
					error: function(data){
				Swal.fire({
				'title': 'Error Registring',
				'text': 'Error while saving data',
				'type': 'error'
			     })
					}
				});
				
			}else{
				
			}
			
		});
		
	});

</script>
</body>
</html>