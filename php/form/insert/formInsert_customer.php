<html>

<head></head>

<body>
    <h2>Form insert data : customer</h2>
    <form action="../../manage/insert/insertdata_customer.php" method="post" name="customer">
        <table boder="1">
            <tr>
                <td style="text-align: right;">Phone number : </td>
                <td>
                    <input type="text" name="cus_tel" required>
                </td>
            </tr>  
            <tr>
                <td style="text-align: right;">name : </td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
        </table>

        <br>
        <input type="reset" value="Reset">
        <input type="submit" value="Insert Data">
    </form>
</body>

</html>