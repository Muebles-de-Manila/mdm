<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<title>Manila de Muebles Account Sign-in/Sign-Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
  <a href="registration.php" style="float: right" ;>Register</a>
  <a href="login.php" style="float: right" ;>Login</a>
 
</div>
	 <div id="frm">
	 	<form action="process.php" method="POST">
	 		<p>
	 			<label>Username:</label>
	 			<input type="text" id="user" name="user" />
	 		</p>
	 		<p>
	 			<label>Password:</label>
	 			<input type="password" id="pass" name="pass" />
	 		</p>
	 		<p>
	 			<input type="submit" id="btn" name="Login" />
	 		</p>
	 		
	 	</form>
	 	
	 </div>

<div class="footer">
  <p>Contact us at +639 286 359 925 and our customer service team is available on weekdays from 8:00 AM to 5:00 PM!</p>
  <p>or</p>
  <p>You can fill out the form, email us at @MueblesdeManila.ph , or visit us on Facebook or Instagram:@MueblesdeManila.</p>
</div>

</body>
</html>