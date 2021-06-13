<html>

<head>
    <title>table: customer</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;

    if ($k_attribute == "cus_tel") {
        $keyword = (int)$_REQUEST['keyword'];
        $sql = "
                SELECT * 
                FROM customer
                WHERE cus_tel LIKE '%" . $keyword . "%';
            ";
    } else {
        $keyword = $_REQUEST['keyword'];
        $sql = "
                SELECT * 
                FROM customer
                WHERE name LIKE '%" . $keyword . "%';
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
                <div align="center">cus_tel</div>
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
                    <?php echo $objResult["cus_tel"]; ?>
                </td>
                <td>
                    <?php echo $objResult["name"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../delete/deletedata_customer.php?cus_tel=<?php echo $objResult["cus_tel"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../../form/update/formUpdate_customer.php?cus_tel=<?php echo $objResult["cus_tel"] ?>">Update</a></div>
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