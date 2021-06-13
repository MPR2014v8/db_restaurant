<html>

<head>
<title>form update fooditems</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['item_id'];
    $sql = "
        SELECT *
        FROM fooditems
        WHERE item_id = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: fooditems</h2>

<form action="../../manage/update/updatedata_fooditems.php" method="post" name="fooditems">
    <table border="1">
        <?php
            $objResult = mysqli_fetch_array($objQuery);
        ?>
        <tr>
            <th width="50">
                <div align="center">item_id</div>
            </th>
            <th width="50">
                <div align="center">name</div>
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $objResult["item_id"]; ?>
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
                <div align="right">item_id:</div>
            </td>
            <td>
                <input type="text" name="item_id" value="<?php echo $objResult["item_id"]; ?>" readonly>
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