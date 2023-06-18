<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$CARDID = $_POST['cardid'];
$NAME =$_POST['fullname'];
$CUSTOMERTYPE =$_POST['customertype'];
$MOBILENUMBER= $_POST['mobilenumber'];
$HOMENUMBER= $_POST['homenumber'];
$EMAIL = $_POST['email'];
$POSTCODE=$_POST['postcode'];
$HOUSENUMBER = $_POST['housenumber'];
$CARDISSUEDATE =$_POST['cardissuedate'];
$CUSTOMERFAXNUMBER= $_POST['customerfaxnumber'];


$query_CARDID = "SELECT CustomerCardID FROM GARITS_Customer WHERE CustomerCardID ='$CARDID'";
        $reg_CARDID = mysql_query($db, $query_CARDID);

$query_MOBILENUMBER= "SELECT CustomerMobileNumber FROM GARITS_Customer WHERE CustomerMobileNumber ='$MOBILENUMBER'";
    $reg_MOBILENUMBER = mysql_query($db, $query_MOBILENUMBER);
    
$query_MOBILENUMBER= "SELECT CustomerMobileNumber FROM GARITS_Customer WHERE CustomerMobileNumber ='$MOBILENUMBER'";
$reg_MOBILENUMBER = mysql_query($db, $query_MOBILENUMBER);

$query_CUSTOMERFAXNUMBER = "SELECT CustomerFaxNumber FROM GARITS_Customer WHERE CustomerFaxNumber ='$CUSTOMERFAXNUMBER'";
    $reg_CUSTOMERFAXNUMBER = mysql_query($db, $query_CUSTOMERFAXNUMBER);

        if(mysql_num_rows($reg_CARDID) > 0){
            echo "<script language = 'javascript'>
            alert('This Customer Card already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_MOBILENUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Mobile Number is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_HOMENUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Home Number is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        if(mysql_num_rows($reg_CUSTOMERFAXNUMBER) > 0){
            echo "<script language = 'javascript'>
            alert('This Customer fax number is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
else{
        mysql_query($db, "INSERT INTO GARITS_Customer (CustomerCardID,CustomerName,CustomerMobileNumber,CustomerHomeNumber,CustomerEmail,CustomerPostCode,CustomerHouseNumber,CustomerCardIssueDate,CustomerFaxNumber) VALUES ('".$CUSTOMERCARDID."', '".$NAME."','".$MOBILENUMBER."','".$HOMENUMBER."', '".$EMAIL."','".$POSTCODE."','".$HOUSENUMBER."' ,'".$CARDISSUEDATE."','".$CUSTOMERFAX."')"
}

//the data inputed in the fields is inserted in the database// 



?>