<html>

<head>
    <title>table: coupon</title>
</head>

<body>

    <?php
    require("../connectdb.php");
    $sql = '
            SELECT *
            FROM coupon;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>

    <h2>Table: coupon</h2>
    <form action="../manage/search/searchdata_coupon.php" method="GET" name="coupon">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="cou_id">cou_id</option>
                        <option value="discount">discount</option>
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
                <div align="center">cou_id</div>
            </th>
            <th width="100">
                <div align="center">discount</div>
            </th>
            <th width="100">
                <div align="center">DELETE</div>
            </th>
            <th width="100">
                <div align="center">MODIFY</div>
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
                    <?php echo $objResult["cou_id"]; ?>
                </td>
                <td>
                    <div align="right"> <?php echo $objResult["discount"]; ?> </div>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_coupon.php?cou_id=<?php echo $objResult["cou_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../form/update/formUpdate_coupon.php?cou_id=<?php echo $objResult["cou_id"] ?>">Update</a></div>
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