<?php
    include "connectdb.php";
    $status = mysqli_real_escape_string($db,$_POST['status']);
    $ID = mysqli_real_escape_string($db,$_POST['ID']);
    $query_updateJobStatus = "UPDATE GARITS_Job
    SET JobStatus ='$status'
    WHERE JobID = '$ID'
";
echo $ID;


    if($status!="Cancel" && $status!="To be completed" && $status!= "Completed" && $status!="In Progress"){
        echo "<script language = 'javascript'>
        alert('Invalid Status Option :".$status."');
        window.location.href = '../alterstatus.php?ID=". $ID ."';
        </script>";
    }

    elseif ($db->query($query_updateJobStatus) === TRUE) {
        echo "<script language = 'javascript'>
			alert('SUCESSFULLY UPDATED');
			window.location.href = '../alljobs.php';
			</script>";
    } else {
        echo "<script language = 'javascript'>
        alert('Error updating record');
        window.location.href = '../alterstatus.php?ID=". $ID ."
        </script>";

    }
    /*
    //mysqli_query($db,$query_updateCustomer);
    
    //
    
*/
?>