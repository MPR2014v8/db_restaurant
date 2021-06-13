<html>

<head></head>

<body>
    <h2>Form insert data : listsale</h2>
    <form action="../../manage/insert/insertdata_listsale.php" method="post" name="listsale">
        <table boder="1">
            <tr>
                <td style="text-align: right;">listSale NO : </td>
                <td>
                    <input type="int" name="listSale_NO">
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
                <td style="text-align: right;">item_id : </td>

                <td>
                <?php
                    require('../../connectdb.php');
                    $sql = '
                        SELECT item_id
                        FROM fooditems;
                    ';
                    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                    <select name="item_id">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["item_id"];?> >
                                <?php echo $objResult["item_id"];?>
                            </option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">number : </td>
                <td>
                    <input type="int" name="number">
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