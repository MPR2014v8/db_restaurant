<html>

<head>
    <title>table: invoice</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;

    switch ($k_attribute) {

        case "invoice_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM invoice
                WHERE invoice_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "emp_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM invoice
                WHERE emp_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "cus_tel":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM invoice
                WHERE cus_tel LIKE '%" . $keyword . "%';
            ";
            break;

        case "date":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM invoice
                WHERE date = '" . $keyword . "';
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
                <div align="center">invoice_id</div>
            </th>
            <th width="100">
                <div align="center">emp_id</div>
            </th>
            <th width="100">
                <div align="center">cus_tel</div>
            </th>
            <th width="100">
                <div align="center">date</div>
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
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["emp_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["cus_tel"]; ?>
                </td>
                <td>
                    <?php echo $objResult["date"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../delete/deletedata_invoice.php?invoice_id=<?php echo $objResult["invoice_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../../form/update/formUpdate_invoice.php?invoice_id=<?php echo $objResult["invoice_id"] ?>">Update</a></div>
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