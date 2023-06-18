<?php
//connecting to the database//
include "connectdb.php";
//initialising the the php variables and linking them to the html ids//
//$STAFFID = $_POST['staffid'];
$NAME =$_POST['firstname'];
$SURNAME= $_POST['lastname'];
$ROLE = $_POST['role'];
$HOURLYRATE=$_POST['rate'];
$USERNAME = $_POST['username'];
$PASSWORD = md5($_POST['psw']);//encryption of the password//
if(!isset($ROLE) || trim($ROLE) == ''){
    echo "<script language = 'javascript'>
            alert('Please select a role.');
            window.history.go(-1);
            </script>";
}
$insert="INSERT INTO GARITS_Staff 
(StaffName, StaffSurname, StaffRole, StaffHourlyRate, StaffUsername, StaffPassword) 
VALUES 
('$NAME','$SURNAME','$ROLE','$HOURLYRATE','$USERNAME','$PASSWORD')
";

$query_USERNAME= "SELECT StaffUsername FROM GARITS_Staff WHERE StaffUsername ='$USERNAME'";
    $reg_USERNAME = $db->query($query_USERNAME);




        if($reg_USERNAME->num_rows > 0){
            echo "<script language = 'javascript'>
            alert('This Username is already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";


        }
        

elseif($db->query($insert) === TRUE){
    echo "<script language = 'javascript'>
    alert('SUCESSFULLY ADDED');
    window.location.href = '../allvehicles.php';
    </script>";
    }

    else{

        echo "<script language = 'javascript'>
        alert('Error creating record');
        window.history.go(-1);
        </script>";
    }
    
//the data inputed in the fields is inserted in the database// 

?>
