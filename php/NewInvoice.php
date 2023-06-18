<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$INVOICEID = $_POST['invoiceid'];
$ADDRESS =$_POST['address'];
$DATE =$_POST['date'];
$LABOURCOST= $_POST['labourcost'];
$SERVICECOST = $_POST['servicecost'];
$TOTALCOST=$_POST['totalcost'];
$VAT  = $_POST['vat'];
$DISCOUNT =$_POST['discount'];
$DISCOUNTTYPE =$_POST['discounttype'];
$GRANDTOTAL =$_POST['grandtototal'];
$VEHICLEREGISTRATIONNUMBER =$_POST['vehicleregistrationnumber'];
$JOBID =$_POST['jobid'];
$CARDID =$_POST['cardid'];
//the data inputed in the fields is inserted in the database// 

$query_INVOICEID = "SELECT CustomerInvoiceID FROM GARITS_Invoice WHERE CustomerInvoiceID ='$INVOICEID'";
        $reg_INVOICEID = mysql_query($db, $query_INVOICEID);

$query_VEHICLEREGISTRATIONNUMBER= "SELECT FK_VehicleRegistrationIDNumber FROM GARITS_Invoice WHERE FK_VehicleRegistrationIDNumber ='$VEHICLEREGISTRATIONNUMBER'";
    $reg_VEHICLEREGISTRATIONNUMBER = mysql_query($db, $query_VEHICLEREGISTRATIONNUMBER);

$query_JOBID = "SELECT FK_JobID FROM GARITS_Invoice WHERE FK_JobID ='$JOBID'";
    $reg_JOBID = mysql_query($db, $query_JOBID);

        if(mysql_num_rows($reg_INVOICEID) > 0){
            echo "<script language = 'javascript'>
            alert('This Invoice ID is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_VEHICLEREGISTRATIONNUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Vehicle registration number is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_JOBID) > 0){
            echo "<script language = 'javascript'>
            alert('This Job ID is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }

else{
        mysql_query($db, "INSERT INTO `GARITS_Invoice` (`InvoiceIDNumber`, `InvoiceAddress`, `InvoiceLabourCost`,`InvoiceServiceCost`, `InvoiceTotalCost`, `InvoiceVAT`, `InvoiceDiscount`, `InvoiceGrandTotal`, `FK_VehicleRegistrationIDNumber`, `FK_JobID`, `FK_CustomerCardID`) VALUES ('".$INVOICEID."', '".$ADDRESS."','".$LABOURCOST."', '".$SERVICECOST."','".$TOTALCOST."','".$VAT."','".$DISCOUNT."','".$GRANDTOTAL."','".$VEHICLEREGISTRATIONNUMBER."','".$JOBID."','".$CARDID."',)")
    }
    print_r ($info);
?>
