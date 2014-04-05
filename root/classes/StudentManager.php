<?php
/**
 * Class registration
 * handles the user registration
 */
class StudentManager
{
    /**@var object $db_connection The database connection*/
    private $db_connection = null;
    /**@var array $errors Collection of error messages*/
    public $errors = array();
    /**@var array $messages Collection of success / neutral messages */
    public $messages = array();
	
	public function addStudent()
		{
			if (empty($_POST['student_number'])) {
				$this->errors[] = "Student number cannot be empty";
			} elseif (!empty($_POST['student_number'])) 
			{
				// create a database connection
				$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
				// change character set to utf8 and check it
				if (!$this->db_connection->set_charset("utf8")) {
					$this->errors[] = $this->db_connection->error;
				}
	
				// if no connection errors (= working database connection)
				if (!$this->db_connection->connect_errno) {
	
					// check if user or email address already exists
					$student_id = $this->db_connection->real_escape_string($_POST['student_number']);
					$student_number = intval($student_id);
					$first_name = $this->db_connection->real_escape_string($_POST['first_name']);
					$last_name = $this->db_connection->real_escape_string($_POST['last_name']);
					$student_email = $this->db_connection->real_escape_string($_POST['student_email']);
					
					$sql = "SELECT * FROM student WHERE student_number = " . $student_number . ";";
					$query_check_student_number = $this->db_connection->query($sql);
	
					if ($query_check_student_number->num_rows == 1) {
	?>			
					<script type="text/javascript">
					alert("Sorry, that student already exists.");
					</script>										
	<?php					
					} else {
						// write new user's data into database
						$sql = "INSERT INTO student (student_number, student_fname, student_lname, student_email)
								VALUES(" . $student_number . ", '" . $first_name . "', '" . $last_name . "', '" . $student_email . "');";
						$query_new_student_insert = $this->db_connection->query($sql);
	
						// if user has been added successfully
						if ($query_new_student_insert) {
							$this->messages[] = "New student has been created.";
						} else {
							$this->errors[] = "Sorry, your registration failed. Please go back and try again.";
						}
					}
				} else {
					$this->errors[] = "Sorry, no database connection.";
				}
			} else {
				$this->errors[] = "An unknown error occurred.";
			}
	}//close addNewModule()
	
	public function viewStudentNum(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_id = $this->db_connection->real_escape_string($_POST['student_id']);
		$student_number = intval($student_id);
		$queryS = "SELECT student_number FROM student WHERE student_number=".$student_number.";";
		$resultS = $this->db_connection->query($queryS);
		while($row = mysqli_fetch_array($resultS)){
		echo $row['student_number'];
		}
	}
	
	public function viewFirstName(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_id = $this->db_connection->real_escape_string($_POST['student_id']);
		$student_number = intval($student_id);
		$queryS = "SELECT student_fname FROM student WHERE student_number=".$student_number.";";
		$resultS = $this->db_connection->query($queryS);
		while($row = mysqli_fetch_array($resultS)){
		echo $row['student_fname'];
		}
	}
	
	public function viewLastName(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_id = $this->db_connection->real_escape_string($_POST['student_id']);
		$student_number = intval($student_id);
		$queryS = "SELECT student_lname FROM student WHERE student_number=".$student_number.";";
		$resultS = $this->db_connection->query($queryS);
		while($row = mysqli_fetch_array($resultS)){
		echo $row['student_lname'];
		}
	}
	
	public function viewEmail(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_id = $this->db_connection->real_escape_string($_POST['student_id']);
		$student_number = intval($student_id);
		$queryS = "SELECT student_email FROM student WHERE student_number=".$student_number.";";
		$resultS = $this->db_connection->query($queryS);
		while($row = mysqli_fetch_array($resultS)){
		echo $row['student_email'];
		}
	}
		
	public function deleteStudent(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_id = $this->db_connection->real_escape_string($_POST['student_number']);
		$student_number = intval($student_id);
		$queryS = "DELETE FROM student WHERE student_number = " . $student_number . ";";
		$resultS = $this->db_connection->query($queryS);
	}//close deleteModule
	
	public function updateStudent(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$student_id = $this->db_connection->real_escape_string($_POST['student_number']);
		$student_number = intval($student_id);
		$first_name = $this->db_connection->real_escape_string($_POST['first_name']);
		$last_name = $this->db_connection->real_escape_string($_POST['last_name']);
		$student_email = $this->db_connection->real_escape_string($_POST['student_email']);
		$queryS = "UPDATE student SET student_fname='".$first_name."', student_lname='".$last_name."', student_email='".$student_email."' WHERE student_number=".$student_number.";";
		$resultS = $this->db_connection->query($queryS);
	}//close deleteModule
}
?>