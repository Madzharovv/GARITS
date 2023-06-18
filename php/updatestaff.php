<?php
    include "connectdb.php";

    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $username=$_POST["username"];
    $id=$_POST["id"];
    $role=$_POST["role"];
    $rate=$_POST["rate"];
    $password=md5($_POST["password"]);
    echo $rate;
    
    if(!isset($password) || trim($password) == '')
    {
        $query_updatestaff = "UPDATE GARITS_Staff
        SET StaffName ='$name',
        StaffSurname ='$surname', 
        StaffUsername ='$username', 
        StaffHourlyRate ='$rate', 
        StaffRole ='$role'
        WHERE StaffID = '$id'
    ";
    }
    else{
        $query_updatestaff = "UPDATE GARITS_Staff
        SET StaffName ='$name',
        StaffSurname ='$surname', 
        StaffUsername ='$username', 
        StaffHourlyRate ='$rate', 
        StaffRole ='$role',
        StaffPassword ='$password'
        WHERE StaffID = '$id'
    ";

    }
    if ($db->query($query_updatestaff) === TRUE) {
        echo "<script language = 'javascript'>
			alert('SUCESSFULLY UPDATED');
			window.location.href = '../admin-dashboard.php';
			</script>";
    } else {
        echo "<script language = 'javascript'>
        alert('Error updating record');
        window.history.go(-1)
        </script>";

    }

?>