<html>

<head>
    <title>table: reservetable</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;

    switch ($k_attribute) {

        case "table_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM reservetable
                WHERE table_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "zone":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM reservetable
                WHERE zone LIKE '%" . $keyword . "%';
            ";
            break;
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
                    <div align="center"><a href="../delete/deletedata_reservetable.php?table_id=<?php echo $objResult["table_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../../form/update/formUpdate_reservetable.php?table_id=<?php echo $objResult["table_id"] ?>">Update</a></div>
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