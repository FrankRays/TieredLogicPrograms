<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Management</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
</head>

<?php 
require_once("config/db.php");
require_once("classes/StudentManager.php");

if(isset($_POST['add_student'])){
$add_student = new StudentManager();
$add_student->addStudent();
}if(isset($_POST['update_student'])){
$update_student = new StudentManager();
$update_student->updateStudent();	
}if(isset($_POST['delete_student'])){
$delete_student = new StudentManager();
$delete_student->deleteStudent();	
}
?>

<body>
<div id="wrapper">
  <div id="title_nav">
    <div id="nav"> <a href="teacherWelcome.php">HOME</a> | <a href="index.php?logout">LOGOUT</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
  </div>
  <div id="container">
    <div id="header"></div><!--close header-->
      
    <div id="content">
    <form action="studentManagement.php" method="post" style="text-align:left">
      <h1>Student Management</h1>
      <p>&nbsp; </p>
      
      <p>Enter an existing student account:<br/>
        Student Number:
        <input name="student_id" type="text"  maxlength="9" />
        <input name="view_student" type="submit" value="View Student" style="width:110px"/>
      
      <table width="100%" border="0" cellpadding="10">
        <tr>
          <td style="padding-left:0px" colspan="2">
          Student Information</td>
        </tr>
        <tr>
          <td width="100px" style="padding-left:0px">Student Number:</td>
          <td width="100%"><input name="student_number" type="text" maxlength="300" style="width:100%" id="student_number" 
          value="<?php if(isset($_POST['view_student'])){
				$view_student = new StudentManager();
				$view_student->viewStudentNum();} ?>"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">First Name:</td>
          <td><input name="first_name" type="text" maxlength="300" style="width:100%" id="question1" 
          value="<?php if(isset($_POST['view_student'])){
				$view_student = new StudentManager();
				$view_student->viewFirstName();} ?>"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Last Name:</td>
          <td><input name="last_name" type="text" maxlength="300" style="width:100%" id="question2"
          value="<?php if(isset($_POST['view_student'])){
				$view_student = new StudentManager();
				$view_student->viewLastName();} ?>"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px" >Student Email:</td>
          <td><input name="student_email" type="text" maxlength="300" style="width:100%" id="question1"
          value="<?php if(isset($_POST['view_student'])){
				$view_student = new StudentManager();
				$view_student->viewEmail();} ?>"/></td>
        </tr>
        
      </table>
      </p>
      <p>
        <input name="add_student" type="submit" value="Add Student" style="width:110px"/>
        <input name="update_student" type="submit" value="Update Student" style="width:110px"/>
        <input name="delete_student" type="submit" value="Delete Student" style="width:110px"/>
      </p>
       </form>
    </div>
  </div>
  <!--close container-->
  
  <div id="footer">
    <div id="footer_nav"> <a href="teacherWelcome.php">HOME</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
    <!--close footer_nav-->
    <div id="footer_text">&#169;Tiered Logic Programs/Algonquin College 2014</div>
  </div>
  <!-- close footer--> 
  
</div>
<!-- close wrapper-->
</body>
</html>
