<html>

<head></head>

<body>
    <h2>Form insert data : list using coupon</h2>
    <form action="../../manage/insert/insertdata_listusingcoupon.php" method="post" name="listusingcoupon">
        <table boder="1">
            <tr>
                <td style="text-align: right;">listUsingCoupon NO : </td>
                <td>
                    <input type="int" name="listUsingCoupon_NO" required>
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
                <td style="text-align: right;">cou_id : </td>

                <td>
                <?php
                    require('../../connectdb.php');
                    $sql = '
                        SELECT cou_id
                        FROM coupon;
                    ';
                    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                    <select name="cou_id">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["cou_id"];?> >
                                <?php echo $objResult["cou_id"];?>
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
</body>

</html>