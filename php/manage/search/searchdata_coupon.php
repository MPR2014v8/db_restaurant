<html>

<head>
    <title>table: coupon</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;

    if ($k_attribute == "discount") {
        $keyword = (float)$_REQUEST['keyword'];
        $sql = "
                SELECT * 
                FROM coupon
                WHERE discount LIKE '%" . $keyword . "%';
            ";
    } else {
        $keyword = $_REQUEST['keyword'];
        $sql = "
                SELECT * 
                FROM coupon
                WHERE cou_id LIKE '%" . $keyword . "%';
            ";
    }

    require("../../connectdb.php");

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>

    <table border="1">
        <tr>
            <th width="50">
                <div align="center">NO</div>
            </th>
            <th width="100">
                <div align="center">cou_id</div>
            </th>
            <th width="100">
                <div align="center">discount</div>
            </th>
            <th width="50">
                <div align="center">DELETE</div>
            </th>
            <th width="50">
                <div align="center">UPDATE</div>
            </th>
        </tr>

        <?php
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
                    <?php echo $objResult["discount"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../delete/deletedata_coupon.php?cou_id=<?php echo $objResult["cou_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../../form/update/formUpdate_coupon.php?cou_id=<?php echo $objResult["cou_id"] ?>">Update</a></div>
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