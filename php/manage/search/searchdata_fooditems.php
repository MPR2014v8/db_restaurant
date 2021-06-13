<html>

<head>
    <title>table: employee</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;
    
    switch ($k_attribute) {

        case "item_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM fooditems
                WHERE item_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "name":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM fooditems
                WHERE name LIKE '%" . $keyword . "%';
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
                <div align="center">item_id</div>
            </th>
            <th width="100">
                <div align="center">name</div>
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
                    <?php echo $objResult["item_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["name"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../delete/deletedata_fooditems.php?item_id=<?php echo $objResult["item_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../../form/update/formUpdate_fooditems.php?item_id=<?php echo $objResult["item_id"] ?>">Update</a></div>
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