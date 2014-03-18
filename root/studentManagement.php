<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Management</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
</head>

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
      <h1>Student Management<br/>
        Faculty: Albert Dudley</h1>
      <p>&nbsp; </p>
      <p> Create new student account:
        <input name="CreateStudent" type="button" value="Create Student" style="width:110px"/>
      </p>
      <p>View an existing student account:<br/>
        Student ID:
        <input name="studentid" type="text"  maxlength="8" />
        <input name="ViewStudent" type="button" value="View Student" style="width:110px"/>
      </p>
      <p>
      <table width="500px" border="0" cellpadding="10">
        <tr>
          <td style="padding-left:0px" colspan="2"><strong>Student Information</strong></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Student ID:</td>
          <td><input name="studentid" type="text"  maxlength="8" style="width:350px"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Student Name:</td>
          <td><input name="studentname" type="text" style="width:350px"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Email:</td>
          <td><input name="studentemail" type="text" style="width:350px"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Program:</td>
          <td><input name="programcode" type="text" style="width:350px"/></td>
        </tr>
        <tr>
          <td style="padding-left:0px">Course(s):</td>
          <td><input name="coursecode" type="text" style="width:350px"/></td>
        </tr>
      </table>
      </p>
      <p>
        <input name="ViewStudent" type="button" value="Save Student" style="width:140px"/>
        <input name="ViewStudent" type="button" value="Delete Student" style="width:140px"/>
        <input name="ViewStudent" type="button" value="Grade Management" style="width:140px"/>
      </p>
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
