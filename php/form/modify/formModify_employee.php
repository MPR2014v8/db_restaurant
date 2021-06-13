<html>

<head>
    <title>form modify employee</title>
</head>

<body>
    
<?php
    require('../../connectdb.php');

    $sql = '
        SELECT *
        FROM employee;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>   
        <th width="50">
            <div align="center">emp_id</div>
        </th>  
        <th width="50">
            <div align="center">name</div>
        </th>
        <th width="50">
            <div align="center">role_id</div>
        </th>  
        <th width="50">
            <div align="center">salary</div>
        </th>  
        <th width="50">
            <div align="center">email</div>
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
        <td align="center"> 
            <a href="../../manage/delete/deletedata_employee.php?emp_id=<?php echo $objResult["emp_id"]; ?> ">Delete</a> 
        </td>
        <td align="center"> 
            <a href="../update/formUpdate_employee.php?emp_id=<?php echo $objResult["emp_id"]; ?> ">Update</a> 
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