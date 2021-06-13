<html>

<head>
<title>form update employee</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['emp_id'];
    $sql = "
        SELECT *
        FROM employee
        WHERE emp_id = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: employee</h2>

<form action="../../manage/update/updatedata_employee.php" method="post" name="employee">
    <table border="1">
        <?php
            $objResult = mysqli_fetch_array($objQuery);
        ?>
        <tr>
            <th width="50">
                <div align="center">emp_id</div>
            </th>
            <th width="50">
                <div align="center">name</div>
            </th>
            <th width="50">
                <div align="center">role_id</div>
            </th>
            <th width="50">
                <div align="center">salary</div>
            </th>
            <th width="50">
                <div align="center">email</div>
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $objResult["emp_id"]; ?>
            </td>
            <td>
                <?php echo $objResult["name"]; ?>
            </td>
            <td>
                <?php echo $objResult["role_id"]; ?>
            </td>
            <td>
                <?php echo $objResult["salary"]; ?>
            </td>
            <td>
                <?php echo $objResult["email"]; ?>
            </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td width="50">
                <div align="right">emp_id:</div>
            </td>
            <td>
                <input type="text" name="emp_id" value="<?php echo $objResult["emp_id"]; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td width="50">
                <div align="right">name:</div>
            </td>
            <td>
                <input type="text" name="name" value="<?php echo $objResult["name"]; ?>">
            </td>
        </tr>

        <tr>
            <td width="50">
                <div align="right">role_id:</div>
            </td>
            <?php
                $sql = '
                    SELECT role_id 
                    FROM role;
                ';
                $objQueryRole = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
            ?>
            <td>
                <select name="role_id">
                    <?php
                    while ($objResultRole = mysqli_fetch_array($objQueryRole)) {
                    ?>
                        <option value=<?php echo $objResultRole["role_id"]; ?>><?php echo $objResultRole["role_id"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td width="50">
                <div align="right">salary:</div>
            </td>
            <td>
                <input type="float" name="salary" value="<?php echo $objResult["salary"]; ?>">
            </td>
        </tr>

        <tr>
            <td width="50">
                <div align="right">email:</div>
            </td>
            <td>
                <input type="email" name="email" value="<?php echo $objResult["email"]; ?>">
            </td>
        </tr>
    </table>
    <input type="reset" value="Reset">
    <input type="submit" value="Update Data">
</form>

<?php
    mysqli_close($conn);
?>
</body>

</html>