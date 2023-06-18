<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$JOBID = $_POST['jobid'];
$JOBTYPE =$_POST['jobtype'];
$JOBSTATUS= $_POST['jobstatus'];
$JOBESTIMATEDTIME = $_POST['jobestimatedtime'];
$JOBDESCRIPTION =$_POST['jobdescription'];
$JOBACCEPTEDDATE  = $_POST['jobaccepteddate'];
$JOBDEADLINEDATE =$_POST['jobdeadlinedate'];
$CARDID  =$_POST['cardid'];
$VEHICLEREGISTRATIONNUMBER =$_POST['vehicleregistrationnumber'];

//the data inputed in the fields is inserted in the database// 

$query_JOBID = "SELECT JobID FROM GARITS_StockLedger WHERE JobID ='$JOBID'";
        $reg_JOBID = mysql_query($db, $query_JOBID);


    $query_CARDID = "SELECT FK_CustomerCardID FROM GARITS_StockLedger WHERE FK_CustomerCardID ='$CARDID'";
    $reg_CARDID = mysql_query($db, $query_CARDID);

    $query_VEHICLEREGISTRATIONNUMBER= "SELECT FK_VehicleRegistrationIDNumber FROM GARITS_StockLedger WHERE FK_VehicleRegistrationIDNumber ='$VEHICLEREGISTRATIONNUMBER'";
    $reg_VEHICLEREGISTRATIONNUMBER = mysql_query($db, $query_VEHICLEREGISTRATIONNUMBER);

        if(mysql_num_rows($reg_JOBID) > 0){
            echo "<script language = 'javascript'>
            alert('This Invoice ID is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
       
        if(mysql_num_rows($reg_CARDID) > 0){
            echo "<script language = 'javascript'>
            alert('This Job ID is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }

        if(mysql_num_rows($reg_VEHICLEREGISTRATIONNUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Vehicle registration number is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
else{
        mysql_query($db, "INSERT INTO `GARITS_StockLedger` (`PartID`, `PartName`, `PartManufacturer`, `PartVehicleType`, `PartYear`, `PartPrice`, `PartStockLevel`, `FK_InvoiceIDNumber`)VALUES ('".$JOBID."', '".$JOBTYPE."','".$JOBSTATUS."', '".$JOBESTIMATEDTIME."','".$JOBDESCRIPTION."','".$JOBACCEPTEDDATE."','".$JOBDEADLINEDATE."','".$CARDID."','".$VEHICLEREGISTRATIONNUMBER."')")
    print_r ($info);
?>