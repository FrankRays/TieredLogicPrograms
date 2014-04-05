<?php
class SelectList
{
    protected $conn;
 
        public function __construct()
        {
            $this->DbConnect();
        }
 
        protected function DbConnect()
        {
            include("config/db.php");
            $this->conn = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR die("Unable to connect to the database");
            mysql_select_db(DB_NAME,$this->conn) OR die("can not select the database $db");
            return TRUE;
        }
 
        public function ShowModule()
        {
            $sql = "SELECT DISTINCT module_name from module";
            $res = mysql_query($sql,$this->conn);
            $module = '<option value="0">choose module...</option>';
            while($row = mysql_fetch_array($res))
            {
                $module .= '<option value="' . $row['module_name'] . '">' . $row['module_name'] . '</option>';
            }
            return $module;
        }
 
        public function ShowStudent()
        {
            $sql = "SELECT DISTINCT student.student_fname, student.student_lname FROM student join assessment_results on student.student_number = assessment_results.student_number join module on module.module_name = assessment_results.module_name WHERE module.module_name = '$_POST[id]'";
            $res = mysql_query($sql,$this->conn);
            $student = '<option value="0">choose...</option>';
            while($row = mysql_fetch_array($res))
            {
                $student .= '<option value="' . $row['student_lname'] . '">' . $row['student_lname'] . '</option>';
            }
            return $student;
        }
}
$opt = new SelectList();
?>
    