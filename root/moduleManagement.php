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
}if(isset($_POST['addQuestion'])){
$add_question = new Module();
$add_question->addQuestions();	
}if(isset($_POST['delete_module'])){
$delete_module = new Module();
$delete_module->deleteModule();	
}
?>

<body>
<div id="wrapper">
  <div id="title_nav">
    <div id="nav"> <a href="teacherWelcome.php">HOME</a> | <a href="index.php?logout">LOGOUT</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
  </div>
  <div id="container">
    <div id="header">
      
    </div>
    <!--close header-->
    <div id="content">
<form action="moduleManagement.php" method="post" style="text-align:left">
      <h1>Module Management<br/>
      </h1>
      <h1>
        
      </h1>
      <p>Insert Module Name:<br/>
        <input name="module_name" type="text" maxlength="300" id="module_name" style="width:300px"/><br/>
        <input name="add_module" type="submit" value="Add Module" style="width:110px"/>
        <input name="delete_module" type="submit" value="Delete Module" style="width:110px"/>
      </p>
      <table width="100%" border="0" cellpadding="10">
        <tr>
          <td style="padding-left:0px" colspan="2"><p>
          Select Module to Update:<br/>
        <select name="module_dropdown" id="module" style="width:300px">
        <option></option>
        <?php
	 		$module_list = new Module();
			$module_list->populateModuleList();
			?>
        </select>
        </p>
          Add Questions</td>
        </tr>
        <tr>
          <td width="100px" style="padding-left:0px">Question #1:</td>
          <td width="100%"><input name="question1" type="text" maxlength="300" style="width:100%" id="question1"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Example Criteria:</td>
          <td><input name="question1_criteria" type="text" maxlength="300" style="width:100%" id="question1"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Question #2:</td>
          <td><input name="question2" type="text" maxlength="300" style="width:100%" id="question2"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px" >Example Criteria:</td>
          <td><input name="question2_criteria" type="text" maxlength="300" style="width:100%" id="question1"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Question #3:</td>
          <td><input name="question3" type="text" maxlength="300" style="width:100%" id="question3"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px" >Example Criteria:</td>
          <td><input name="question3_criteria" type="text" maxlength="300" style="width:100%" id="question1"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Question #4:</td>
          <td><input name="question4" type="text" maxlength="300" style="width:100%" id="question4"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px" >Example Criteria:</td>
          <td><input name="question4_criteria" type="text" maxlength="300" style="width:100%" id="question1"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px" colspan="2"><input name="addQuestion" type="submit" value="Add Questions" style="width:110px" id="addQuestion"/></td>
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
