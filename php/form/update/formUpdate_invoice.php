<html>

<head>
<title>form update invoice</title>
</head>

<body>
<?php
    
    require("../../connectdb.php");

    $update_ID  = $_REQUEST['invoice_id'];
    $sql = "
        SELECT *
        FROM invoice
        WHERE invoice_id = '" . $update_ID . "';
    ";
        
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

?>

<h2>UPDATE DATA: invoice</h2>

<form action="../../manage/update/updatedata_invoice.php" method="post" name="invoice">
    <table border="1">
        <?php
            $objResult = mysqli_fetch_array($objQuery);
        ?>
        <?php
            /*  */
        ?>
        <tr>
            <th width="100">
                <div align="center">invoice_id</div>
            </th>
            <th width="100">
                <div align="center">emp_id</div>
            </th>
            <th width="100">
                <div align="center">cus_tel</div>
            </th>
            <th width="100">
                <div align="center">date</div>
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $objResult["invoice_id"]; ?> 
            </td>
            <td>
                <?php echo $objResult["emp_id"]; ?>
            </td>
            <td>
                <?php echo $objResult["cus_tel"]; ?>
            </td>
            <td>
                <?php echo $objResult["date"]; ?>
            </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td width="50">
                <div align="right">invoice_id:</div>
            </td>
            <td>
                <input type="text" name="invoice_id" value="<?php echo $objResult["invoice_id"]; ?>" readonly>
            </td>
        </tr>

        <tr>
            <td width="50">
                <div align="right">emp_id:</div>
            </td>
            <?php
                $sqlemp = '
                    SELECT emp_id 
                    FROM employee;
                ';
                $objQueryEmp = mysqli_query($conn, $sqlemp) or die("Error Query [" . $sqlemp . "]");
            ?>
            <td>
                <select name="emp_id">
                    <?php
                        while ($objResultEmp = mysqli_fetch_array($objQueryEmp)) {
                    ?>
                            <option value=<?php echo $objResultEmp["emp_id"]; ?>><?php echo $objResultEmp["emp_id"]; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td width="50">
                <div align="right">cus_tel:</div>
            </td>
            <?php
                $sqlcus = '
                    SELECT cus_tel 
                    FROM customer;
                ';
                $objQueryCus = mysqli_query($conn, $sqlcus) or die("Error Query [" . $sqlcus . "]");
            ?>
            <td>
                <select name="cus_tel">
                    <?php
                        while ($objResultCus = mysqli_fetch_array($objQueryCus)) {
                    ?>
                            <option value=<?php echo $objResultCus["cus_tel"]; ?>><?php echo $objResultCus["cus_tel"]; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td width="50">
                <div align="right">date:</div>
            </td>
            <td>
                <input type="date" name="date">
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