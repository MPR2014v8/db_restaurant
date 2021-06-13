<html>

<head>
    <title>table: listreservetable</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;

    switch ($k_attribute) {

        case "listReserveTable_NO":
            $keyword = (int)$_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM listreservetable
                WHERE listReserveTable_NO LIKE '%" . $keyword . "%';
            ";
            break;

        case "invoice_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM listreservetable
                WHERE invoice_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "table_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM listreservetable
                WHERE table_id LIKE '%" . $keyword . "%';
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
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>

            <tr>
                <td>
                    <div align="center"><?php echo $i; ?></div>
                </td>
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
                    <div align="center"><a href="../delete/deletedata_listreservetable.php?listReserveTable_NO=<?php echo $objResult["listReserveTable_NO"] ?>">Delete</a></div>
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