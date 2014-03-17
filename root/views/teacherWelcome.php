

<style type="text/css">
body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}
.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading, .form-signin .checkbox {
	margin-bottom: 10px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
</style>
<script type="text/javascript">
<!--
function redirectModuleManagement() {
	window.location = "moduleManagement.php"
}
function redirectStudentManagement() {
	window.location = "studentManagement.php"
}
function redirectRunAssessment() {
	window.location = "runAssessment.php"
}
function redirectStudentWelcome() {
	window.location = "studentWelcome.php"
}
//-->
</script>

      <form class="form-signin" action"teacherWelcome.php">
      <h3>Welcome back, John Doe</h3>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectModuleManagement()" value="Module Management" />
      <p></p>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectStudentManagement()" value="Student Management">
      <p></p>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectRunAssessment()" value="Run Assessment">
      <p></p>
      <input type="button" class="btn btn-large btn-primary" onclick="redirectStudentWelcome()" value="Student Welcome">
      </form>
