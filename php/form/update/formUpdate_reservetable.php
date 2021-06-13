<html>

<head>
<title>form update reservetable</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['table_id'];
    $sql = "
        SELECT *
        FROM reservetable
        WHERE table_id = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: reserver table</h2>

<form action="../../manage/update/updatedata_reservetable.php" method="post" name="reservertable">
    <table border="1">
        <?php
            $objResult = mysqli_fetch_array($objQuery);
        ?>
        <?php
            /*  */
        ?>
        <tr>
            <th width="50">
                <div align="center">table_id</div>
            </th>
            <th width="50">
                <div align="center">zone</div>
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $objResult["table_id"]; ?> 
            </td>
            <td>
                <?php echo $objResult["zone"]; ?>
            </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td width="50">
                <div align="right">table_id:</div>
            </td>
            <td>
                <input type="text" name="table_id" value="<?php echo $objResult["table_id"]; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td width="50">
                <div align="right">zone:</div>
            </td>
            <td>
                <input type="text" name="zone" value="<?php echo $objResult["zone"]; ?>">
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