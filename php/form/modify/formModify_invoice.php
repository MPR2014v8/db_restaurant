<html>

<head>
    <title>form modify invoice</title>
</head>

<body>
<?php
    require('../../connectdb.php');

    $sql = '
        SELECT *
        FROM invoice;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>   
        <th width="100">
            <div align="center">invoice_id</div>
        </th>  
        <th width="100">
            <div align="center">emp_id</div>
        </th>
        <th width="100">
            <div align="center">cus_tel</div>
        </th>
        <th width="100">
            <div align="center">date</div>
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
            <?php echo $objResult["invoice_id"]; ?>
        </td>
        <td>
            <?php echo $objResult["emp_id"]; ?>
        </td>
        <td>
            <?php echo $objResult["cus_tel"]; ?>
        </td>
        <td>
            <?php echo $objResult["date"]; ?>
        </td>
        <td align="center"> 
            <a href="../../manage/delete/deletedata_invoice.php?invoice_id=<?php echo $objResult["invoice_id"]; ?>">Delete</a> 
        </td>
        <td align="center"> 
            <a href="../../form/update/formUpdate_invoice.php?invoice_id=<?php echo $objResult["invoice_id"]; ?> ">Update</a> 
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