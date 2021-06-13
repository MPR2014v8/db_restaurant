<?php

require("../../connectdb.php");

$emp_id     = $_REQUEST['emp_id'];
$name       = $_REQUEST['name'];
$role_id    = $_REQUEST['role_id'];
$salary     = $_REQUEST['salary'];
$email      = $_REQUEST['email'];

$sql = "
    UPDATE employee
    SET name = '" . $name . "',
    role_id = '" . $role_id . "',
    salary = '" . $salary . "',
    email = '" . $email . "'
    WHERE emp_id = '" . $emp_id . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $emp_id . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_employee.php">Return form table employee</a>