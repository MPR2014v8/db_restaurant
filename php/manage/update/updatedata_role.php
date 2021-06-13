<?php

require("../../connectdb.php");

$role_id     = $_REQUEST['role_id'];
$name       = $_REQUEST['name'];

$sql = "
    UPDATE role
    SET name = '" . $name . "'
    WHERE role_id = '" . $role_id . "';
";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record " . $role_id . " was Updated.";
} else {
	echo "Error : Update";
}

mysqli_close($conn);

?>
<br>
<a href="../../show/selectAll_role.php">Return form table role</a>