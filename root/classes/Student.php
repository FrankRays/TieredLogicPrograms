<?php
/**
 * Class registration
 * handles the user registration
 */
class Student
{
    /**@var object $db_connection The database connection*/
    private $db_connection = null;
    /**@var array $errors Collection of error messages*/
    public $errors = array();
    /**@var array $messages Collection of success / neutral messages */
    public $messages = array();
	
	public function populateModuleList(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$queryM = "SELECT DISTINCT module.module_name from module";
		$resultM = $this->db_connection->query($queryM);
		while ($rowM = $resultM->fetch_assoc()) {
        		echo "<option value=\"{$rowM['module_name']}\">";
        		echo $rowM['module_name'];
        		echo "</option>";
			}
	}//close populateModuleList
	
	public function populateStudentList(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$module_name = $this->db_connection->real_escape_string($_POST['module_dropdown']);
		$queryS = "SELECT DISTINCT student_fname, student_lname FROM student join assessment_results on student.student_number = assessment_results.student_number join module_question on module_question.question_data = assessment_results.question_data join module on module.module_name = module_question.module_name WHERE module.module_name = '" . $module_name . "';";
		$resultS = $this->db_connection->query($queryS);
		while ($rowS = $resultS->fetch_assoc()) {
        		echo "<option value=\"{$rowS['student_lname']}\">";
        		echo $rowS['student_lname'];
				echo " ";
				echo $rowS['student_fname'];
        		echo "</option>";
			}
	}//close populateModuleList
	
	public function displayModule(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$module_name = $this->db_connection->real_escape_string($_POST['module_dropdown']);
		echo $module_name;
	}
	
	public function displayStudent(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_name = $this->db_connection->real_escape_string($_POST['student_dropdown']);
		echo $student_name;
	}

}//close Student class

?>