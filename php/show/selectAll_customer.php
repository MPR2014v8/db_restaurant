<html>

<head>
    <title>customer</title>
</head>

<body>

    <?php
    require('../connectdb.php');

    $sql = '
            SELECT *
            FROM customer;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>


    <h2>Table: coupon</h2>
    <form action="../manage/search/searchdata_customer.php" method="GET" name="customer">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                <select name="attribute">
                    <option value="cus_tel">cus_tel</option>
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
                <div align="center">cus_tel</div>
            </th>
            <th width="100">
                <div align="center">name</div>
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
                    <?php echo $objResult["cus_tel"]; ?>
                </td>
                <td>
                    <?php echo $objResult["name"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_customer.php?cus_tel=<?php echo $objResult["cus_tel"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../form/update/formUpdate_customer.php?cus_tel=<?php echo $objResult["cus_tel"] ?>">Update</a></div>
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