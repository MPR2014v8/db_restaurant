<?php

$delete_ID  = $_REQUEST['role_id'];

require('../../connectdb.php');

$sql = "
    DELETE FROM role
    WHERE role_id Like '" . $delete_ID . "';
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
<a href="../../show/selectAll_role.php">Return form table role</a>
