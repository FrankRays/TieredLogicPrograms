<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Welcome Page</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
</head>

<?php 
require_once("config/db.php");
require_once("classes/Student.php");
?>
<body>
<div id="wrapper">

<div id="title_nav">
<div id="nav">
<a href="teacherWelcome.php">HOME</a> | 
<a href="index.php?logout">LOGOUT</a> | 
<a href="#">ABOUT US</a> | 
<a href="#">CONTACT</a>
</div>
</div>

<div id="container">

<div id="header">
<form action="" method="POST" style="text-align:right">
MODULE: 
	<select name="module_dropdown" style="width:120px;">
	<option>Select Module...</option>
	<?php
	 	$module_list = new Student();
		$module_list->populateModuleList();
	?>
	</select>
    <button name="sModule" input type ="submit" >Submit Module</button>
STUDENT:
	<select name="student_dropdown">
	<option>Select student...</option>
	<?php
	 	if (isset($_POST['sModule'])){
		$student_list = new Student();
		$student_list->populateStudentList();
		}
	?>
</select>
<button name="sStudent" input type ="submit" >Submit Student</button>
</form>
</div><!--close header-->
<div id="content">
<h1>Student Info Page</h1>


<p>Module: <?php 
if (isset($_POST['sModule'])){
$moduledisplay = new Student();
$moduleshown = $moduledisplay->displayModule();
}

?>
<br/>

  Student: <?php 
if (isset($_POST['sStudent'])){
$studentdisplay = new Student();
$studentdisplay->displayStudent();
}
?><br />
  </p>
<p>Demonstrates standard hygiene practices (ie: washes hands, etc.)<br />
<img src="images/graph1.jpg" alt="graph1" />
</p>
<p>Maintain grooming, dress and hygiene appropriate to the practice setting (ie: uniform, shoes, nametag, etc.)<br />
<img src="images/graph2.jpg" alt="graph2" />
</p>
<p>Apply standard precautions for infection control (ie: washing table, faceplate, clean sheets, etc.)<br />
<img src="images/graph3.jpg" alt="graph3" />
</p>

<strong>Comments:</strong> Good work. You are progessing nicely. Don't forget to wear your nametag at all times, and be sure to wash down the table after every use!
  <p>Please select another course or module from the drop down menu above, or use the buttons below to view more results.</p>
<p><input name="Next Module" type="button" value="<< Previous Module" />
<input name="Next Module" type="button" value="Next Module >>" /></p>
</div>

</div> <!--close container-->

<div id="footer">
<div id="footer_nav">
<a href="teacherWelcome.php">HOME</a> | 
<a href="#">ABOUT US</a> | 
<a href="#">CONTACT</a>
</div><!--close footer_nav-->
<div id="footer_text">&#169;Tiered Logic Programs/Algonquin College 2014</div>
</div><!-- close footer-->

</div><!-- close wrapper-->
</body>
</html>
