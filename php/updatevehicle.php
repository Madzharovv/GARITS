<?php
    include "connectdb.php";
    
    $model = mysqli_real_escape_string($db,$_POST['model']);
    //$year = mysqli_real_escape_string($db,$_POST['year']);
    $number = mysqli_real_escape_string($db,$_POST['number']);
    $engine = mysqli_real_escape_string($db,$_POST['engine']);
    $chassis = mysqli_real_escape_string($db,$_POST['chassis']);
    $colour = mysqli_real_escape_string($db,$_POST['colour']);
    $lastMOT = mysqli_real_escape_string($db,$_POST['lastMOT']);
    $nextMOT = mysqli_real_escape_string($db,$_POST['nextMOT']);
    $customerID = mysqli_real_escape_string($db,$_POST['customerID']);
    $reg = mysqli_real_escape_string($db,$_POST['reg']);

    $query_updateVehicle = "UPDATE GARITS_Vehicle
    SET VehicleModel ='$model',
    VehicleNumber ='$number', 
    VehicleEngineSerialNumber ='$engine', 
    VehicleChassisNumber ='$chassis', 
    VehicleColour ='$colour', 
    VehicleLastMOTDate ='$lastMOT',
    VehicleNextMOTDate = '$nextMOT',
    FK_CustomerCardID = '$customerID'
    WHERE VehicleNumber = '$number'
";

    if ($db->query($query_updateVehicle) === TRUE) {
        echo "<script language = 'javascript'>
			alert('SUCESSFULLY UPDATED');
			window.location.href = '../allvehicles.php';
			</script>";
    } else {
        echo "<script language = 'javascript'>
        alert('Error updating record');
        window.history.go(-1)
        </script>";

    }
    //mysqli_query($db,$query_updateCustomer);
    
    //
    /*
*/
?>