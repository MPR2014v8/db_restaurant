<html>

<head></head>

<body>
    <h2>Form insert data : list reserve table</h2>
    <form action="../../manage/insert/insertdata_listreservetable.php" method="post" name="listreservetable">
        <table boder="1">
            <tr>
                <td style="text-align: right;">listReserveTable_NO : </td>
                <td>
                    <input type="int" name="listReserveTable_NO">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">invoice_id : </td>

                <td>
                <?php
                    require('../../connectdb.php');
                    $sql = '
                        SELECT invoice_id
                        FROM invoice;
                    ';
                    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                    <select name="invoice_id">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["invoice_id"];?> >
                                <?php echo $objResult["invoice_id"];?>
                            </option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>  
            <tr>
                <td style="text-align: right;">table_id : </td>

                <td>
                <?php
                    require('../../connectdb.php');
                    $sql = '
                        SELECT table_id
                        FROM reservetable;
                    ';
                    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                    <select name="table_id">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["table_id"];?> >
                                <?php echo $objResult["table_id"];?>
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