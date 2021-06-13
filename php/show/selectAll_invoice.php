<html>

<head>
    <title>table: invoice</title>
</head>

<body>

    <?php
    require('../connectdb.php');
    $sql = '
            SELECT *
            FROM invoice;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: coupon</h2>
    <form action="../manage/search/searchdata_invoice.php" method="GET" name="invoice">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="invoice_id">invoice_id</option>
                        <option value="emp_id">emp_id</option>
                        <option value="cus_tel">cus_tel</option>
                        <option value="date">date</option>
                    </select>
                </td>
                <td><input type="text" name="keyword"></td>
            </tr>
        </table>
        <br>
        <input type="reset" value="reset">
        <input type="submit" value="search">
    </form>
    <br>

    <table border="1">
        <?php
        //  แสดงกราฟฟิกตาราง
        ?>
        <tr>
            <th width="50">
                <div align="center">No.</div>
            </th>
            <th width="150">
                <div align="center">invoice_id</div>
            </th>
            <th width="100">
                <div align="center">emp_id</div>
            </th>
            <th width="100">
                <div align="center">cus_tel</div>
            </th>
            <th width="150">
                <div align="center">date</div>
            </th>
            <th width="100">
                <div align="center">DELETE</div>
            </th>
            <th width="100">
                <div align="center">UPDATE</div>
            </th>
        </tr>

        <?php
        //  output ข้อมูลในตาราง
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
            <tr>
                <td>
                    <div align="center"><?php echo $i; ?></div>
                </td>
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
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_invoice.php?invoice_id=<?php echo $objResult["invoice_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../form/update/formUpdate_invoice.php?invoice_id=<?php echo $objResult["invoice_id"] ?>">Update</a></div>
                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>

    <?php
    mysqli_close($conn);
    ?>

</body>

</html>