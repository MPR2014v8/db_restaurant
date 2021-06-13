<html>

<head></head>

<body>
    <h2>Form insert data : coupon</h2>
    <form action="../../manage/insert/insertdata_coupon.php" method="post" name="coupon">
        <table boder="1">
            <tr>
                <td style="text-align: right;">coupon id : </td>
                <td>
                    <input type="text" name="cou_id" required>
                </td>
            </tr>  
            <tr>
                <td style="text-align: right;">discount : </td>
                <td>
                    <input type="float" name="discount" required>
                </td>
            </tr>
        </table>

        <br>
        <input type="reset" value="Reset">
        <input type="submit" value="Insert Data">
    </form>
</body>

</html>