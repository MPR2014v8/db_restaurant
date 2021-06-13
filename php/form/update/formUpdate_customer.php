<html>

<head>
<title>form update customer</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['cus_tel'];
    $sql = "
        SELECT *
        FROM customer
        WHERE cus_tel = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: customer</h2>

<form action="../../manage/update/updatedata_customer.php" method="post" name="customer">
    <table border="1">
        <tr>
            <th width="50">
                <div align="center">cus_tel</div>
            </th>
            <th width="50">
                <div align="center">name</div>
            </th>
            <th width="50">
                <div align="center">update name</div>
            </th>
        </tr>
        <tr>
            <td>
                <input type="text" name="cus_tel" value=<?php echo $update_ID; ?> readonly>
            </td>

            <?php
                $objResult = mysqli_fetch_array($objQuery);
            ?>
            <td>
                <?php echo $objResult["name"]; ?>
            </td>
            <td>
                <input type="text" name="name">
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