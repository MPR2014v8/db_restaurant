<html>

<head></head>

<body>
    <h2>Form insert data : invoice</h2>
    <form action="../../manage/insert/insertdata_invoice.php" method="post" name="invoice">
        <table boder="1">
            <tr>
                <td style="text-align: right;">date : </td>
                <td>
                    <input type="date" name="date" required>
                </td>
            </tr> 
            <tr>
                <td style="text-align: right;">invoice id : </td>
                <td>
                    <input type="text" name="invoice_id" required>
                </td>
            </tr>  
            <tr>
                <td style="text-align: right;">employee id : </td>

                <td>
                    <?php
                        require('../../connectdb.php');
                        $sql = '
                            SELECT emp_id
                            FROM employee;
                        ';
                        $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                    ?>
                </td>
                <td>
                    <select name="emp_id" style="position: relative; left: -169;">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["emp_id"];?> >
                                <?php echo $objResult["emp_id"];?>
                            </option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">customer tel : </td>

                <td>
                    <?php
                        require('../../connectdb.php');
                        $sql = '
                            SELECT cus_tel
                            FROM customer;
                        ';
                        $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                    ?>
                </td>
                <td>
                    <select name="cus_tel" style="position: relative; left: -169;">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["cus_tel"];?> >
                                <?php echo $objResult["cus_tel"];?>
                            </option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>  
        </table>

        <br>
        <input type="reset" value="Reset">
        <input type="submit" value="Insert Data">
    </form>

    <?php
        mysqli_close($conn);
    ?>
</body>

</html>