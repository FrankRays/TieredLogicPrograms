<?php
class RunAssess{
  public function Launch()
		  {
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
		  }
}
	?>
    