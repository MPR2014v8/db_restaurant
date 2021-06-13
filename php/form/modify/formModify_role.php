<html>

<head>
    <title>form modify role</title>
</head>

<body>
    
<?php
    require('../../connectdb.php');

    $sql = '
        SELECT *
        FROM role;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>   
        <th width="50">
            <div align="center">role_id</div>
        </th>  
        <th width="50">
            <div align="center">name</div>
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
            <?php echo $objResult["role_id"]; ?>
        </td>
        <td>
            <?php echo $objResult["name"]; ?>
        </td>
        <td align="center"> 
            <a href="../../manage/delete/deletedata_role.php?role_id=<?php echo $objResult["role_id"]; ?> ">Delete</a> 
        </td>
        <td align="center"> 
            <a href="../../form/update/formUpdate_role.php?role_id=<?php echo $objResult["role_id"]; ?> ">Update</a> 
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