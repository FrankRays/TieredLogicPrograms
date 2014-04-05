<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information Page</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
</head>

<?php 
include("classes/Student.php");
?>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("select#student").attr("disabled","disabled");
            $("select#module").change(function(){
            $("select#student").attr("disabled","disabled");
            $("select#student").html("<option>wait...</option>");
            var id = $("select#module option:selected").attr('value');
            $.post("select_student.php", {id:id}, function(data){
                $("select#student").removeAttr("disabled");
                $("select#student").html(data);
            });
        });
        $("form#select_form").submit(function(){
            var mod = $("select#module option:selected").attr('value');
            var stu = $("select#student option:selected").attr('value');
            if(mod>0 && stu>0)
            {
                var result = $("select#student option:selected").html();
                $("#result").html('your choice: '+result);
            }
            else
            {
                $("#result").html("module: " + mod + "<br />" + " Student: " + stu);
            }
            return false;
        });
		
    });
    </script>
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
<form action="" method="POST" style="text-align:right" id="select_form">
MODULE: 
	<select id="module" style="width:120px;">
            <?php echo $opt->ShowModule(); ?>
        </select>
STUDENT:
	<select id="student">
             <option value="0">choose student...</option>
        </select>
        <input type="submit" value="confirm" />
</form>
</div><!--close header-->

<div id="content">
<h1>Student Information Page</h1>
<div id="result"></div>
  </p>
<div id="chart"></div>
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
