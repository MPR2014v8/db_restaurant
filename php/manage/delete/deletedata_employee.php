<?php

$delete_ID  = $_REQUEST['emp_id'];

require("../../connectdb.php");

$sql = "
    DELETE FROM employee
    WHERE emp_id = '" . $delete_ID . "';
";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "Record " . $delete_ID . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn);
?>
<br>
<a href="../../show/selectAll_employee.php">Return form table employee</a>
