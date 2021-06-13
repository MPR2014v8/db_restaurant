<html>

<head>
    <title>table: reservetable</title>
</head>

<body>

    <?php
    require('../connectdb.php');

    $sql = '
            SELECT *
            FROM reservetable;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: reservetable</h2>
    <form action="../manage/search/searchdata_reservetable.php" method="GET" name="reservetable">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="table_id">table_id</option>
                        <option value="zone">zone</option>
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
            <th width="100">
                <div align="center">table_id</div>
            </th>
            <th width="100">
                <div align="center">zone</div>
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
                    <?php echo $objResult["table_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["zone"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_reservetable.php?table_id=<?php echo $objResult["table_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../form/update/formUpdate_reservetable.php?table_id=<?php echo $objResult["table_id"] ?>">Update</a></div>
                </td>
            </tr>
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