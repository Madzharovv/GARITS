<?php
    include "connectdb.php";

    $VehicleRegistrationIDNumber = $_POST['reg'];
    $VehicleManufacturer = $_POST['manufacturer'];
    $VehicleModel = $_POST['model'];
    $VehicleYear = $_POST['year'];
    $VehicleNumber = $_POST['number'];
    $VehicleEngineSerialNumber = $_POST['engine'];
    $VehicleChassisNumber = $_POST['chassis'];
    $VehicleColour = $_POST['colour'];
    $VehicleLastMOTDate = $_POST['lastMOT'];
    $VehicleNextMOTDate = $_POST['nextMOT'];
    $FK_CustomerCardID = $_POST['customerID'];
    $insert = "INSERT INTO GARITS_Vehicle 
    (VehicleRegistrationIDNumber, VehicleModel, VehicleYear, VehicleNumber, VehicleEngineSerialNumber, VehicleChassisNumber, VehicleColour, VehicleLastMOTDate,VehicleNextMOTDate, FK_CustomerCardID)
    VALUES 
    ($VehicleRegistrationIDNumber, 
    $VehicleModel, $VehicleYear, $VehicleNumber, $VehicleEngineSerialNumber, $VehicleChassisNumber, $VehicleColour, $VehicleLastMOTDate, $VehicleNextMOTDate,$FK_CustomerCardID)";

    $query_Registration = "SELECT VehicleRegistrationIDNumber FROM GARITS_Vehicle WHERE VehicleRegistrationIDNumber ='$VehicleRegistrationIDNumber'";
    $result = $db->query($query_Registration);
    //test if reg number already in database
    if($result->num_rows > 0){

        echo "<script language = 'javascript'>
        alert('registration number ".$VehicleRegistrationIDNumber ." already in database');
        window.location.href = '../allvehicles.php';
        </script>";

    }
    else{
        //test if customer card exists
        $query_Customer = "SELECT CustomerCardID FROM GARITS_Customer WHERE CustomerCardID = '$FK_CustomerCardID'";
        $result = $db->query($query_Customer);
        if($result->num_rows !=1){

            echo "<script language = 'javascript'>
            alert('customer card does not exist');
            window.location.href = '../allvehicles.php';
            </script>";
    
        }
        elseif($db->query($insert) === TRUE){
            echo "<script language = 'javascript'>
                alert('SUCESSFULLY ADDED');
                window.location.href = '../allvehicles.php';
                </script>";
            }
        else {
            echo "<script language = 'javascript'>
            alert('Error creating record');
            window.history.go(-1)
            </script>";
        }

    }

    


    

    
?>