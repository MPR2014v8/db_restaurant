<html>

<head></head>

<body>
    <h2>Form insert data : reserve table</h2>
    <form action="../../manage/insert/insertdata_reservetable.php" method="post" name="reservetable">
        <table boder="1">
            <tr>
                <td style="text-align: right;">table id : </td>
                <td>
                    <input type="text" name="table_id" required>
                </td>
            </tr>  
            <tr>
                <td style="text-align: right;">zone : </td>
                <td>
                    <input type="text" name="zone" required>
                </td>
            </tr>
        </table>

        <br>
        <input type="reset" value="Reset">
        <input type="submit" value="Insert Data">
    </form>
</body>

</html>