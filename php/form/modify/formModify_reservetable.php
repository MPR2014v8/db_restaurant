<html>

<head>
    <title>form delete reservetable</title>
</head>

<body>
    
<?php
    require('../../connectdb.php');

    $sql = '
        SELECT *
        FROM reservetable;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>   
        <th width="50">
            <div align="center">table_id</div>
        </th>  
        <th width="50">
            <div align="center">zone</div>
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
            <?php echo $objResult["table_id"]; ?>
        </td>
        <td>
            <?php echo $objResult["zone"]; ?>
        </td>
        <td align="center"> 
            <a href="../../manage/delete/deletedata_reservetable.php?table_id=<?php echo $objResult["table_id"]; ?> ">Delete</a> 
        </td>
        <td align="center"> 
            <a href="../../form/update/formUpdate_reservetable.php?table_id=<?php echo $objResult["table_id"]; ?> ">Update</a> 
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