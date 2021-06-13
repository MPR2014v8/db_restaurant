<html>

<head>
    <title>table: listsale</title>
</head>

<body>

    <?php
    require('../connectdb.php');
    $sql = '
            SELECT *
            FROM listsale;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: listrsale</h2>
    <form action="../manage/search/searchdata_listrsale.php" method="GET" name="listrsale">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="listSale_NO">listSale_NO</option>
                        <option value="invoice_id ">invoice_id </option>
                        <option value="item_id">item_id</option>
                        <option value="number">number <= </option>
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
            <th width="100">
                <div align="center">listSale_NO</div>
            </th>
            <th width="100">
                <div align="center">invoice_id</div>
            </th>
            <th width="100">
                <div align="center">item_id</div>
            </th>
            <th width="100">
                <div align="center">number</div>
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
                    <?php echo $objResult["listSale_NO"]; ?>
                </td>
                <td>
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["item_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["number"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_listsale.php?listSale_NO=<?php echo $objResult["listSale_NO"] ?>">Delete</a></div>
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