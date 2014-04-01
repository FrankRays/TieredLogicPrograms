<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Module Management</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
</head>

<?php 
require_once("config/db.php");
require_once("classes/Module.php");

if(isset($_POST['add_module'])){
$add_module = new Module();
$add_module->addNewModule();
}
if(isset($_POST['set_module'])){
$set_module = new Module();
$set_module->setModule();
}if(isset($_POST['addQuestion'])){
$add_question = new Module();
$add_question->addQuestions();	
}

?>

<body>
<div id="wrapper">
  <div id="title_nav">
    <div id="nav"> <a href="teacherWelcome.php">HOME</a> | <a href="index.php?logout">LOGOUT</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
  </div>
  <div id="container">
    <div id="header">
      <form action="" method="get" style="text-align:right">
        COURSE:
        <select name="course" id="course">
          <option>select one...</option>
          <option>Massage Clinic</option>
          <option>Course 2</option>
        </select>
        MODULE:
        <select name="module" id="module">
          <option>select one...</option>
          <option>Module 1</option>
          <option>Module 2</option>
          <option>Module 3</option>
        </select>
        STUDENT:
        <select name="student" id="student">
          <option>select one...</option>
          <option>Student Alpha</option>
          <option>Student Beta</option>
        </select>
      </form>
    </div>
    <!--close header-->
    <div id="content">
<form action="moduleManagement.php" method="post" style="text-align:left">
      <h1>Module Management<br/>
      </h1>
      <h1>
        <input name="CreateStudent" type="button" value="Create New" style="width:110px"/>
        <input name="CreateStudent2" type="button" value="Read" style="width:110px"/>
        <input name="CreateStudent3" type="button" value="Update" style="width:110px"/>
        <input name="CreateStudent4" type="button" value="Delete" style="width:110px"/>
      </h1>
      <p>What would you like your module/quiz to be named?<br/>
        Module Name:
        <input name="module_name" type="text" maxlength="300" id="module_name" style="width:300px"/><br/>
        <input name="set_module" type="submit" value="Set Current" style="width:110px"/>
        <input name="add_module" type="submit" value="Add New" style="width:110px"/>
        
      </p>
      <table width="500px" border="0" cellpadding="10">
        <tr>
          <td style="padding-left:0px" colspan="2"><strong>Questions</strong></td>
        </tr>
        <tr>
          <td style="padding-left:0px">#1:</td>
          <td><input name="question1" type="text" maxlength="300" style="width:350px" id="question1"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">#2:</td>
          <td><input name="question2" type="text" maxlength="300" style="width:350px" id="question2"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">#3:</td>
          <td><input name="question3" type="text" maxlength="300" style="width:350px" id="question3"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">#4:</td>
          <td><input name="question4" type="text" maxlength="300" style="width:350px" id="question4"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">&nbsp;</td>
          <td><input name="addQuestion" type="submit" value="Add Questions" style="width:110px" id="addQuestion"/></td>
        </tr>
      </table>
      <p>&nbsp;</p>
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
