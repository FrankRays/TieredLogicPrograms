<?php
/**
 * Class registration
 * handles the user registration
 */
class Module
{
    /**@var object $db_connection The database connection*/
    private $db_connection = null;
    /**@var array $errors Collection of error messages*/
    public $errors = array();
    /**@var array $messages Collection of success / neutral messages */
    public $messages = array();

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    public function addNewModule()
    {
        if (empty($_POST['module_name'])) {
            $this->errors[] = "Empty Module Name";
        } elseif (!empty($_POST['module_name'])
            && strlen($_POST['module_name']) <= 100
            && strlen($_POST['module_name']) >= 2) 
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
				$module_name = $this->db_connection->real_escape_string($_POST['module_name']);
                $sql = "SELECT * FROM module WHERE module_name = '" . $module_name . "';";
                $query_check_module_name = $this->db_connection->query($sql);

                if ($query_check_module_name->num_rows == 1) {
?>			
				<script type="text/javascript">
    			alert("Sorry, that module name already exists.");
                </script>										
<?php					
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO module (module_name)
                            VALUES('" . $module_name . "');";
                    $query_new_module_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_module_insert) {
                        $this->messages[] = "New module has been created.";
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
	
	public function addQuestions()
    {
        if (empty($_POST['question1']) && empty($_POST['question2']) && empty($_POST['question2']) && empty($_POST['question3'])) {
            $this->errors[] = "No question has been entered";
        } elseif (!empty($_POST['question1'])) 
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
				$question1 = $_POST['question1'];
				$question2 = $_POST['question2'];
				$question3 = $_POST['question3'];
				$question4 = $_POST['question4'];
				$module_name = $this->db_connection->real_escape_string($_POST['module_dropdown']);
                $sql = "SELECT module_name FROM module WHERE module_name = '" . $module_name . "';";
                $query_module_name_set = $this->db_connection->query($sql);

                if ($query_module_name_set->num_rows == 0) {
?>			
				<script type="text/javascript">
    			alert("Module does not exist");
                </script>										
<?php					
                } else {
                    if (!empty($_POST['question1'])){
						$question1_criteria = $_POST['question1_criteria'];
                    	$sql = "INSERT INTO module_question (question_data, module_name)
                            	VALUES('" . $question1 . "', '" . $module_name . "');";
						$query_question_insert = $this->db_connection->query($sql);
						if (!empty($_POST['question1_criteria'])){
							$sql = "INSERT INTO question_subitem (question_data, subitem_data)
								VALUES('" . $question1 . "', '" . $question1_criteria . "');";
							$query_criteria_insert = $this->db_connection->query($sql);
						}
					}
					if (!empty($_POST['question2'])){
						$question2_criteria = $_POST['question2_criteria'];
                    	$sql = "INSERT INTO module_question (question_data, module_name)
                            	VALUES('" . $question2 . "', '" . $module_name . "');";
						$query_question_insert = $this->db_connection->query($sql);
						if (!empty($_POST['question2_criteria'])){
							$sql = "INSERT INTO question_subitem (question_data, subitem_data)
								VALUES('" . $question2 . "', '" . $question2_criteria . "');";
							$query_criteria_insert = $this->db_connection->query($sql);
						}
					}
					if (!empty($_POST['question3'])){
						$question3_criteria = $_POST['question3_criteria'];
                    	$sql = "INSERT INTO module_question (question_data, module_name)
                            	VALUES('" . $question3 . "', '" . $module_name . "');";
						$query_question_insert = $this->db_connection->query($sql);
						if (!empty($_POST['question3_criteria'])){
							$sql = "INSERT INTO question_subitem (question_data, subitem_data)
								VALUES('" . $question3 . "', '" . $question3_criteria . "');";
							$query_criteria_insert = $this->db_connection->query($sql);
						}
					}
					if (!empty($_POST['question4'])){
						$question4_criteria = $_POST['question4_criteria'];
                    	$sql = "INSERT INTO module_question (question_data, module_name)
                            	VALUES('" . $question4 . "', '" . $module_name . "');";
						$query_question_insert = $this->db_connection->query($sql);
						if (!empty($_POST['question4_criteria'])){
							$sql = "INSERT INTO question_subitem (question_data, subitem_data)
								VALUES('" . $question4 . "', '" . $question4_criteria . "');";
							$query_criteria_insert = $this->db_connection->query($sql);
						}
					}
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }//close addQuestion()
	
	public function populateModuleList(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$queryS = "SELECT module_name FROM module ORDER BY module_name";
		$resultS = $this->db_connection->query($queryS);
		while ($rowS = $resultS->fetch_assoc()) {
        		echo "<option value=\"{$rowS['module_name']}\">";
        		echo $rowS['module_name'];
        		echo "</option>";
			}
	}//close populateModuleList
	
	public function deleteModule(){
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$module_name = $this->db_connection->real_escape_string($_POST['module_name']);
		$queryS = "DELETE FROM module WHERE module_name = '" . $module_name . "';";
		$resultS = $this->db_connection->query($queryS);
	}//close deleteModule
	
}//close Module class
?>