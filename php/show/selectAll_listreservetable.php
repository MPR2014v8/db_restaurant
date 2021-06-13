<html>

<head>
    <title>table: listreservetable</title>
</head>

<body>

    <?php
    require('../connectdb.php');
    $sql = '
            SELECT *
            FROM listreservetable;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: listreservetable</h2>
    <form action="../manage/search/searchdata_listreservetable.php" method="GET" name="listreservetable">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="listReserveTable_NO">listReserveTable_NO</option>
                        <option value="invoice_id">invoice_id</option>
                        <option value="table_id">table_id</option>
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
            <th width="200">
                <div align="center">listReserveTable_NO</div>
            </th>
            <th width="100">
                <div align="center">invoice_id</div>
            </th>
            <th width="100">
                <div align="center">table_id</div>
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
                    <?php echo $objResult["listReserveTable_NO"]; ?>
                </td>
                <td>
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["table_id"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_listreservetable.php?listReserveTable_NO=<?php echo $objResult["listReserveTable_NO"] ?>">Delete</a></div>
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