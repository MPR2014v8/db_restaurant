<html>

<head></head>

<body>
    <h2>Form insert data : role</h2>
    <form action="../../manage/insert/insertdata_role.php" method="get" name="role">
        <table boder="1">
            <tr>
                <td style="text-align: right;">role id : </td>
                <td>
                    <input type="text" name="role_id" required>
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