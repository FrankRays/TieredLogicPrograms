<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teacher Welcome Page</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}
.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading, .form-signin .checkbox {
	margin-bottom: 10px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
</style>
<script type="text/javascript">
<!--
function redirectModuleManagement() {
	window.location = "moduleManagement.php"
}
function redirectStudentManagement() {
	window.location = "studentManagement.php"
}
function redirectRunAssessment() {
	window.location = "runAssessment.php"
}
function redirectStudentWelcome() {
	window.location = "studentWelcome.php"
}
//-->
</script>
</head>

<body>
<div id="wrapper">
  <div id="title_nav">
    <div id="nav"> <a href="teacherWelcome.html">HOME</a> | <a href="index.php?logout">LOGOUT</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
  </div>
  <div id="container">
    <div id="header"> </div>
    <!--close header-->
    <div id="content">
      <p></p>
      <form class="form-signin">
      <h3>Welcome back, John Doe</h3>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectModuleManagement()" value="Module Management" />
      <p></p>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectStudentManagement()" value="Student Management">
      <p></p>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectRunAssessment()" value="Run Assessment">
      <p></p>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectStudentWelcome()" value="Student Information">
      </form>
    </div>
  </div>
  <!--close container-->
  
  <div id="footer">
    <div id="footer_nav"> <a href="teacherWelcome.html">HOME</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
    <!--close footer_nav-->
    <div id="footer_text">&#169;Tiered Logic Programs/Algonquin College 2014</div>
  </div>
  <!-- close footer--> 
  
</div>
<!-- close wrapper-->
</body>
</html>
