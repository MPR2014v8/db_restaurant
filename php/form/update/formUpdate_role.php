<html>

<head>
<title>form update role</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['role_id'];
    $sql = "
        SELECT *
        FROM role
        WHERE role_id = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: role</h2>

<form action="../../manage/update/updatedata_role.php" method="post" name="role">
    <table border="1">
        <?php
            $objResult = mysqli_fetch_array($objQuery);
        ?>
        <?php
            /*  */
        ?>
        <tr>
            <th width="50">
                <div align="center">role_id</div>
            </th>
            <th width="100">
                <div align="center">name</div>
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $objResult["role_id"]; ?> 
            </td>
            <td>
                <?php echo $objResult["name"]; ?>
            </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td width="50">
                <div align="right">role_id:</div>
            </td>
            <td>
                <input type="text" name="role_id" value="<?php echo $objResult["role_id"]; ?>" readonly>
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
    </table>
    <input type="reset" value="Reset">
    <input type="submit" value="Update Data">
</form>

<?php
    mysqli_close($conn);
?>
</body>

</html>