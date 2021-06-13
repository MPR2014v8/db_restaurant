<html>

<head>
    <title>form delete list using coupon</title>
</head>

<body>
<?php
    require("../../connectdb.php");

    $sql = '
        SELECT *
        FROM listusingcoupon;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">listUsingCoupon_NO</div>
        </th>  
        <th width="50">
            <div align="center">invoice_id</div>
        </th>   
        <th width="50">
            <div align="center">cou_id</div>
        </th>
    </tr>

    <?php
        while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
            <tr>
                <td>
                    <?php echo $objResult["listUsingCoupon_NO"]; ?>
                </td>
                <td>
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["cou_id"]; ?>
                </td>
                <td align="center"> 
                    <a href="../../manage/delete/deletedata_listusingcoupon.php?listUsingCoupon_NO=<?php echo $objResult["listUsingCoupon_NO"]; ?> 
                            ">Delete</a> 
                </td>
            </tr>
    <?php
        }
    ?>
</table>

<?php
    mysqli_close($conn);
?>
</body>

</html>