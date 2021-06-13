<html>

<head>
    <title>form delete listsale</title>
</head>

<body>
<?php
    require("../../connectdb.php");

    $sql = '
        SELECT *
        FROM listsale;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">listSale_NO</div>
        </th>  
        <th width="50">
            <div align="center">invoice_id</div>
        </th>  
        <th width="50">
            <div align="center">item_id</div>
        </th>
        <th width="50">
            <div align="center">number</div>
        </th>  
    </tr>

    <?php
        while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
            <tr>
                <td>
                    <?php echo $objResult["listSale_NO"]; ?>
                </td>
                <td>
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["item_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["number"]; ?>
                </td>
                <td align="center"> 
                    <a href="../../manage/delete/deletedata_listsale.php?listSale_NO=<?php echo $objResult["listSale_NO"]; ?>" >Delete</a> 
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