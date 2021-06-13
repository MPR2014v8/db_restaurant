<html>

<head>
    <title>table: employee</title>
</head>

<body>

    <?php
    require("../connectdb.php");

    $sql = '
            SELECT *
            FROM employee;
        ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql1 . "]");
    ?>

    <h2>Table: employee</h2>
    <form action="../manage/search/searchdata_employee.php" method="GET" name="employee">
        <table border="1">
            <tr>
                <td>Search : </td>
                <td>
                    <select name="attribute">
                        <option value="emp_id">emp_id</option>
                        <option value="name">name</option>
                        <option value="role_id">role_id</option>
                        <option value="salary">salary <= </option>
                        <option value="email">email</option>
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
                <div align="center">emp_id</div>
            </th>
            <th width="100">
                <div align="center">name</div>
            </th>
            <th width="100">
                <div align="center">role_id</div>
            </th>
            <th width="100">
                <div align="center">salary</div>
            </th>
            <th width="100">
                <div align="center">email</div>
            </th>
            <th width="100">
                <div align="center">DELETE</div>
            </th>
            <th width="100">
                <div align="center">UPDATE</div>
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
                    <?php echo $objResult["emp_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["name"]; ?>
                </td>
                <td>
                    <?php echo $objResult["role_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["salary"]; ?>
                </td>
                <td>
                    <?php echo $objResult["email"]; ?>
                </td>
                <td>
                    <div align="center"><a href="../manage/delete/deletedata_employee.php?emp_id=<?php echo $objResult["emp_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../form/update/formUpdate_employee.php?emp_id=<?php echo $objResult["emp_id"] ?>">Update</a></div>
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