<?php
    include "connectdb.php";
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $phoneNumber = mysqli_real_escape_string($db,$_POST['phoneNumber']);
    $ID = mysqli_real_escape_string($db,$_POST['ID']);
    $houseNumber = mysqli_real_escape_string($db,$_POST['houseNumber']);
    $postCode = mysqli_real_escape_string($db,$_POST['postCode']);
    $faxNumber = mysqli_real_escape_string($db,$_POST['faxNumber']);
    $issueNumber = mysqli_real_escape_string($db,$_POST['issueNumber']);

    $query_updateCustomer = "UPDATE GARITS_Customer
    SET CustomerName ='$name',
    CustomerEmail ='$email', 
    CustomerMobileNumber ='$phoneNumber', 
    CustomerHouseNumber ='$houseNumber', 
    CustomerPostCode ='$postCode', 
    CustomerFaxNumber ='$faxNumber', 
    CustomerCardIssueDate ='$issueNumber' 
    WHERE CustomerCardID = '$ID'
";

    if ($db->query($query_updateCustomer) === TRUE) {
        echo "<script language = 'javascript'>
			alert('SUCESSFULLY UPDATED');
			window.location.href = '../allcustomers.php';
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