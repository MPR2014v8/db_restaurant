<html>

<head></head>

<body>
    <h2>Form insert data : employee</h2>
    <form action="../../manage/insert/insertdata_employee.php" method="post" name="employee">
        <table boder="1">
            <tr>
                <td style="text-align: right;">employee id : </td>
                <td>
                    <input type="text" name="emp_id" required>
                </td>
            </tr>  
            <tr>
                <td style="text-align: right;">name : </td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">role_id : </td>

                <?php
                    require('../../connectdb.php');
                    $sql = '
                        SELECT role_id
                        FROM role;
                    ';
                    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>

                <td>
                    <select name="role_id">
                    <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                    ?>
                            <option value=<?php echo $objResult["role_id"];?>>
                                <?php echo $objResult["role_id"];?>
                            </option>
                    <?php
                        }
                    ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">salary : </td>
                <td>
                    <input type="text" name="salary">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">email : </td>
                <td>
                    <input type="email" name="email" required>
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