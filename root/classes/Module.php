<?php

/**
 * Class registration
 * handles the user registration
 */
class Module
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();
	

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

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
	
	
	public function setModule()
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
				$module_set_name = $this->db_connection->real_escape_string($_POST['module_name']);
                $sql = "SELECT module_id FROM modules WHERE module_context = '" . $module_set_name . "';";
                $module_set_id = $this->db_connection->query($sql);
				//$result = mysql_query($sql);

                if ($module_set_id->num_rows == 1) {
					
                }
            } 
        }
    }//close setModule()
	
	public function addQuestions()
    {
        if (empty($_POST['question1']) && empty($_POST['question2']) && empty($_POST['question2']) && empty($_POST['question3'])) {
            $this->errors[] = "No question has been entered";
        } elseif (!empty($_POST['question1'])
            && strlen($_POST['module_name']) <= 300
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
				$new_question1 = $_POST['question1'];
				$module_set_name = $this->db_connection->real_escape_string($_POST['module_name']);
                $sql = "SELECT module_id FROM modules WHERE module_context = '" . $module_set_name . "';";
                $module_set_id = $this->db_connection->query($sql);
				$module_set_id = int($module_set_id);

                if ($module_set_id->num_rows == 0) {
?>			
				<script type="text/javascript">
    			alert("Module does not exist");
                </script>										
<?php					
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO themodule_t3mce (module_id, item_context)
                            VALUES(" . $module_set_id . ", '" . $new_question1 . "');";
                    $query_new_question_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_question_insert) {
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
    }//close addQuestion()
	
	
	
}//close Module class
