<html>

<head>
    <title>form delete customer</title>
</head>

<body>
    
<?php
    require('../../connectdb.php');

    $sql = '
        SELECT *
        FROM customer;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>   
        <th width="50">
            <div align="center">cus_tel</div>
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
            <?php echo $objResult["cus_tel"]; ?>
        </td>
        <td>
            <?php echo $objResult["name"]; ?>
        </td>
        <td align="center"> 
            <a href="../../manage/delete/deletedata_customer.php?cus_tel=<?php echo $objResult["cus_tel"]; ?> ">Delete</a> 
        </td>
        <td align="center"> 
            <a href="../update/formUpdate_customer.php?cus_tel=<?php echo $objResult["cus_tel"]; ?> ">Update</a> 
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