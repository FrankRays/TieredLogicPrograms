<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Run Assessment</title>
<link href="css/projectsite_master.css" rel="stylesheet" type="text/css" />
</head>
<?php 
require_once("classes/RunAssess.php");
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
                $("#result").html("Module: " + mod + "<br />" + " Student: " + stu);
            }
            return false;
        });
		
    });
    </script>

<body>
<div id="wrapper">
  <div id="title_nav">
    <div id="nav"> <a href="teacherWelcome.php">HOME</a> | <a href="index.php?logout">LOGOUT</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
  </div>
  <div id="container">
    <div id="header"></div>
    
    <form action="runAssessment.php" method="post" id="select_form"  >
&nbsp;&nbsp;&nbsp;MODULE: 
	<select id="module" style="width:120px;">
            <?php echo $opt->ShowModule(); ?>
        </select>
STUDENT:
	<select id="student">
             <option value="0">choose student...</option>
        </select>
        <input type="submit" name="confirm_button" value="Confirm Selection" />
        
    
    <!--close header-->
    <div id="content">
      <h1>Run Assessment</h1><br/>
      <div id="result"></div>
      
    <label name="tests">
    <?php
	$connection=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	  $result=mysqli_prepare($connection,"SELECT question_data FROM module_question WHERE module_name='Resisted Remedial Exercises'");
	  mysqli_stmt_execute($result);
	  mysqli_stmt_bind_result($result,$name);
	  while(mysqli_stmt_fetch($result)){
	  $tests[]=array('question_data'=>$name);
	  }
	  mysqli_stmt_close($result);
	  
	  foreach($tests as $test){
	  $options=$test['question_data'];
	  echo "<br/><label name='tests'>".$options."</label><br/>";
	  echo "<input type='button' name='question' value='Inadequate'/>";
	  echo "<input type='button' name='question' value='Poor'/>";
	  echo "<input type='button' name='question' value='Average'/>";
	  echo "<input type='button' name='question' value='Good'/>";
	  echo "<input type='button' name='question' value='Excellent'/><br/>";
	  }
	  echo "<p></p><label type'text' name'label1'>Comments:</label><br/>";
	  echo "<textarea cols='45' rows='5'></textarea>";
      ?>
    </label>
    </form>
  </div><!--close content-->
</div>  <!--close container-->
  
<div id="footer">
    <div id="footer_nav"> <a href="teacherWelcome.php">HOME</a> | <a href="#">ABOUT US</a> | <a href="#">CONTACT</a> </div>
    <!--close footer_nav-->
    <div id="footer_text">&#169;Tiered Logic Programs/Algonquin College 2014</div>
  </div>
  <!-- close footer--><!-- close wrapper-->
</body>
</html>
