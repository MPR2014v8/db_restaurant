<html>

<head>
    <title>table: listsale</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;

    switch ($k_attribute) {

        case "listSale_NO":
            $keyword = (int)$_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM listsale
                WHERE listSale_NO LIKE '%" . $keyword . "%';
            ";
            break;

        case "invoice_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM listsale
                WHERE invoice_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "item_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM listsale
                WHERE item_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "number":
            $keyword = (int)$_REQUEST['keyword'];
            $sql = "
                    SELECT * 
                    FROM listsale
                    WHERE number <= '" . $keyword . "';
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
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>

            <tr>
                <td>
                    <div align="center"><?php echo $i; ?></div>
                </td>
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
                    <div align="center"><a href="../delete/deletedata_listsale.php?listSale_NO=<?php echo $objResult["listSale_NO"] ?>">Delete</a></div>
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