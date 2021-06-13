<html>

<head>
    <title>table: fooditems</title>
</head>

<body>

    <?php
    require('../connectdb.php');

    $sql = '
            SELECT *
            FROM fooditems;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: coupon</h2>
    <form action="../manage/search/searchdata_fooditems.php" method="GET" name="fooditems">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="item_id">item_id</option>
                        <option value="name">name</option>
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
                <div align="center">item_id</div>
            </th>
            <th width="100">
                <div align="center">name</div>
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
                    <?php echo $objResult["item_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["name"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_fooditems.php?item_id=<?php echo $objResult["item_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../form/update/formUpdate_fooditems.php?item_id=<?php echo $objResult["item_id"] ?>">Update</a></div>
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