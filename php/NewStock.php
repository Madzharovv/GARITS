<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$PARTID = $_POST['partid'];
$NAME =$_POST['name'];
$MANUFACTURER= $_POST['manufacturer'];
$VEHICLETYPE = $_POST['vehicletype'];
$YEAR =$_POST['year'];
$PRICE= $_POST['price'];
$STOCKLEVEL=$_POST['stocklevel'];
$INVOICEIDNUMBER=$_POST['invoiceIDnumber'];


//the data inputed in the fields is inserted in the database// 

$query_PARTID = "SELECT PartID FROM GARITS_StockLedger WHERE PartID ='$PARTID'";
        $reg_PARTID = mysql_query($db, $query_PARTID);

        if(mysql_num_rows($reg_JOBID) > 0){
            echo "<script language = 'javascript'>
            alert('This Invoice ID is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";

        }

        }
else{
        mysql_query($db, "INSERT INTO `GARITS_StockLedger` (`PartID`, `PartName`, `PartManufacturer`, `PartVehicleType`, `PartYear`, `PartPrice`, `PartStockLevel`, `FK_InvoiceIDNumber`) VALUES ('".$PARTID."', '".$NAME."','".$MANUFACTURER."','".$VEHICLETYPE."','".$YEAR."','".$PRICE."','".$STOCKLEVEL."','".$INVOICEIDNUMBER."')")
    print_r ($info);
?>