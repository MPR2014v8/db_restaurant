<html>

<head>
    <title>table: listusingcoupon</title>
</head>

<body>

    <?php
    require('../connectdb.php');
    $sql = '
            SELECT *
            FROM listusingcoupon;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: listusingcoupon</h2>
    <form action="../manage/search/searchdata_listusingcoupon.php" method="GET" name="listusingcoupon">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="listUsingCoupon_NO">listUsingCoupon_NO</option>
                        <option value="invoice_id">invoice_id</option>
                        <option value="cou_id">cou_id</option>
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
            <th width="180">
                <div align="center">listUsingCoupon_NO</div>
            </th>
            <th width="180">
                <div align="center">invoice_id</div>
            </th>
            <th width="100">
                <div align="center">cou_id</div>
            </th>
            <th width="100">
                <div align="center">DELETE</div>
            </th>
        </tr>

        <?php
        //  output ข้อมูลในตาราง
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
            <tr>
                <td>
                    <?php echo $objResult["listUsingCoupon_NO"]; ?>
                </td>
                <td>
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["cou_id"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_listusingcoupon.php?listUsingCoupon_NO=<?php echo $objResult["listUsingCoupon_NO"] ?>">Delete</a></div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

    <?php
    mysqli_close($conn);
    ?>

</body>

</html>