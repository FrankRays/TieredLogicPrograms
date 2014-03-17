<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Run Assessment</title>
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
      <h1>Run an Assessment<br/>
        Faculty: Albert Dudley </h1>
      <p>Current student: Student Alpha<br/>
        Course: TERM III MASSAGE CLINIC EVALUATION MODULE(1): SAFETY<br />
        Module: Demonstrate Draping, Pillowing &amp; Positioning(3.1f,g) <br />
      </p>
      <p>1. Demonstrates standard hygiene practices (ie: washes hands, etc.)<br />
        <br />
        <input name="Next Module" type="button" value="Inadequate" style="width:90px"/>
        <input name="Next Module" type="button" value="Poor" style="width:90px"/>
        <input name="Next Module" type="button" value="Satisfactory" style="width:90px"/>
        <input name="Next Module" type="button" value="Good" style="width:90px"/>
        <input name="Next Module" type="button" value="Excellent" style="width:90px"/>
      </p>
      <br />
      <p>2. Maintain grooming, dress and hygiene appropriate to the practice setting (ie: uniform, shoes, nametag, etc.)<br />
        <br />
        <input name="Next Module" type="button" value="Inadequate" style="width:90px"/>
        <input name="Next Module" type="button" value="Poor" style="width:90px"/>
        <input name="Next Module" type="button" value="Satisfactory" style="width:90px"/>
        <input name="Next Module" type="button" value="Good" style="width:90px"/>
        <input name="Next Module" type="button" value="Excellent" style="width:90px"/>
      </p>
      <br />
      <p>3. Apply standard precautions for infection control (ie: washing table, faceplate, clean sheets, etc.)<br />
        <br />
        <input name="Next Module" type="button" value="Inadequate" style="width:90px"/>
        <input name="Next Module" type="button" value="Poor" style="width:90px"/>
        <input name="Next Module" type="button" value="Satisfactory" style="width:90px"/>
        <input name="Next Module" type="button" value="Good" style="width:90px"/>
        <input name="Next Module" type="button" value="Excellent" style="width:90px"/>
      </p>
      <br />
      <p><strong>Comments:<br />
        <textarea name="comment" id="comment" cols="45" rows="5" style="width:750px"></textarea>
        </strong>
        <input name="Next Module" type="button" value="Save Evaluation" />
      </p>
      <br />
      <p>Please select another course or module from the drop down menu above, or use the buttons below to view more results.</p>
      <p>
        <input name="Next Module" type="button" value="<< Previous Module" />
        <input name="Next Module" type="button" value="Next Module >>" />
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
