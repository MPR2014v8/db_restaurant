<html>

<head>
    <title>table: employee</title>
</head>

<body>
    <?php
    $keyword;
    $k_attribute = $_REQUEST['attribute'];
    $sql;
    
    switch ($k_attribute) {

        case "emp_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM employee
                WHERE emp_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "name":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM employee
                WHERE name LIKE '%" . $keyword . "%';
            ";
            break;

        case "role_id":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM employee
                WHERE role_id LIKE '%" . $keyword . "%';
            ";
            break;

        case "salary":
            $keyword = (float)$_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM employee
                WHERE salary <= '" . $keyword . "';
            ";
            break;

        case "email":
            $keyword = $_REQUEST['keyword'];
            $sql = "
                SELECT * 
                FROM employee
                WHERE email LIKE '%" . $keyword . "%';
            ";
            break;
    }

    require("../../connectdb.php");

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>

    <table border="1">
        <tr>
            <th width="50">
                <div align="center">NO</div>
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
            <th width="50">
                <div align="center">DELETE</div>
            </th>
            <th width="50">
                <div align="center">UPDATE</div>
            </th>
        </tr>

        <?php
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
                    <div align="center"><a href="../delete/deletedata_employee.php?emp_id=<?php echo $objResult["emp_id"] ?>">Delete</a></div>
                </td>
                <td>
                    <div align="center"><a href="../../form/update/formUpdate_employee.php?emp_id=<?php echo $objResult["emp_id"] ?>">Update</a></div>
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