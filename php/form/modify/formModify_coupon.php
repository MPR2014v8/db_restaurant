<html>

<head>
    <title>form modify coupon</title>
</head>

<body>
    
<?php
    require('../../connectdb.php');

    $sql = '
        SELECT *
        FROM coupon;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">No</div>
        </th>   
        <th width="50">
            <div align="center">cou_id</div>
        </th>  
        <th width="50">
            <div align="center">discount</div>
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
            <?php echo $objResult["cou_id"]; ?>
        </td>
        <td>
            <?php echo $objResult["discount"]; ?>
        </td>
        <td align="center"> 
            <a href="../../manage/delete/deletedata_coupon.php?cou_id=<?php echo $objResult["cou_id"]; ?> ">Delete</a> 
        </td>
        <td align="center"> 
            <a href="../update/formUpdate_coupon.php?cou_id=<?php echo $objResult["cou_id"]; ?> ">Update</a> 
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