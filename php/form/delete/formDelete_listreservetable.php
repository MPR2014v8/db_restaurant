<html>

<head>
    <title>form delete list reserve table</title>
</head>

<body>
<?php
    require("../../connectdb.php");

    $sql = '
        SELECT *
        FROM listreservetable;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>

<table border="1">
    <tr>
        <th width="50">
            <div align="center">listReserveTable_NO</div>
        </th>   
        <th width="50">
            <div align="center">invoice_id</div>
        </th>  
        <th width="50">
            <div align="center">table_id</div>
        </th> 
    </tr>

    <?php
        while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
            <tr>
                <td>
                    <?php echo $objResult["listReserveTable_NO"]; ?>
                </td>
                <td>
                    <?php echo $objResult["invoice_id"]; ?>
                </td>
                <td>
                    <?php echo $objResult["table_id"]; ?>
                </td>
                <td align="center"> 
                    <a href="../../manage/delete/deletedata_listreservetable.php?listReserveTable_NO=<?php echo $objResult["listReserveTable_NO"]; ?> ">Delete</a> 
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