<html>

<head>
<title>form update coupon</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['cou_id'];
    $sql = "
        SELECT *
        FROM coupon
        WHERE cou_id = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: Coupon</h2>

<form action="../../manage/update/updatedata_coupon.php" method="post" name="coupon">
    <table border="1">
        <tr>
            <th width="50">
                <div align="center">cou_id</div>
            </th>
            <th width="50">
                <div align="center">discount</div>
            </th>
            <th width="50">
                <div align="center">update discount</div>
            </th>
        </tr>
        <tr>
            <td>
                <input type="text" name="cou_id" value=<?php echo $update_ID; ?> readonly>
            </td>

            <?php
                $objResult = mysqli_fetch_array($objQuery);
            ?>
            <td>
                <?php echo $objResult["discount"]; ?>
            </td>
            <td>
                <input type="float" name="discount">
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